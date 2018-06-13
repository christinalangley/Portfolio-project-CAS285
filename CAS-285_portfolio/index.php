<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Index page of online portfolio by Christina Langley">
  <meta name="keywords" content="Christina Langley, website developement, portfolio, website design">
  <meta name="author" content="Christina Langley">
  <meta name="copyright" content="Christina Langley">
  
  <title>Christina Langley</title>

  <link rel="stylesheet" href="styles/styles.css">
   
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
       <img src="images/profile2.jpg" alt="Portfolioortfolio profile image of Christina Langley." class="center">
      </figure>

	<h2>Who am I?</h2>
		<p>That is the million-dollar question. I am a soon to be 2018 graduate of the Portland Community College Web Development and Design program. Over the
		course of my studies I have been blessed with the opportunity to learn many things. That combined with the wonderful and talented people I have meet has
		made it an experience I will never forget.</p>
		
<br>
		
	<h3>What have I learned?</h3>
		
		<ul>
			<li>UX/UI Design</li>
			<li>SEO - Search Engine Optimization</li>
			<li>HTML5</li>
			<li>CSS3</li>
			<li>Javascript</li>
			<li>JQuery</li>
			<li>PHP/mySQL</li>
			<li>Photoshop</li>
			<li>WordPress</li>
		</ul>

<br>
		<p>Though given the opportunity to learn and grow in many areas, my passion is in the those beginning stages. It thrills me to sit down with you and let our
		ideas flow. It is a joy to put the different elements of a site together like the pieces of a puzzle. While the coding and hard work are potatoes 
		the time spent on the creative aspects of your site are definitly the gravy.</p>
		
<br>
	<h3>What is next?</h3>
	
		<p>With graduation around the corner it is the start of a new chapter and a new adventure. With this new adventure I am sure there will be some stumbles 
			and somethings I may not get quite right. Up is my goal from here.</p>
		
		

</main>


</div>


<?php

include ("includes/footer.php");

?>
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

</body>
</html>
