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



.pp
{
font-family: Helvetica, sans-serif;
color: gray;
}






</style>



<h2>Zakłady</h2>



<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Połącznie z bazą nieudane");
mysqli_select_db( $baza, "adamm") or die('Nie można wyświetlić bazy ' . mysql_error());
        
if($baza) echo '<span style="color: green">&#10003</span>';
    
$lista='select * from zaklady';
$wynik = mysqli_query($baza, $lista);
?>

<p></p>
<center>
<table border="1">
<tr>
<td width="40"><span class="pp"><b>ID</b></span></td>
<td width="100"><span class="pp"><b>Dyscyplina</b></span> </td>
<td width="120"><span class="pp"><b>Rozgrywki</b></span> </td>
<td align="center"><span class="pp"><b>Zwycięzca</b></span> </td>
<td width="60"><span class="pp"><b>Kurs</b> </span></td>
</tr>
</p>
<?PHP
         while ($line = mysqli_fetch_array($wynik))
          {
             echo "<tr>
                  <td style='color: black 'align=\"center\">".$line['id']."</td>
                   <td style='width: 150 ;  font-family: Times ' align=\"left\">".$line['dyscyplina']."</td>
                   <td style='width: 150 ; font-family:  Times ' align=\"center\">".$line['rozgrywki']."</td>
                 <td style='font: italic small-caps bold 15px/30px Georgia, serif ; color: gold ; text-shadow: 2px 1px black; ' align=\"center\">".$line['nazwa']."</td>
                   <td align=\"center\">".$line['kurs']."</td>
                                  
                   </tr>";
          }
mysqli_close($baza);
?>
</table>
</center>

