<style>

table
{
       border-collapse: collapse;
	color: white;
	text-align: center;
	background-color: rgba(0, 0, 0, 0.5);
	margin-right: auto;
	margin-left: auto;
	margin-top: -10px;
		


}


table, tr   {
  border: 1px solid orange;
	}

table, td   {
  border: none;
	
}

.klasa{

text-decoration: none;
color: red;

</style>

<center>


<h2>Usuń zakład</h2>

<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie można połączyć się z bazą");
mysqli_select_db($baza, "adamm") or die('Nie można wybrać bazy danych: ' . mysql_error());
?>

<?PHP
    $wynik = mysqli_query($baza,"SELECT * FROM zaklady");
?>
<br><br>
<table border="1">
<tr>
<td  width="40"><b>ID</b> </td>
<td width="100"><b>Dyscyplina:</b> </td>
<td width="120"><b>Rozgrywki:</b> </td>
<td align="center"><b>Zwycięzca:</b> </td>
<td width="60"><b>Kurs:</b> </td>
<td width="60"><b></b></td>
</tr>
<?PHP
         while ($row = mysqli_fetch_array($wynik))
          {
             echo "<tr>
               <td align=\"center\">".$row['id']."</td>
                  <td style='width: 150 ;  font-family: Times ' align=\"left\">".$row['dyscyplina']."</td>
                  <td style='width: 150 ; font-family:  Times ' align=\"center\">".$row['rozgrywki']."</td>
                 <td style='font: italic small-caps bold 15px/30px Georgia, serif ; color: gold ; text-shadow: 2px 1px black; ' align=\"center\">".$row['nazwa']."</td>
                  <td style='font-weight: bold; ' align=\"center\">".$row['kurs']."</td>
	
                 <td align=\"center\"><a class='klasa'href=\"index.php?id=51&zaklad=".$row['id']. "\">Usuń</a></td>
                   </tr>";
          }
mysqli_close($baza);
?>
</table>

</center>