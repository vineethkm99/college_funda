<!DOCTYPE html>
<html lang="en">

<head>
	<title>Campus Fundae</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="homepage.html">InstiInfo</a>
		</div>
   
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#topcol">TOP COLLEGES</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#about">ABOUT</a></li>
		  <!-- <li><a href="#feedback">FEEDBACK</a></li> -->
		</ul>
	  </div>
	</div>
</nav>


<div class="head-back text-center container-fluid">
    <h1>Search your campus</h1> <br>
	<div class="search">
		<form class="form-inline" autocomplete="off">
		<input type="text" id="searchbar" class="form-control" size="60" onKeyDown="if(event.keyCode==13)  srcpage(this.value);" onkeyup="showResult(this.value)"  onblur="divhide()" placeholder="Search" required>
		<!--        <button type="button" onclick="srcpage()" class="btn btn-search">Search</button>-->
		</form>
		<div id="searchresults" ></div>
	</div>  
</div>

  <div class="container text-center" id="topcol">
	<br>
	<p id="top-p">Top Colleges</p>
	  
	<div id="myCarousel" class="carousel slide topcolcaro" data-ride="carousel">
	  <div class="carousel-inner" role="listbox"> <!-- Wrapper for slides -->
		<div class="item active">
		  <div class="row">
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-BHU.jpg" class="img-caro"></img>
				<p>IIT-BHU</p>
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-Bhubaneswar-272x125.jpg" class="img-caro"></img>
				<p>IIT-Bhubaneswar</p>
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-Bombay.jpg" class="img-caro"></img>
				<p>IIT-Bombay</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="item">
		  <div class="row">
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-Indore.jpg" class="img-caro"></img>
				<p>IIT-Indore</p>
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-Delhi.jpg" class="img-caro"></img>
				<p>IIT-Delhi</p>
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="imgcard">
				<img src="IIT-Roorkee.jpg" class="img-caro"></img>
				<p>IIT-Roorkee</p>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" width="100px">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>

	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
  </div>
  
  <div id="services" class="container-fluid text-center"><!-- Container (Services Section) -->
	<h2>SERVICES</h2>
	<h4>What we offer</h4>
	<br>
	<div class="row slideanim">
	  <div class="col-sm-4">
		<span><img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px"></span>
		<h4>Name</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	  
	  <div class="col-sm-4">
		<img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px">
		<h4>LOVE</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	  
	  <div class="col-sm-4">
		<img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px">
		<h4>JOB DONE</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	</div>
	
	<br><br>
	
	<div class="row slideanim">
	  <div class="col-sm-4">
		<img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px">
		<h4>GREEN</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	
	  <div class="col-sm-4">
		<img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px">
		<h4>CERTIFIED</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	
	  <div class="col-sm-4">
		<img src="blue.jpg" class="img-responsive ser img-circle" width="100px" height="100px">
		<h4 style="color:#303030;">HARD WORK</h4>
		<p>Lorem ipsum dolor sit amet..</p>
	  </div>
	</div>
  </div>

  <div id="about" class="container-fluid"><!-- Container (About Section) -->
	<div class="row">
	  <div class="col-sm-12">
		<h2 class="text-center">About Us</h2>
		<p>We are a group of enthusiastic young students from IIT Kharagpur we sought out the most fundamental problem faced by students like us just before going to a college that is choosing one which suits you best. Then we decided to take up the challenge of completing this audacious task of creating the country's largest database of colleges.<br><br>We made a platform to provide students the minutest of the details possible of his future college, from where he/she will carve himself/herself out to face the real life challenges. Not just this, we also decided to help him/her a little more by providing the lecture notes by the professors of their very own college along with the lecture slides and other study material like e-book, videos and additional links.<br><br>Then we also decided to make a real-time platform for companies as well as students where we would call the people from the industry to post for jobs internships to the specific students according to their requirements and opened this opportunity to all those thousands of students who use our website.We are also helping students to get internships by providing them the very fundamental basic knowledge about CV, Resume, SOPs and where to apply.
		</p>
	  </div>
	</div>
  </div>
<?php include("footer.php");?>
<?php include("modal_meet_team.php");?>
<?php include("modal_srcresults.php");?>
<?php include("modalfeedback.php");?>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, .btn-lg a, footer a[href='#myPage']").on('click', function(event) {

	// Prevent default anchor click behavior
	event.preventDefault();

	// Store hash
	var hash = this.hash;

	$('html, body').animate({// Using jQuery's animate() method to add smooth page scroll        
	  scrollTop: $(hash).offset().top// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	   }, 900, function(){
	  window.location.hash = hash;//Add hash (#) to URL when done scrolling (default click behavior)
	});
  });
  
  $(window).scroll(function() {
	$(".slideanim").each(function(){
	  var pos = $(this).offset().top;

	  var winTop = $(window).scrollTop();
		
		if (pos < winTop + 600) {
		  $(this).addClass("slide");
		}
	});
  });
})

var str="",i="";
var mousedownHappened=false;
function divhide(){
 if(mousedownHappened) // cancel the blur event
  {
	mousedownHappened = false;
  }
  else   // blur event is okay
  {
	document.getElementById("searchresults").innerHTML="";
	document.getElementById("searchresults").style.display="none";
	document.getElementById('searchbar').value="";
  }
}

$('#searchresults').mousedown(function() {
  mousedownHappened = true;
}
);
 
function srcpage(str){
  if(str!=""){
	$("#mymodals").modal();
	if (window.XMLHttpRequest) {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	} 
	else {  // code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("srcresm").innerHTML=xmlhttp.responseText;
	  }
	}
	
	xmlhttp.open("GET","srcpage.php?q="+str,true);
	xmlhttp.send();
  }

}
   
function showResult(str) {
  
  if (str.length==0) { 
	document.getElementById("searchresults").innerHTML="";
	document.getElementById("searchresults").style.display="none";
	return;
  }
  else{
	document.getElementById("searchresults").style.display="inline";
  }

	
  if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
  } 
  else {  // code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	  document.getElementById("searchresults").innerHTML=xmlhttp.responseText;
	  document.getElementById("searchresults").style.border="1px solid #A5ACB2";
	}
  }
  
  xmlhttp.open("GET","search_home.php?q="+str,true);
  xmlhttp.send();
}

function home(){
  var myurl = 'homepage.html';
  window.open(myurl,"_self");
}
</script>
<script type="text/javascript" src = "feedbackvalidator.js"></script>
</body>
</html>


