<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>STAR DP Help</title>
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
It helps to know what the facility is using as its arrival or departure so the procedure is easier to identify in the list.<br/>
Type D is departure procedure and type S is standard terminal arrival procedure.<br/>
The value used is the leftmost variable so if Ident is filled and Transition is filled Ident is what is retrieved.<br/>
The short name will return the STARs and DPs for those procedures. i.e. GUNNE3<br/>
Ident will return the procedures associated with that navaid or fix identifier. i.e. CVG or GUNNE<br/>
Transition will retrieve a list of procedures to choose from. i.e. HENDERSON<br/>
Name is used to retrieve the exact FAA named procedure. i.e. GUNNE.GUNNE3<br/>
Facility is a search and you use the identifier to obtain a list to help find a specific procedure. i.e. ATL SDZ<br/>
There may be items in the list that are not associated with the facility identifier.<br/>
</p>
</td></tr></table>

<table class="footer"><tr><td>
<?php
$f = new Footer();
?>
</td></tr></table>

</body></html>