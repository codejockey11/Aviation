<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Coded Instrument Flight Procedures Help</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../base.css?v=1" />
<script src="../base.js?v=1" type="text/javascript"></script>
</head>
<body>
<table class="topPanel"><tr><td>
<?php
require_once "../navSignOn.php";
?>
</td></tr></table>

<table class="pageResult"><tr><td>
<p>
Facility Id is the ICAO identifier of the airport.  i.e. KATL, KPIT, I43<br/>
SIAP Id is the landing type and runway with a leading zero. i.e. VORA R13 I03 L21 R03<br/>
Landing types are: I=ILS, L=Localizer, R=RNAV, V=VOR, ending in Z=RNAV Z, ending in Y=RNAV Y, N=NDB<br/>
Transition is the transition fix for the IF or initial fix for the route.<br/>
Turn direction for holds are after the hold leg type. R is right and L is Left. i.e. HM:R:..... or HF:R:........<br/>
</p>
</td></tr></table>

<table class="footer"><tr><td>
<?php
$f = new Footer();
?>
</td></tr></table>

</body></html>