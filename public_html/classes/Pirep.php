<?php
class Pirep
{
	public $xmlFile = null;

	public function __construct($mapBounds)
	{
		// mapBounds is stored as upper-left bottom-right
		$ll = explode(",", $mapBounds);

		$xml = sprintf("http://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=aircraftreports&requestType=retrieve&format=xml&hoursBeforeNow=1&maxLat=%s&minLon=%s&minLat=%s&maxLon=%s", $ll[0], $ll[1], $ll[2], $ll[3]);

		$sr = new SimpleRequest($xml);

		if ($sr->xml == null)
		{
			return;
		}

		$this->xmlFile = $sr->xml;
	}

	public function MapMarkerGoogle()
	{
		if ($this->xmlFile == null)
		{
			return;
		}

		$str  = "";

		foreach ($this->xmlFile->data->AircraftReport as $pirep)
		{
			$icon = "../images/pirep.png";


			$infoWindow  = "<div class=\"infoboxText\">";

			$infoWindow .= FlipTimeDate(str_replace("T", " ", $pirep->receipt_time));

			$infoWindow .= "<br/>";

			if ($pirep->aircraft_ref)
			{
				$infoWindow .= " " . trim($pirep->aircraft_ref);
			}

			if ($pirep->altitude_ft_msl)
			{
				$infoWindow .= " " . trim($pirep->altitude_ft_msl);
			}

			if ($pirep->temp_c)
			{
				$infoWindow .= " " . trim($pirep->temp_c);
			}

			if ($pirep->wind_dir_degrees)
			{
				$infoWindow .= " " . trim($pirep->wind_dir_degrees);
			}

			if ($pirep->wind_speed_kt)
			{
				$infoWindow .= " " . trim($pirep->wind_speed_kt);
			}

			$infoWindow .= str_replace("/", "<br/>/", str_replace(" /", "/", $pirep->raw_text));

			$infoWindow .= "</div>";

		
			$str  .= sprintf("    pirepMarker = new Marker(map, '%s', %s, %s, black, '%s', '%s');\r\n", '', $pirep->latitude, $pirep->longitude, $icon, $infoWindow);
		}

		return $str;
	}
}
?>