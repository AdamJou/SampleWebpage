<style>

#tresc{

margin-right: auto;
color: white;
margin-left: auto;
  margin-right: auto;
padding-left: 0px;
width: 60%;
height: 50%;

maring-left: -20px;
}

.info{

text-shadow: 1px 1px 2px black;

</style>

<div style="text-align: center;">
    <div style="display: inline-block; text-align: left;">
<h2><span style="color: black ; font-family: Impact, sans-serif; letter-spacing: 2px ; background-color: yellow ; border-radius: 4px ;  padding: 5px">Wynik zakładu</span></h2>
<div class="info">

Nick: <?php echo $_POST['nick']?><br>
Adres email: <?php echo $_POST['email']?><br>
Kwota:  <?php echo $_POST['kwota']?> zł <br><br>
Mam 18 lat: <?php  if (empty($_POST["wiek"]))  $_POST["wiek"]="off";
      if ($_POST["wiek"] == "on")
	echo ' 

	<html>

	<img src="format/check.png" width="20" height="20 <br>" 
	</html>
	';

   else
	echo ' 
	<html>

	<img src="format/lol.png" width="20" height="20 <br>" 
	</html>
	';


   if ($_POST["wiek"] == "off")
	return 1;
;?>
<br>
Potwierdzenie email: <?php  if (empty($_POST["potw"]))  $_POST["potw"]="off";
   if ($_POST["potw"] == "on")
	

		
          echo  $_POST['email']  ;


   else
	echo ' 
	
<html>

<img src="format/lol.png" width="20" height="20 " 
</html>
';
?>
<br>
Zakład:  
<?php if (empty($_POST["typ"]))   $_POST["typ"]="off";

  if ($_POST["typ"] == "off")
	echo "Nie wybrano meczu";
		

 if ($_POST["typ"] == "off")
	return 1;


	switch($_POST['typ']){
   case "1":
     echo "Djokovic N. <br>";
     break;
   case "2":
     echo "Nadal R. <br>";
     break;
   case "3":
     echo "Medvedev D. <br>";
     break;
   case "4":
     echo "Thiem D. <br>";
     break;
	

}

$random = rand ( 1 , 4 );

	switch($random)
	{
   case "1":
     $win="Djokovic N. ";
    $kurs=2.20;
     break;
   case "2":
    $win= "Nadal R. ";
	 $kurs=6.00;
     break;
   case "3":
    $win="Medvedev D. ";
	 $kurs=5.50;
     break;
   case "4":
     $win="Thiem D. ";
	 $kurs=6.20;
     break;
	

}




echo '<span style="color: green;">Zwycięzca : </span> ' . $win;
$suma = $_POST['kwota'] * $kurs;
if (($_POST["typ"] == $random ))
{	
	echo '<br><span style="color: green;">Wygrana: </span>'.$suma . ' zł 
		 <html>

		<img src="format/check.png" width="20" height="20 " 
		</html>
		';

}

	else{
		echo '<br><span style="color: red;">Przegrana </span>
		 <html>

		<img src="format/lol.png" width="20" height="20 " 
		</html>
		';
}

?> 

</div>
    </div>
</div>
