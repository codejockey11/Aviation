<?php
require_once "../includes.php";

$url = "https://api.iextrading.com/1.0/ref-data/symbols";

$json = file_get_contents($url);

$symbols = json_decode($json, true);

if (!$symbols)
{
	return;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>JSON Stock Symbols</title>
<meta charset="UTF-8">
</head>
<body>
<?php
//print_r($symbols);
foreach ($symbols as $sym)
{
	printf("%s~", $sym["symbol"]);
	printf("%s~", $sym["name"]);
	printf("%s~", $sym["date"]);
	printf("%s~", $sym["isEnabled"]);
	printf("%s~", $sym["type"]);
	printf("%s<br/>\r\n", $sym["iexId"]);
}
?>
</body>
</html>