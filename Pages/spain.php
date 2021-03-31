<?PHP
if (empty($_GET['lang']))
{
$LG = "EN";
}
else
{
$LG = $_GET['lang'];
};
include 'lang.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<center><h1><?PHP echo $lang[$LG]['SPAIN'];?></h1></center>
<img src="spain.jpg" style="width:500px;height:300px;margin: 0 auto;">
<h2><?PHP echo $lang[$LG]['SPAINTXT'];?></h2>
<ul>
	<li>Seville</li>
	<li>Córdoba</li>
	<li>Almería </li>
	<li>Guadalajara</li>
	<li>Castellón</li>
	<li>Navarre</li>
	<li>Girona</li>
	<li>Barcelona</li>
	<li>Bermeo</li>
	<li>Zumaia</li>
	<li>Cáceres</li>
</body>
</html>