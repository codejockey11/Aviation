<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Fix Help</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../base.css?v=1" />
<script src="../base.js?v=1" type="text/javascript"></script>
</head>
<body>
<table class="topPanel"><tr><td>
<?php
require_once "../navSignOn.php";
$p = new Parameter("magVarCalculator");
?>
</td></tr></table>

<table class="pageResult"><tr><td>
<p>
Enter the five letter identifier of the fix or intersection. i.e. SUNOL<br/>
The magnetic variation value is calculated every 28 day cycle.&nbsp;&nbsp;<a href="<?php echo $p->value1; ?>"><?php echo $p->value2; ?></a><br/>
</p>
</td></tr></table>

<table class="footer"><tr><td>
<?php
$f = new Footer();
?>
</td></tr></table>

</body></html>