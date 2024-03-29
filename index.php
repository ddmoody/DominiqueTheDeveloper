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
  <title>Dominique The Developer | Home</title>
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
                <a class="nav-link" href="about.php">About Me</a>
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
            <h1 class="animated bounceInLeft delay-1s">Hello, my name is Dominique.</h1>
            <h3 class="animated bounceInRight delay-2s">Freelance Web Developer</h3>
            <div class="header-button animated bounceInUp delay-3s">
              <a href="about.php" class="btn btn-lg btn-outline-light" role="button">Let's Work!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Header Section End -->

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
