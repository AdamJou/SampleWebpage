<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie mo¿na po³¹czyæ siê z baz¹");
mysqli_select_db($baza, "adamm") or die('Nie mo¿na wybraæ bazy danych: ' . mysql_error());
?>
<?PHP
$sql = "DELETE FROM zaklady WHERE id='" . $_GET["zaklad"] . "'";
if (mysqli_query($baza, $sql))
{
    echo "Zak³ad usuniêty";
} else {
    echo "Nie uda³o siê: " . mysqli_error($baza);
}


echo "<meta http-equiv='refresh' content='0;url=index.php'>";

mysqli_close($baza);
?>

