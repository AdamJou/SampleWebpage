<style>

h1 {
  font-family: "Work Sans", sans-serif;
  font-weight: 800;
  font-size: 5em;
  width: 5em;
  line-height: 0.9em;
  margin-left: auto;
  margin-right: auto;
  margin-top: -20px;
 }


.rainbow-text {
  background: #CA4246;
  background-color: #CA4246;
  background: conic-gradient(
    #CA4246 16.666%, 
    #E16541 16.666%, 
    #E16541 33.333%, 
    #F18F43 33.333%, 
    #F18F43 50%, 
    #8B9862 50%, 
    #8B9862 66.666%, 
    #476098 66.666%, 
    #476098 83.333%, 
    #A7489B 83.333%);
  
   
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  
   animation: rainbow-text-animation-rev 0.5s ease forwards;

  cursor: pointer;
}


.rainbow-text:hover {
  animation: rainbow-text-animation 0.5s ease forwards;
}

@keyframes rainbow-text-animation {
  0% {
    background-size: 57%;
    background-position: 0 0;
  }
  20% {
    background-size: 57%;
    background-position: 0 1em;
  }
  100% {
    background-size: 300%;
    background-position: -9em 1em;
  }
}

@keyframes rainbow-text-animation-rev {
  0% {
    background-size: 300%;
    background-position: -9em 1em;
  }
  20% {
    background-size: 57%;
    background-position: 0 1em;
  }
  100% {
    background-size: 57%;
    background-position: 0 0;
  }
}


.omnie{

	font-family: Arial Narrow, sans-serif;
	font-size: 20px;
	font-weight: 100;
	text-align: justify;
	line-height: 1em;
	background-color: rgba(0, 0, 0, 0.5);
	padding: 10px;
	border-radius: 1em;
	
}


img{


  
  padding-top: 50px;
  	position: absolute;
	
}

</style>




<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,800&display=swap" rel="stylesheet">

<h1 class="rainbow-text">O mnie<h1>

<div class="omnie">
Nazywam się Adam i może zabrzmi to trochę absurdalnie, ale interesuje się wszystkim co ciekawe.
<p>Moim głownym hobby jest bukmacherka, także w głównej mierze temu będzie poświęcona cała strona,
oprócz tego bardzo lubię piwo a w wolnych chwilach amatorsko tworzę grafikę komputerową.</p>
Posiadam również dwa słodkie kotki.





</div>




<img src="omnie.png"  style="width:530px;height:360px;margin-right:-50%;border-top-right-radius: 200px;">
<img src="omnie2.png"  style="width:530px;height:360px;position: absolute;margin-left:-50%; border-top-left-radius: 200px;">
