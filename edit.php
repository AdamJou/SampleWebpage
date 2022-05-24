<style>

table
{
       border-collapse: collapse;
	color: white;
	text-align: center;
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto;
	padding: 2em;

}


table, tr   {
  border: 1px solid orange;
	}

table, td   {
  border: none;
	
}

.klas{

text-decoration: none;
color: lightgreen;

} 
input[type=submit] {
  width: 30%;
  background: linear-gradient(-45deg, darkorange, #FFD700);
  color: white;
  padding: 14px 20px;
  margin: 8px;
  margin-right: 40px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: relative;
  font-family: Trebuchet MS, sans-serif;
  font-size: 20px;

}




</style>



<h2> Edytuj zakład</h2>
<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie można połączyć się z bazą");
mysqli_select_db($baza, "adamm") or die('Nie można wybrać bazy danych: ' . mysql_error());
?>
<center> 
<?PHP
if(isset($_GET["zaklad"]))
{  
    $zapytanie = "SELECT *  
                  FROM zaklady
                  where id=".$_GET["zaklad"]."";        
        
    $wyniki = mysqli_query($baza, $zapytanie);
    if (!mysqli_num_rows($wyniki))
    {
        echo '<b>Brak takiego zakładu</b>.';
        exit;
    }
    
    $wiersz = mysqli_fetch_assoc($wyniki); 
    
   echo '
    <form action="index.php?id=41" method="POST">
    <input type="hidden" name="id" value="'.$_GET['zaklad'].'"/>
    <table border="1">
    <tr><td width="120"><b>Dyscyplina:</b> </td><td width="200"><input type="text" name="dyscyplina" value="'.$wiersz['dyscyplina'].'" /></td></tr>
    <tr><td width="120"><b>Rozgrywki:</b> </td><td width="200"><input type="text" name="rozgrywki" value="'.$wiersz['rozgrywki'].'"  /></td></tr>
    <tr><td width="120"><b>Nazwa:</b> </td><td width="200"><input type="text" name="nazwa" value="'.$wiersz['nazwa'].'"  /></td></tr>
    <tr><td width="120"><b>Kurs:</b> </td><td width="200"><input type="float" name="kurs" value="'.$wiersz['kurs'].'"  /></td></tr>

       <input type="submit" name="wyslij" value="Zmień dane" />
    </table>
    </form>
   ';  
   
   
   die();
}
?>
</center> 
<?PHP
    $zapytanie="select * FROM zaklady";
    $wynik = mysqli_query($baza, $zapytanie);
?>
<center><br><br>
<table border="1">
<tr>
<td width="40"><b>ID</b> </td>
<td width="90"><b>Dyscyplina:</b> </td>
<td width="90"><b>Rozgrywki:</b> </td>
<td width="120"><b>Zwycięzca:</b> </td>
<td width="60"><b>Kurs:</b> </td>
<td width="60"><b></b></td>
</tr>
<?PHP
         while ($line = mysqli_fetch_array($wynik))
          {
             echo "<tr>
               <td align=\"center\">".$line['id']."</td>
                   <td style='width: 150 ;  font-family: Times ' align=\"left\">".$line['dyscyplina']."</td>
                   <td style='width: 150 ;  font-family: Times ' align=\"left\">".$line['rozgrywki']."</td>
                   <td <td style='font: italic small-caps bold 15px/30px Georgia, serif ; color: gold ; text-shadow: 2px 1px black; ' align=\"center\">".$line['nazwa']."</td>
			 <td>".$line['kurs']."</td>

                   <td align=\"center\"><a class='klas'href=\"index.php?id=4&zaklad=".$line['id']."\">Edytuj</a></td>
                   </tr>";
          }
mysqli_close($baza);
?>
</table>
</center>
