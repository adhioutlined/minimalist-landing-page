<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Feel The Force</title>
  <meta name="description" content="Just Another Test Page.">
  <meta name="author" content="Adhi Priharmanto">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Uncomment but keep main.css <link rel="stylesheet" href="css/darktheme.css"> -->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- Hero Section -->
  <div class="section" id="hero">
    <div class="container">
      <div class="row">
        <div class="one-half column" style="margin-top: 25%">
          <div id="rotating-words" class="slider"> <!-- Words from main.js added here -->
            <div class="item">
              <h4>Chapter <span>One.</span></h4>
            </div>
            <div class="item">
              <h4>Chapter <span>Two.</span></h4>
            </div>
            <div class="item">
              <h4>Chapter <span>Three.</span></h4>
            </div>
          </div>
          <div id="rotating-paragraphs" class="slider"> <!-- Add class="slider" and look at main.js if you want to use rotating paragraphs, removed by default because of warnings from empty slider.-->
            <div class="item">
               <p>Holla Folks, Glad to see you arrive here safely. I khow how feel jumping in hyperspace using my scripts <span>Woo..Hoo.</span></p>
            </div>
            <div class="item">
               <p>This server using <b><?php echo $_SERVER['SERVER_SOFTWARE']; ?></b> as Webserver, mixed with <a href="info.php"><b><?php echo 'PHP version: ' . phpversion(); ?></b></a>.
                  Database Engine <b>postgreSQL</b> <span>Whew.</span>
               </p>
            </div>
            <div class="item">
               <img src="icons8-jedi-16.png" alt="" width="16" height="16"><p>I'am Adhi by the way, it is an honor for me to be your <span>Jedi.</span>
               </p>
            </div>  
          </div>
          <div id="social-bar">
            <a class="fas fa-envelope" href="mailto:adhi.pri@gmail.com"></a>
            <a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/adhipri/"></a>
            <a class="fab fa-facebook-f" href="https://www.facebook.com/adhi.pri/"></a>
            <a class="fab fa-github" href="https://github.com/adhioutlined"></a>
            <!-- <a class="fab fa-flickr" href=""></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <!-- Bar at end of page -->
    <div class="container">
        <div class="row"><hr></div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/main.js"></script>
  </footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
