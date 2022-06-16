<?php
require_once "../includes.php";

$ord = null;

if (isset($_GET["ord"]))
{
	$ord = $_GET["ord"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>My Logbook Printable</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../base.css?v=1" />
<script src="../base.js?v=1" type="text/javascript"></script>
</head>
<body>
<table><tr><td class="logbook">
<?php
$lb = new Logbook($sess, null, $ord);

printf("%s", $lb->ListEntries());
?>
<script>print(document)</script>
</td></tr></table>

</body></html>