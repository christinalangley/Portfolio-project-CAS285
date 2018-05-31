<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Christina Langley</title>
    <link rel="stylesheet" href="style/reset.css">
  <link rel="stylesheet" href="styles/styles.css">
  
</head>
<body>
<header>
  <h1>Christina langley</h1>
</header>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="about.php">About</a>
	 <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


  <main>
    <section>
      <h1>Contact</h1>
      <figure>
       
      </figure>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ut fugit quidem sed reiciendis, eos illo autem iusto excepturi, delectus? A quam, expedita sint accusamus nostrum tenetur perspiciatis autem, sed!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sapiente, iste ex molestias ratione incidunt, recusandae error velit similique.</p>

     <?php include 'php/mailer.php'; ?>
    </section>
  </main>

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


  
</body>
</html>
