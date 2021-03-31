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
<center><h1><?PHP echo $lang[$LG]['ICELAND'];?></h1></center>
<img src="iceland.jpg" style="width:500px;height:300px;margin: 0 auto;">
<p>    <?PHP echo $lang[$LG]['ICELANDTXT'];?></p>
</body>
</html>