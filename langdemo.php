<html>
<?PHP
if (empty($_GET['lng']))
{
$LG = "EN";
}
else
$LG = $_GET['lng'];

include 'lang.php';
echo $lang[$LG]['LOGIN'];
echo "<br>";
echo $lang[$LG]['SEARCH'];
echo "<br>";
echo $lang[$LG]['FORUM'];
echo "<br>";
echo $lang[$LG]['MAINACTORS'];
echo "<br>";
echo $lang[$LG]['KINGDOMS'];
echo "<br>";
echo $lang[$LG]['STORYLINE'];
echo "<br>";
echo $lang[$LG]['LOCATIONS'];

?>
</html>
