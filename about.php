<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Dominique The Developer | About Me</title>
</head>

<body class="d-flex flex-column">

  <!-- Header Section Start -->

  <section>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark main-nav shadow fixed-top">
        <div class="container">
          <a class="navbar-brand mb-0 h1" href="index.php">&lt;&#47;DominiqueTheDeveloper&gt;</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="about.php">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="header-image">
      <div class="container h-100 header-text-container">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center header-text">
            <h1 class="animated bounceInLeft delay-1s">Who am I, exactly?</h1>
            <h3 class="animated bounceInRight delay-2s">I'm the answer to your website needs.</h3>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Header Section End -->

  <!-- About Section Start -->

  <main>
    <section>

      <div class="container section">

        <div class="row justify-content-md-center">
          <div class="col-md-auto about-me">
            <p>My name is Dominique Moody, and website design and development is a passion of mine. <br>
              I feel that it's <strong>critically</strong> important for every business or organization to have a strong presence online.<br><br>
              But your website should not just simply be looked at as a URL to stamp on a business card, <br> but as a true asset - a driver of conversions and revenue to help you <strong>grow</strong> your enterprise. <br><br> The internet is a
              very dynamic place.
              And it's important to partner with a developer who <br> knows how to build you a website that meets your specific needs. <br><br> I'm familiar with several of today's most popular web technologies: </p>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <img class="skill-icons" src="images/html5.svg" alt="HTML5">
            <!-- <h4>HTML5</h4> -->
          </div>
          <div class="col-md-4">
            <img class="skill-icons" src="images/css3.svg" alt="CSS3">
            <!-- <h4>CSS3</h4> -->
          </div>
          <div class="col-md-4">
            <img class="skill-icons" src="images/javascript.svg" alt="Javascript">
            <!-- <h4>Javascript</h4> -->
          </div>
          <div class="col-md-4">
            <img class="skill-icons" src="images/jquery.svg" alt="Jquery">
            <!-- <h4>Jquery</h4> -->
          </div>
          <div class="col-md-4">
            <img class="skill-icons" src="images/php.svg" alt="PHP">
            <!-- <h4>PHP</h4> -->
          </div>
          <div class="col-md-4">
            <img class="skill-icons" src="images/bootstrap.svg" alt="Bootsrap">
            <!-- <h4>Bootstrap 4</h4> -->
          </div>
          <div class="col-md-6">
            <img class="skill-icons" src="images/sass.svg" alt="SASS">
            <!-- <h4>SASS</h4> -->
          </div>
          <div class="col-md-6">
            <img class="skill-icons" src="images/wordpress.svg" alt="Wordpress">
            <!-- <h4>Wordpress</h4> -->
          </div>

        </div>

        <div class="row justify-content-md-center">
          <div class="col-md-auto page-p">
            <p>I have the skills to help you meet your website development needs. <br>
              And to prove it, feel free to check out some of my latest work: </p>
          </div>
        </div>

        <div class="about-button text-center">
          <a href="portfolio.php" class="btn btn-lg btn-dark" role="button">Latest Projects</a>
        </div>


      </div>

    </section>
  </main>

  <!-- About Section End -->

  <!-- Footer Start -->

  <section>

    <footer class="container-fluid footer">
      <div class="footer-content text-center">
        <p>Copyright <?php echo date("Y"); ?> | Dominique The Developer</p>
      </div>
    </footer>

  </section>

  <!-- Footer End -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/scripts.js" type="text/javascript"></script>

</body>

</html>
