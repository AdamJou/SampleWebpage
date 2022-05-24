

<style>



#tresc{

border-style: groove;
height: 80%;

}

input[type='checkbox']:after {
        width: 15px;
        height: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        
    }

    input[type='checkbox']:checked:after {
        width: 15px;
        height: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
       
    }




form {

text-align: center;
background-color: rgba(0, 0, 0, 0.5);
margin-right: 90px;
margin-left: 55px;

margin-top: -10px;
border-radius: 20px;




}


input[type=submit] {
  width: 30%;
  background: linear-gradient(-45deg, darkorange, #FFD700);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        
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


.ww{
color: #ffbc00 ;
text-shadow: 1px 1px 1px #000000
}

</style>





<form action="index.php?id=71" method="POST">
<center>

 <table>

 <tr>
 <td width="50"> <span class="ww">  Nick: </span> </td> <td> <input  type="text" name="nick"/></td>
</tr>
<tr>
<td width="50"> <span class="ww"> E-mail: </span></td><td> <input type="text" name="email"/></td>
</tr>
<tr>
<td width="50"> <span class="ww"> Kwota: </span></td> <br> <td> <input type="text" name="kwota"/></td><tr>
</tr> 
<br>
<tr><tr>



<tr>
<td width="50"> <span style="color: #d29b00 ;  text-shadow: 1px 1px 1px #000000 ; font-style: italic">Mam 18 lat </td>  <td> <input type=checkbox name="wiek"/> </td>
</tr>
<tr>
<td width="50"> <span style="color: #d29b00 ;  text-shadow: 1px 1px 1px #000000 ; font-style: italic;"> Potwierdzenie email</span></td><td> <input type=checkbox name="potw"/></td>
</tr>
<br>
 

<td><br>



<span style="color: white ;  text-shadow: 1px 1px 0px #000000 ;  font-family: Impact, sans-serif; letter-spacing: 2px ">ZAKŁADY </span><br>


<br>

<span style="background-color:#3CB371 ; padding: 3px ; padding-bottom: 1px; border-radius: 10px ">AUSTRALIAN OPEN 2021 WINNER </style> 


<tr><br>
<td width="50">  <span style="color: white ;  text-shadow: 1px 1px 1px #000000"> Novak Đjoković  </td><td> <input type=radio name=typ value="1"/>  <span style="background-color:#ffa500 ; padding: 3px   ">2.25</style></td>
</tr>
<tr>
<td width="50">   <span style="color: white ;  text-shadow: 1px 1px 1px #000000">  Rafael Nadal   </td><td> <input type=radio name=typ value="2"/>  <span style="background-color:#3CB371 ; padding: 3px  ">6.00</style> </td> 
</tr>
<tr>
<td width="50"> <span style="color: white ;  text-shadow: 1px 1px 1px #000000"> Daniił Miedwiediew </td> <td> <input type=radio name=typ value="3"/>  <span style="background-color:#ffa500; padding: 3px   ">5.50</style> </td>
</tr>
<tr>
<td width="50"> <span style="color: white ;  text-shadow: 1px 1px 1px #000000"> Dominic Thiem </span> </td> <td><input type=radio name=typ value="4"/> <span style="background-color:#3CB371 ; padding: 3px  ">6.20</style> </td>
</tr>
 </table>




<p>
  <input type=submit value="Prześlij"/>
  </p>

</form>
<br>

