<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>CFR Title 49</title>
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
<?php
$h = fopen("cfr49TOC.html", "r");
if ($h !== false)
{
	$r = fread($h, 8192);
	while(!feof($h))
	{
		printf("%s", $r);
		$r = fread($h, 8192);
	}
	printf("%s", $r);
	fclose($h);
}
?>
</td></tr></table>

<table class="footer"><tr><td>
<?php
$f = new Footer(true);
?>
</td></tr></table>

</body></html>