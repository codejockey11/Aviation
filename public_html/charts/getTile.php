<?php
require_once "../includes.php";

$d = $_GET["d"];
$z = $_GET["z"];
$x = $_GET["x"];
$y = $_GET["y"];
$t = $_GET["t"];

$name = sprintf("%s%s/charts/%s/%s/%s/%s.%s", $root, $publicFolder, $d, $z, $x, $y, $t);

if (file_exists($name))
{
	header("Content-Type: image/png");

	$file = fopen($name, "rb");

	fpassthru($file);

	fclose($file);
}
?>