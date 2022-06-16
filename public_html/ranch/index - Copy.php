<?php
require_once "../includes.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Ranch Map</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../favicon.ico" />
<link rel="stylesheet" href="../base.css?v=1" />
<script src="../base.js?v=1" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaEjDSo20tK6zvtLKQ8RvMf-Jke7BC4nc&v=3.46"></script>
<script type="text/javascript">
//==========================================================================================
var lineArray = [];
var polygonArray = [];

var mousePosition = null;

function InitMap()
{
	map = new google.maps.Map(document.getElementById('map'),
	{
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: true,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			position: google.maps.ControlPosition.TOP_RIGHT,
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE]
		},
		streetViewControl:false,
		fullscreenControl:false,
		zoomControlOptions:
		{
			position: google.maps.ControlPosition.TOP_RIGHT
		},
		center:new google.maps.LatLng(27.514481680749643, -81.15990660605965),
		zoom:13
	});

	google.maps.event.addListener(map, 'mousemove', SetMousePosition);

	// Markers
	marker = new Marker(map, 'DMU C2', 27.542573975209326, -81.16321318806125, lightRed, '../images/gps.png', '<div class="infoboxText">Deer Management Unit C2<br/><a href="https://myfwc.com/hunting/deer/dmu/">FWC</a></div>');

	marker = new Marker(map, 'Cabins', 27.510974420542713, -81.14634624957854, lightRed, '../images/gps.png', '<div class="infoboxText">Cabins and Four Wheelers</div>');
	marker = new Marker(map, 'Range', 27.50957227683714, -81.14663916137394, lightRed, '../images/gps.png', '<div class="infoboxText">Shooting Range</div>');
	marker = new Marker(map, 'Coral', 27.49264451961418, -81.15838459603059, lightRed, '../images/gps.png', '<div class="infoboxText">Arrivals and Departures</div>');

	marker = new Marker(map, '1', 27.525509127594386, -81.1776117948017, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '2', 27.53525038763627, -81.1633493019767, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '3', 27.534335499393762, -81.14841920310458, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '4', 27.513990723159836, -81.16565557741224, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '5', 27.519803900488238, -81.15418489169339, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '6', 27.513017587642658, -81.15520480778702, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '7', 27.513674152963397, -81.14958289797208, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '8', 27.502422612804775, -81.16798756780368, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '9', 27.503871173093987, -81.1524218226029, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '10', 27.488688072376828, -81.15284943242463, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '11', 27.49448292213431, -81.14493897174881, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');
	marker = new Marker(map, '12', 27.48302874508161, -81.14243824547066, lightRed, '../images/gps.png', '<div class="infoboxText">Pasture</div>');

	// Fences
	line = new Line(map, false, green, 6, 'perimeter');

	line.AddPoint('1', 27.481427958136106, -81.13988612248531, '');
	line.AddPoint('2', 27.54067288315938, -81.13934882615018, '');
	line.AddPoint('3', 27.54096607161405, -81.17125640504003, '');
	line.AddPoint('4', 27.541643846372853, -81.18907057299562, '');
	line.AddPoint('5', 27.519497173765217, -81.18931557697232, '');
	line.AddPoint('6', 27.51189261817209, -81.18632612949928, '');
	line.AddPoint('7', 27.50716156000221, -81.17709394033365, '');
	line.AddPoint('8', 27.49957382101028, -81.17114833005353, '');
	line.AddPoint('9', 27.48162839557156, -81.15355149539253, '');
	line.AddPoint('10', 27.481427958136106, -81.13988612248531, '');

	line.End();
	
	lineArray.push(line);



	line = new Line(map, false, blue, 6, 'fence01');

	line.AddPoint('1', 27.54096607161405,-81.17125640504003, '');
	line.AddPoint('2', 27.50836832736483, -81.16870122800991, '');
	line.AddPoint('3', 27.508335660726804, -81.16921490311833, '');
	line.AddPoint('4', 27.507317966643154, -81.17719718393472, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence02');

	line.AddPoint('1', 27.50836832736483, -81.16870122800991, '');
	line.AddPoint('2', 27.51087248588342, -81.14706793115562, '');
	line.AddPoint('3', 27.511591263723247, -81.1469975731619, '');
	line.AddPoint('4', 27.51175773800921, -81.14592313997062, '');
	line.AddPoint('5', 27.516198642518656, -81.14632661490758, '');
	line.AddPoint('6', 27.51608153287936, -81.15517698204255, '');
	line.AddPoint('7', 27.512757721098566, -81.15772985935463, '');
	line.AddPoint('8', 27.509841959201278, -81.156190932677, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence03');

	line.AddPoint('1', 27.516105921244826, -81.15374619360337, '');
	line.AddPoint('2', 27.510175911875788, -81.15325554107834, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence04');

	line.AddPoint('1', 27.51175773800921, -81.14592313997062, '');
	line.AddPoint('2', 27.51101408196168, -81.1458370615186, '');
	line.AddPoint('3', 27.51172870811061, -81.13959692855563, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence05');

	line.AddPoint('1', 27.526834447166213, -81.16988149985896, '');
	line.AddPoint('2', 27.528091112605477, -81.14893923839766, '');
	line.AddPoint('3', 27.526439403087913, -81.13948915166442, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence06');

	line.AddPoint('1', 27.50933328015822, -81.16049887580009, '');
	line.AddPoint('2', 27.508775153836876, -81.16046391617267, '');
	line.AddPoint('3', 27.508591188631083, -81.16265002211347, '');
	line.AddPoint('4', 27.496602962212844, -81.16092407331675, '');
	line.AddPoint('5', 27.493656334709588, -81.15860966197216, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence07');

	line.AddPoint('1', 27.50912241369465, -81.16226103722992, '');
	line.AddPoint('2', 27.50859252807612, -81.16286036538587, '');
	line.AddPoint('3', 27.4963934379401, -81.1609981799054, '');
	line.AddPoint('4', 27.493636092361957, -81.15868674763449, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence08');

	line.AddPoint('1', 27.493656334709588, -81.15860966197216, '');
	line.AddPoint('2', 27.49263955015914, -81.16431835213504, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence09');

	line.AddPoint('1', 27.493656334709588, -81.15860966197216, '');
	line.AddPoint('2', 27.492724503292095, -81.15794772242462, '');
	line.AddPoint('3', 27.48840250331144, -81.16008177562388, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence10');

	line.AddPoint('1', 27.492724503292095, -81.15794772242462, '');
	line.AddPoint('2', 27.491572496559215, -81.1562962883687, '');
	line.AddPoint('3', 27.49337324293331, -81.15417407031028, '');
	line.AddPoint('4', 27.495838854123964, -81.15191063298501, '');
	line.AddPoint('5', 27.498796776334895, -81.1496473887027, '');
	line.AddPoint('6', 27.500385783602585, -81.14671731370225, '');
	line.AddPoint('7', 27.50073502447424, -81.14475607915156, '');
	line.AddPoint('8', 27.500473358589993, -81.14196287810135, '');
	line.AddPoint('9', 27.500667417471934, -81.13965328720346, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence11');

	line.AddPoint('1', 27.495838854123964, -81.15191063298501, '');
	line.AddPoint('2', 27.48162214516782, -81.14613337181947, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence12');

	line.AddPoint('1', 27.50919987458148, -81.16158338812994, '');
	line.AddPoint('2', 27.5207417277805, -81.1634474130474, '');
	line.AddPoint('3', 27.520605870092478, -81.16933632124157, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, blue, 6, 'fence13');

	line.AddPoint('1', 27.540900277796226, -81.15728014873788, '');
	line.AddPoint('2', 27.527670825045647, -81.15610470628478, '');

	line.End();
	
	lineArray.push(line);


	// Runway
	line = new Line(map, false, purple, 6, 'runway');

	line.AddPoint('1', 27.48245608633149, -81.15337797968891, '');
	line.AddPoint('2', 27.49049228615174, -81.14095090114337, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, pink, 6, 'runwayFence01');

	line.AddPoint('1', 27.482705104143527, -81.15457730759783, '');
	line.AddPoint('2', 27.49214472778587, -81.1398281260797, '');

	line.End();
	
	lineArray.push(line);


	line = new Line(map, false, pink, 6, 'runwayFence02');

	line.AddPoint('1', 27.481686391353154, -81.15363315583974, '');
	line.AddPoint('2', 27.490175376702886, -81.1398281260797, '');

	line.End();
	
	lineArray.push(line);


	polygon = new Polygon(map, gold, '<div class="infoboxText">Deer Plot 1</div>');

	polygon.AddPoint(27.49964349674624, -81.16864190692769);
	polygon.AddPoint(27.500173425458136, -81.16932468583954);
	polygon.AddPoint(27.500422406956027, -81.16896622691081);
	polygon.AddPoint(27.499969865842044, -81.16840103770046);

	polygon.End(27.499969865842044, -81.16840103770046);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, gold, '<div class="infoboxText">Deer Plot 2</div>');

	polygon.AddPoint(27.51254280027058, -81.18286766414094);
	polygon.AddPoint(27.512655502267403, -81.18256800006296);
	polygon.AddPoint(27.51215927619253, -81.18237075282177);
	polygon.AddPoint(27.512093673255794, -81.18263627795415);

	polygon.End(27.512093673255794, -81.18263627795415);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, gold, '<div class="infoboxText">Deer Plot 3</div>');

	polygon.AddPoint(27.54071888180037, -81.17070142282446);
	polygon.AddPoint(27.540715518421987, -81.16920310243461);
	polygon.AddPoint(27.54030854887767, -81.16918034313754);
	polygon.AddPoint(27.540271551571635, -81.17071659568917);

	polygon.End(27.540271551571635, -81.17071659568917);
	
	polygonArray.push(polygon);

	
	polygon = new Polygon(map, gold, '<div class="infoboxText">Deer Plot 4</div>');

	polygon.AddPoint(27.518567251450254, -81.14224478047755);
	polygon.AddPoint(27.518806099179137, -81.14193373675106);
	polygon.AddPoint(27.51791125854019, -81.14128130356863);
	polygon.AddPoint(27.517618583518015, -81.141353374676);
	polygon.AddPoint(27.517537845443798, -81.14159993372749);

	polygon.End(27.517537845443798, -81.14159993372749);
	
	polygonArray.push(polygon);

	
	polygon = new Polygon(map, gold, '<div class="infoboxText">Deer Plot 5</div>');

	polygon.AddPoint(27.500467018458497, -81.14840798690395);
	polygon.AddPoint(27.500847679930086, -81.14762746411952);
	polygon.AddPoint(27.50052411776317, -81.14746653158666);
	polygon.AddPoint(27.500145834317795, -81.14826582983324);

	polygon.End(27.500145834317795, -81.14826582983324);
	
	polygonArray.push(polygon);



	polygon = new Polygon(map, paleVioletRed, '<div class="infoboxText">Food Plot 1</div>');

	polygon.AddPoint(27.524628761447538, -81.1891097142289);
	polygon.AddPoint(27.525071446917874, -81.18838724675187);
	polygon.AddPoint(27.524818281962926, -81.18816396761989);
	polygon.AddPoint(27.524360037768687, -81.18891195271202);

	polygon.End(27.524360037768687, -81.18891195271202);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, paleVioletRed, '<div class="infoboxText">Food Plot 2</div>');

	polygon.AddPoint(27.541240236676632, -81.18454043079622);
	polygon.AddPoint(27.541184240379902, -81.18348487559432);
	polygon.AddPoint(27.54081626400549, -81.18352096295165);
	polygon.AddPoint(27.540778266374904, -81.18449532159957);

	polygon.End(27.540778266374904, -81.18449532159957);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, paleVioletRed, '<div class="infoboxText">Food Plot 3</div>');

	polygon.AddPoint(27.540590536446892, -81.14536906258276);
	polygon.AddPoint(27.54040555026684, -81.14445489748414);
	polygon.AddPoint(27.53999521617398, -81.14458007361797);
	polygon.AddPoint(27.540200383411946, -81.14549044550041);

	polygon.End(27.540200383411946, -81.14549044550041);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, green, '<div class="infoboxText">Feeder 1</div>');

	polygon.AddPoint(27.532011998160428, -81.17828297044184);
	polygon.AddPoint(27.531975132085243, -81.17816361214662);
	polygon.AddPoint(27.53186572301518, -81.17821457411537);
	polygon.AddPoint(27.531906156814628, -81.17833393241058);

	polygon.End(27.531906156814628, -81.17833393241058);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, green, '<div class="infoboxText">Feeder 2</div>');

	polygon.AddPoint(27.523903761928494, -81.16670902147854);
	polygon.AddPoint(27.5239620383847, -81.16665940061424);
	polygon.AddPoint(27.52391684440094, -81.16658563987001);
	polygon.AddPoint(27.52386213586945, -81.16664598956984);

	polygon.End(27.52386213586945, -81.16664598956984);
	
	polygonArray.push(polygon);


	polygon = new Polygon(map, lightSalmon, '<div class="infoboxText">Hay Field</div>');

	polygon.AddPoint(27.517336321362652, -81.15159304484162);
	polygon.AddPoint(27.517378754171048, -81.1497876735745);
	polygon.AddPoint(27.517192049691726, -81.1490827494578);
	polygon.AddPoint(27.517438160075272, -81.14847989580147);
	polygon.AddPoint(27.51752019674739, -81.14756445136037);
	polygon.AddPoint(27.517834198616736, -81.14674150827393);
	polygon.AddPoint(27.517517367897657, -81.14649909093063);
	polygon.AddPoint(27.517217509412124, -81.14717211802845);
	polygon.AddPoint(27.516657394202177, -81.15045751097043);
	polygon.AddPoint(27.516889361453355, -81.1509008795325);
	polygon.AddPoint(27.51691765010903, -81.15150692289073);

	polygon.End(27.517336321362652, -81.15159304484162);
	
	polygonArray.push(polygon);
}

function SetMousePosition(event)
{
	mousePosition = event.latLng;
	
	lineArray.forEach(SetArrayMousePosition);

	polygonArray.forEach(SetArrayMousePosition);
}

function SetArrayMousePosition(value, index, array)
{
    array[index].SetMousePosition(mousePosition);
}
</script>
</head>
<body onload="InitMap()">

<table class="topPanel"><tr><td>
<?php
require_once "../navSignOn.php";
?>
</td></tr></table>

<table class="mapGoogle">
<tr>
<td id="map" width="90%"></td>
</tr>
</table>

<table class="footer" style="top:-8px"><tr><td>
<?php
$f = new Footer();
?>
</td></tr></table>

</body></html>