<style>


#tresc{
height: 55%;

}


form {

text-align: center;
background-color: rgba(0, 0, 0, 0.5);
margin-right: 90px;
margin-left: 55px;
margin-top: -10px;
border-radius: 20px;
padding: 2em;



}





input[type=submit] {
  width: 60%;
  background: linear-gradient(-45deg, darkorange, #FFD700);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
 background: linear-gradient(-45deg, red, #FFD700);

}


input[type=text]  {
  width: 100%;
  padding: 12px 20p
  display: block;
  border-radius: 4px;
  box-sizing: border-box;
  background: #ffa500;
border: none;

  font-family: Trebuchet MS, sans-serif;
}

input[type=float]  {
  width: 100%;
  padding: 12px 20p
  display: block;
  border-radius: 4px;
  box-sizing: border-box;
  background: #ffa500;
border: none;

  font-family: Trebuchet MS, sans-serif;
}




.kolor{

color: white;
}

</style>





<h2>Dodaj zakład</h2>
<br><br>


<form action="index.php?id=31" method="POST">
<table>
<tr><td width="150"><span class="kolor"><b>Dyscyplina:</span></b> </td><td width="200"><input type="text" name="dyscyplina" /></td></tr>
<tr><td width="150"><span class="kolor"><b>Rozgrywki:</span></b> </td><td width="200"><input type="text" name="rozgrywki" /></td></tr>
<tr><td width="150"><span class="kolor"><b>Nazwa:</b> </span></td><td width="200"><input type="text" name="nazwa" /></td></tr>
<tr><td width="150"><span class="kolor"><b>Kurs:</b> </span></td><td width="200"><input type="float" name="kurs" /></td></tr>

<tr><td></td><td><input type="submit" value="Dodaj zakład" /></td></tr>
</table>
</form>