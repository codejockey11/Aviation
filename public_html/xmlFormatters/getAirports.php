<?php
require_once "../includes.php";

$lookup = explode(",", $_GET["q"]);

$from = new LatLon($lookup[0], $lookup[1]);

$to = new LatLon($lookup[2], $lookup[3]);

$sql = sprintf("SELECT * FROM aptAirport USE INDEX (aptAirportLatLon) WHERE latitude>='%s' AND latitude<='%s' AND longitude>='%s' AND longitude<='%s'", $to->formattedLat, $from->formattedLat, $to->formattedLon, $from->formattedLon);

if ($sess->showHeliport)
{
	$sql .= " AND type='HELIPORT'";
}
else
{
	$sql .= " AND type!='HELIPORT'";
}

$apt = new Airport($sess, $sql);

header("Content-Type: text/xml");

printf("<?xml version=\"1.0\"?>");

printf("<result sessionId=\"%s\">", $sess->sessionId);

printf("%s", $apt->FormatXML());

printf("</result>");
?>