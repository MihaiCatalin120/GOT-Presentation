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
	<title>Locations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style-TMC.css" type="text/css" rel="stylesheet" />
</head>
<body background="Images/background.jpg">
	<div id="container">
		<div id="top">
			<div id="logo">
				<a href="http://goft.jvscript.de/index2.php"<img src="Images/logo.jpg" style="width:250px;height:150px;"></a>
			</div>
			<div id="mtop">
				<div id="title">
					<h1><?PHP echo $lang[$LG]['LOCATIONS'];?></h1>
				</div>
				<div id="lng">
					<button class="button" ><?PHP echo $lang[$LG]['GER'];?></button>
					<button class="button" ><?PHP echo $lang[$LG]['ENG'];?></button>
					<button class="button" ><?PHP echo $lang[$LG]['ROM'];?></button>
				</div>
			</div>
			<div id="rtop">
				<div id="login">
					<form class="login-form">
		      		<center><input type="text" placeholder="username"/></center>
		      		<center><input type="password" placeholder="password"/></center>
		      		<center><button><?PHP echo $lang[$LG]['LOGIN'];?></button></center>
		    	</form>
				</div>
				<div id="search">
					<form class="search">
		      		<center><input type="text" placeholder="Search here"/></center>
		      		<center><button><?PHP echo $lang[$LG]['SEARCH'];?></button></center>
		    	</form>
				</div>
			</div>
		</div>
		<div id="bot">
			<div id="menu">
				<center><a href="http://goft.jvscript.de/index2.php"><img src="Images/home.gif" style="width:50px;height:50px;border-radius:5px;"></a></center><hr>
				<div id="menu">
			<a href="Pages/northernisl.php" target="content"><button class="button button1"><?PHP echo $lang[$LG]['NISL'];?></button></a><hr>
			<a href="Pages/croatia.php" target="content"><button class="button button2"><?PHP echo $lang[$LG]['CROATIA'];?></button></a><hr>
			<a href="Pages/iceland.php" target="content"><button class="button button3"><?PHP echo $lang[$LG]['ICELAND'];?></button></a><hr>
			<a href="Pages/spain.php" target="content"><button class="button button4"><?PHP echo $lang[$LG]['SPAIN'];?></button></a><hr>
			<a href="Pages/malta.php" target="content"><button class="button button5"><?PHP echo $lang[$LG]['MALTA'];?></button></a><hr>
			<a href="Pages/morocco.php" target="content"><button class="button button6"><?PHP echo $lang[$LG]['MOROCCO'];?></button></a><hr>
			</div>
			</div>
			<div id="content">
				<iframe src="Pages/northernisl.html" name="content" style="border:none;height:650px;width:100%"></iframe>
			</div>
			<div id="summary">
				<br><hr>
				<center><a href="http://goft.jvscript.de/index-ALE.html"><?PHP echo $lang[$LG]['KINGDOMS'];?></a><br><hr></center>
				<center><a href="http://goft.jvscript.de/index-AMG.html"><?PHP echo $lang[$LG]['MAINACTORS'];?></a><br><hr></center>
				<center><a href="http://goft.jvscript.de/index-DAM.html"><?PHP echo $lang[$LG]['STORYLINE'];?></a><br><hr></center>
			</div>
		</div>
	</div>
</body>
</html>
