<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie mo�na po��czy� si� z baz�");
mysqli_select_db($baza, "adamm") or die('Nie mo�na wybra� bazy danych: ' . mysql_error());
?>
<?PHP
$sql = "DELETE FROM zaklady WHERE id='" . $_GET["zaklad"] . "'";
if (mysqli_query($baza, $sql))
{
    echo "Zak�ad usuni�ty";
} else {
    echo "Nie uda�o si�: " . mysqli_error($baza);
}


echo "<meta http-equiv='refresh' content='0;url=index.php'>";

mysqli_close($baza);
?>

