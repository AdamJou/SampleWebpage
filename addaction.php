<style>


table
{
       border-collapse: collapse;
	color: white;
	text-align: center;
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto;
		


}


table, tr   {
  border: 1px solid orange;
	}

table, td   {
  border: none;
	
}

</style>







<p><b>Dodano następujący zakład</b></p>

<center>
<table border="1">
<tr><td width="120"><b>Dyscyplina:</b> </td><td width="200"><? echo $_POST["dyscyplina"];?></td></tr>
<tr><td width="120"><b>Rozgrywki:</b> </td><td width="200"><? echo $_POST["rozgrywki"];?></td></tr>
<tr><td width="120"><b>Nazwa:</b> </td><td width="200"><? echo $_POST["nazwa"];?></td></tr>
<tr><td width="120"><b>Kurs:</b> </td><td width="200"><? echo $_POST["kurs"];?></td></tr>
</table>

<br>

<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie mozna polaczyc sie z baza");
mysqli_select_db($baza, "adamm") or die('Nie mozna wybrac bazy danych: ' . mysql_error());
if($baza) echo '<span style="color: green">&#10003</span>';
?>


<?PHP
   $zapytanie = "INSERT INTO zaklady(dyscyplina,rozgrywki,nazwa,kurs)
                     VALUES(
                     '".$_POST["dyscyplina"]."',
                     '".$_POST["rozgrywki"]."',
                     '".$_POST["nazwa"]."',
                      ".$_POST["kurs"].")";                     

        

        $wynik = mysqli_query($baza, $zapytanie);

        if($wynik)
        {
            echo "<br>Dane zostaly zapisane.<br>";
        }
        else
        {    
              echo "Dane nie zostaly zapisane.<br>";
        }
mysqli_close($baza);
?>

</center>
