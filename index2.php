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
	<title>GoT Homepage</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" type="text/css" rel="stylesheet" />
	<script src="scripts/index2.js"></script>
</head>
<body>
<div id="main">
<div id="gamefield" align="center">
	<table>
		<tr>
			<td>
					<h1>Your turn:</h1>
			</td>
			<td>
				<img id="nextplayer" src="Images/player1.jpg" alt="player1"><br>
			</td>
		</tr>
	<table>
		<tr>
			<td>
				<img id="field11" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field21" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field31" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
		</tr>
		<tr>
			<td>
				<img id="field12" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field22" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field32" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
		</tr>
		<tr>
			<td>
				<img id="field13" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field23" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
			<td>
				<img id="field33" src="Images/unselect.jpg" alt="unselect" onclick="selectfield(this)" >
			</td>
		</tr>
	</table>
	</table>
	<button class="button" style="margin:0 auto;" onclick="ceva()">Close</button>
	</div>
</div>
	<div id="container">
		<div id="top">
			<div id="logo">
				<img src="logo2.png" style="width:250px;height:150px;">
			</div>
			<div id="mtop">
				<div id="title">
					<img src="title.jpg" style="width: 574px;height: 100px;">
				</div>
				<div id="lng">
					<button class="button" ><?PHP echo $lang[$LG]['GER'];?></button>
					<button class="button" ><?PHP echo $lang[$LG]['ENG'];?></button>
					<button class="button" ><?PHP echo $lang[$LG]['ROM'];?></button>
					<button class="button" style="float:right;" onclick="ceva()">TicTacToe</button>
				</div>
			</div>
			<div id="rtop">
				<div id="login">
				</div>
				<div id="search">
				</div>
			</div>
		</div>
		<div id="bot">
			<div id="menu">
				<div id="menu">
					<a href="http://goft.jvscript.de/index-AMG.html" target=""><button class="button button1"><?PHP echo $lang[$LG]['MAINACTORS'];?></button></a><br>
					<a href="http://goft.jvscript.de/index-ALE.html" target=""><button class="button button2"><?PHP echo $lang[$LG]['KINGDOMS'];?></button></a><br>
					<a href="http://goft.jvscript.de/index-DAM.html" target=""><button class="button button3"><?PHP echo $lang[$LG]['STORYLINE'];?></button></a><br>
					<a href="http://goft.jvscript.de/index-TMC.php" target=""><button class="button button4"><?PHP echo $lang[$LG]['LOCATIONS'];?></button></a><br>
				</div>
			</div>
			<div id="content">
       			<img src="fete.jpg" id="adBanner" style="margin-left:100px;width:380px;height:200px;margin-top: 20px;"><br>
				<p style="font-size: 120%; text-indent: 50px;"><i><b><?PHP echo $lang[$LG]['P1'];?></b></i></p>
				<p style="font-size: 120%; text-indent: 50px;"><i><b><?PHP echo $lang[$LG]['P2'];?></b></i></p>
			</div>
			<div id="summary">
			<img src="s7.jpg" style="width:190px;height: 350px;margin-top:50px;">
			<form class="login-form">
		      		<center><input type="text" placeholder="username"/></center>
		      		<center><input type="password" placeholder="password"/></center>
		      		<center><button><?PHP echo $lang[$LG]['LOGIN'];?></button></center>
		    </form>
			<form class="search">
		      		<center><input type="text" placeholder="Search here"/></center>
		      		<center><button><?PHP echo $lang[$LG]['SEARCH'];?></button></center>
		    	</form>
			</div>
		</div>
	</div>
</html>