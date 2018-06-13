<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="My Works page of online portfolio by Christina Langley">
  <meta name="keywords" content="Christina Langley, website developement, portfolio, website design">
  <meta name="author" content="Christina Langley">
  <meta name="copyright" content="Christina Langley">
  
  <title>Christina Langley</title>
  
  <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/bjqs.css">
  
</head>

<body>


<header>
  <h1>Christina Langley</h1>
</header>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">Works</a>
	 <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id = "wrapper">

<main>
      <figure>
      
      </figure>

<h3>The Work</h3>

<p>I have had the opportunity of the course of my studies to learn many things. It has been challenging and frustrating at times, while still managing to be rewarding and fulfilling. 
Each new concept and idea learned has given me an opportunity to learn how to build and design beautiful things to share with you and the world.</p>
<p>While I have learned much over the course of my studies, I understand that there is still so much more I need to learn and there is always room for
me to grow in my skillset and craft. I hope that we can be a part of that growth together. </p> 
<p>Below is a sampling of some of the work I have done over the course of my time as a student. While only a beginning, I look forward to continuing to add beautiful things 
here.</p>
<br>
<br>

<h2>The Journey So Far</h2>

<div class="cycle-slideshow"
	data-cycle-slides="> div.slide"
	data-cycle-pause-on-hover="true"
	data-cycle-swipe="true"
	data-cycle-overlay-template="<div class='headline'><h2>{{title}}</h2><p>{{desc}}</p></div>"
	>
	<div class="cycle-prev"></div>
	<div class="cycle-next"></div>
	<div class="cycle-overlay"></div>
	 <div class="slide" data-cycle-title="Walk Albina's Black History" data-cycle-desc="Group project as UX/UI designer">
	 <a href="http://pcc-webtech.com/albina/">
			<img src="images/Slide1.jpg">
		</a>
	</div>
	<div class="slide" data-cycle-title="Tracey Farms" data-cycle-desc="Mockup Site for local farm">
			 <a href="includes/farm/index.html">
			<img src="images/slide2.jpg">
		</a>
	</div>
	<div class="slide" data-cycle-title="Karalynn Kennedy Photography" data-cycle-desc="Site Mockup for local Photographer">
			 <a href="includes/photo/index.html">
			<img src="images/slide3.jpg">
		</a>
	</div>
	<div class="slide" data-cycle-title="Photoshop" data-cycle-desc="Image correction and enhancement work">
			<img src="images/slide4.jpg">
		</a>
	</div>

	<div class="slide" data-cycle-title="Adobe Applications" data-cycle-desc="Creative Cloud">
		<a href="https://www.adobe.com/creativecloud/catalog/desktop.html">
			<img src="images/slide6.jpg">
		</a>
	</div>
		<div class="slide" data-cycle-title="Wireframe Example" data-cycle-desc="Wireframes">
			<img src="images/slide7.jpg">
		</a>
	</div>
</div>


</main>


</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<script src="script/jquery.js"></script>
<script src="script/jquery.cycle2.min.js"></script>
<script src="script/week7.js"></script>

<?php

include ("includes/footer.php");

?>
</div>
</body>
</html>
