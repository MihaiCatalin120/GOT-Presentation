function ceva() {
    var y = document.getElementById('main');
	if (y.style.visibility === 'hidden'){
		y.style.visibility = 'visible';
	} else {
		y.style.visibility = 'hidden';
	}
}
var x=0;
function selectfield(field)
{
	x=x+1;
	if (field.alt == "unselect")
	{
		nextplayer = document.getElementById("nextplayer").alt;
		if (nextplayer == "player1")
		{
			field.src = "Images/player1.jpg";
			field.alt = "player1";
			document.getElementById("nextplayer").src = "Images/player2.jpg";
			document.getElementById("nextplayer").alt = "player2";
		};
		if (nextplayer == "player2")
		{
			field.src = "Images/player2.jpg";
			field.alt = "player2";
			document.getElementById("nextplayer").src = "Images/player1.jpg";
			document.getElementById("nextplayer").alt = "player1";
		};
	}
	else
	{
		alert("This part of the sea is choosen by "+field.alt);
	};
	if(x>=5)
	{
		if(((document.getElementById("field11").alt==document.getElementById("field12").alt) && (document.getElementById("field12").alt==document.getElementById("field13").alt) && (document.getElementById("field13").alt=="player1")) || ((document.getElementById("field21").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field23").alt) && (document.getElementById("field23").alt=="player1")) || ((document.getElementById("field31").alt==document.getElementById("field32").alt) && (document.getElementById("field32").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player1")) || ((document.getElementById("field11").alt==document.getElementById("field21").alt) && (document.getElementById("field21").alt==document.getElementById("field31").alt) && (document.getElementById("field31").alt=="player1")) || ((document.getElementById("field12").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field32").alt) && (document.getElementById("field32").alt=="player1")) || ((document.getElementById("field13").alt==document.getElementById("field23").alt) && (document.getElementById("field23").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player1")) || ((document.getElementById("field11").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player1")) || ((document.getElementById("field13").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field31").alt) && (document.getElementById("field31").alt=="player1")))
		{
			alert("Player 1 wins!");
		}
		else if(((document.getElementById("field11").alt==document.getElementById("field12").alt) && (document.getElementById("field12").alt==document.getElementById("field13").alt) && (document.getElementById("field13").alt=="player2")) || ((document.getElementById("field21").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field23").alt) && (document.getElementById("field23").alt=="player2")) || ((document.getElementById("field31").alt==document.getElementById("field32").alt) && (document.getElementById("field32").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player2")) || ((document.getElementById("field11").alt==document.getElementById("field21").alt) && (document.getElementById("field21").alt==document.getElementById("field31").alt) && (document.getElementById("field31").alt=="player2")) || ((document.getElementById("field12").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field32").alt) && (document.getElementById("field32").alt=="player2")) || ((document.getElementById("field13").alt==document.getElementById("field23").alt) && (document.getElementById("field23").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player2")) || ((document.getElementById("field11").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field33").alt) && (document.getElementById("field33").alt=="player2")) || ((document.getElementById("field13").alt==document.getElementById("field22").alt) && (document.getElementById("field22").alt==document.getElementById("field31").alt) && (document.getElementById("field31").alt=="player2")))
		{
			alert("Player 2 wins!");
		};
	}
	if(x==9)
	{
		alert("Draw");
	};
}

function mobile()
{
var userAgent = navigator.userAgent;
var ismobile = 0;
ismobile = userAgent.search("Mobile"); 
if (ismobile<"1") {ismobile = userAgent.search("BlackBerry"); };
if (ismobile<"1") {ismobile = userAgent.search("iPhone"); };
if (ismobile<"1") {ismobile = userAgent.search("iPad"); };

if (ismobile>"1") {window.alert("Seams that you are on a mobile device!");
}
else {window.alert("You are on"+userAgent);};

};