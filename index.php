
<html>

<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="Content-Language" Content="pl">
  <meta name="Author" Content="adam.m">
<title>Instakilogram</title>
<link href="format/styl.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<style>

</style>
<link rel="icon" href="ico.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="ico.ico" type="image/x-icon"/>
</head>

<body>
<header id="naglowek">

</header>


<nav id="menu">
<ul>
<li><a href="index.php?id=1">O mnie</a></li>
<li><a href="index.php?id=2">Pokaż zakłady</a></li>
<li><a href="index.php?id=3">Dodaj zakład</a></li>
<li><a href="index.php?id=4">Edytuj zakład</a></li>
<li><a href="index.php?id=5">Usuń zakład</a></li>
<li><a href="index.php?id=7">Obstaw</a></li>
</ul>
</nav>

<article id="tresc">


<?PHP
    if(empty($_GET["id"])) $_GET["id"]=1;
    if($_GET["id"]==1) include("main.php");
    if($_GET["id"]==2) include("show.php");
    if($_GET["id"]==3) include("add.php");
    if($_GET["id"]==4) include("edit.php");
    if($_GET["id"]==5) include("delete.php");
    if($_GET["id"]==6) include("search.php");
    if($_GET["id"]==7) include("formularz1.php");
    if($_GET["id"]==71) include("formularz1action.php");
    if($_GET["id"]==31) include("addaction.php");
    if($_GET["id"]==41) include("editaction.php");
    if($_GET["id"]==51) include("deleteaction.php");

   ?>
</article>
<div class="box">
	<div class="lol">	

		   	<center><br><br><br><br>
		   <a href="#" style="text-decoration:none; color: orange">&nbsp;</a>			
		   	<audio id="beep" preload="auto">
				<source src="muzyka.mp3"></source>
			</audio>
			
		</center>
		  </div>
<p id="triangle-right"></p>		


</div>
	
			
		<script>
		
		var beepOne = $("#beep")[0];
		$(".lol")
	.mouseenter(function() {
		beepOne.play();
	
	});
	
	</script>
<footer id="stopka"> by adam.m</footer>


</body>
</html
