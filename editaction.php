
<?PHP
$baza = mysqli_connect("localhost", "adamm", "rzepka") or die ("Nie mo�na po��czy� si� z baz�");
mysqli_select_db($baza, "adamm") or die('Nie mo�na wybra� bazy danych: ' . mysql_error());
?>

<?PHP
if(isset($_POST['wyslij']))
{

   $zapytanie = "UPDATE zaklady SET                     
                     dyscyplina = '".$_POST["dyscyplina"]."',
                     rozgrywki = '".$_POST["rozgrywki"]."',
                     nazwa = '".$_POST["nazwa"]."',
                     kurs = ".$_POST["kurs"]." 
                     WHERE id=".$_POST["id"];

        


        $wynik = mysqli_query($baza, $zapytanie);

        if($wynik)
        {
            echo "<b>Dane zosta&#322y zapisane.</b><br>";
        }
        else
        {    
              echo "<b>Dane nie zosta&#322y zapisane.</b><br>";
        }    
}
mysqli_close($baza);