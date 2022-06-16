<?php
class PjaLocationData
{
	public $id;
	public $pjaId;
	public $navaid;
	public $azimuth;
	public $distance;
	public $state;
	public $latitude;
	public $longitude;
	public $airportName;
	public $dropZoneName;
	public $altitude;
	public $radius;
	public $descriptive;
	public $fssIdent;
	public $pjaUse;

	public $latLon;

	public $pjaTimes;
	public $pjaUserGroup;
	public $pjaContact;
	public $pjaRemarks;

	public $sess;

	public function __construct($sess)
	{
		$this->sess = $sess;
	}
	
	public function FormatMarkerGoogle()
	{
		$infoWindow  = "<div class=\"infoboxParachute\">";

		$infoWindow .= sprintf("%s", $this->pjaId);

		$infoWindow .= sprintf(" %s", str_replace("'", "", $this->airportName));
			
		$infoWindow .= sprintf(" %s", str_replace("'", "", $this->dropZoneName));
		
		$infoWindow .= $this->pjaTimes->ListEntries();

		$infoWindow .= $this->pjaUserGroup->ListEntries();

		$infoWindow .= $this->pjaContact->ListEntries();

		$infoWindow .= $this->pjaRemarks->ListEntries();

		$infoWindow .= "</div>";

		$str  = sprintf("    parachuteCircle = new Circle(map, '%s', %s, %s, '%s', '%s');\r\n", $this->radius, $this->latLon->decimalLat, $this->latLon->decimalLon, 'purple', $infoWindow);

		return $str;
	}
}

class PjaLocation
{
	public $sess;
	public $location = array();

	public function __construct($sess, $sql)
	{
		$this->sess = $sess;
		
		$pjaDbase = new Database();
		
		$pjaDbase->ExecSql($sql);

		if ($pjaDbase->GetRowCount() > 0)
		{
			while($row = $pjaDbase->FetchRow())
			{
				$this->GetRow($row);
			}
		}
		else
		{
			$this->location = null;
		}

		$pjaDbase->Disconnect();
	}

	public function GetRow($row)
	{
		$pjaLocationData = new PjaLocationData($this->sess);

		$pjaLocationData->id = $row["id"];
		$pjaLocationData->pjaId = $row["pjaId"];
		$pjaLocationData->navaid = $row["navaid"];
		$pjaLocationData->azimuth = $row["azimuth"];
		$pjaLocationData->distance = $row["distance"];
		$pjaLocationData->state = $row["state"];
		$pjaLocationData->latitude = $row["latitude"];
		$pjaLocationData->longitude = $row["longitude"];
		$pjaLocationData->airportName = $row["airportName"];
		$pjaLocationData->dropZoneName = $row["dropZoneName"];
		$pjaLocationData->altitude = $row["altitude"];
		$pjaLocationData->radius = $row["radius"];
		$pjaLocationData->descriptive = $row["descriptive"];
		$pjaLocationData->fssIdent = $row["fssIdent"];
		$pjaLocationData->pjaUse = $row["pjaUse"];

		$pjaLocationData->latLon = new LatLon($pjaLocationData->latitude, $pjaLocationData->longitude);

		$pjaLocationData->pjaTimes = new PjaTimes($pjaLocationData->pjaId);
		$pjaLocationData->pjaUserGroup = new pjaUserGroup($pjaLocationData->pjaId);
		$pjaLocationData->pjaContact = new pjaContact($pjaLocationData->pjaId);
		$pjaLocationData->pjaRemarks = new pjaRemarks($pjaLocationData->pjaId);

		array_push($this->location, $pjaLocationData);
	}

	public function MapMarkerGoogle()
	{
		if ($this->location == null)
		{
			return;
		}

		$str = null;

		foreach ($this->location as $pja)
		{
			$str .= $pja->FormatMarkerGoogle();
		}

		return $str;
	}
}
?>