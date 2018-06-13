<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Contact page of online portfolio by Christina Langley">
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
    <section>
      <h1>Contact</h1>
      <figure>
       
      </figure>
	  <p>Christina Langley<br>
	     937 SE Sheridan RD <br>
	     G104<br>
		 Sheridan, OR 97378<br>
		 christina.langley@pcc.edu</p>
		 
	  <h3>Send an Email</h3>

      <p>In this day and age there are so many ways to contact someone. All of them are great if I say so. The best way to contact me is via the form below or through email. I will give you a timely reply general within 24 to 48 hours.</p>
      <p>Each and every message I receive is important to me and I want nothing more than to be able to devote the time and attention you deserve to your message.</p>

     <?php include 'php/mailer.php'; ?>
    </section>
  </main>
  </div>

   <?php include 'includes/footer.php'; ?>

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

</div>
  
</body>
</html>
