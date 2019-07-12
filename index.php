<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dominique The Developer</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ef6bb9a1ed.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#navbarToggler">

  <div id="home">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            < DominiqueTheDeveloper /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="landing ">
      <div class="home-wrapper">
        <div class="home-inner">

        </div>
      </div>
    </div>

    <div class="landing-text text-center">
      <h1 class="animated bounceInLeft delay-1s">Hello, my name is Dominique.</h1>
      <h3 class="animated bounceInRight delay-2s">Freelance Web Developer</h3>
    </div>

  </div>

  <div id="about" class="offset">
    <div class="jumbotron">
      <div class="narrow text-center">
        <div class="col-12">
          <h2 class="heading">About Me</h2>
          <div class="headingUnderline"></div>

        </div>
        <div class="row text-center">

        </div>

      </div>

    </div>
    <div class="fixed-background">
      <div class="row white-text text-center">
        <div class="col-12">
          <h3 class="skillHeading">My Skill Set</h3>
        </div>

        <div class="col-md-6">
          <h3 class="skill-tech-heading">HTML5</h3>
          <div class="skill">
            <i class="fab fa-html5 fa-4x"></i>
          </div>
          <p class="lead skill-lead">Proficient with HTML5</p>
        </div>

        <div class="col-md-6">
          <h3 class="skill-tech-heading">CSS3</h3>
          <div class="skill">
            <i class="fab fa-css3-alt fa-4x"></i>
          </div>
          <p class="lead skill-lead">Proficient with CSS3</p>
        </div>

        <div class="col-md-6">
          <h3 class="skill-tech-heading">Bootstrap 4</h3>
          <div class="skill">
            <i class="fab fa-bootstrap fa-4x"></i>
          </div>
          <p class="lead skill-lead">Proficient with Bootstrap 4 implementation</p>
        </div>

        <div class="col-md-6">
          <h3 class="skill-tech-heading">PHP</h3>
          <div class="skill">
            <i class="fab fa-php fa-4x"></i>
          </div>
          <p class="lead skill-lead">Proficient in PHP programming</p>
        </div>

        <div class="col-12">
          <h3 class="skill-tech-heading">Wordpress</h3>
          <div class="skill">
            <i class="fab fa-wordpress fa-4x"></i>
          </div>
          <p class="lead skill-lead">Proficient in Wordpress theme development</p>
        </div>

      </div>

      <div class="fixed-wrap">
        <div class="fixed">

        </div>
      </div>
    </div>

  </div>

  <div id="contact" class="offset">
    <div class="jumbotron">
      <div class="narrow text-center">
        <div class="col-12">
          <h2 class="heading">Contact</h2>
          <div class="headingUnderline"></div>

        </div>
      </div>
    </div>
    <div class="contact-area">
      <div class="container contact-area-container">
        <div class="row">
          <div class="col-md-6">
            <div class="social-icons text-center">
              <h3 class="social-icons-heading">GitHub</h3>
              <a href="https://github.com/ddmoody" target="_blank"><i class="fab fa-github fa-4x social-icon-link"></i></a>
            </div>
            <div class="social-icons text-center">
              <h3 class="social-icons-heading">LinkedIn</h3>
              <a href="https://www.linkedin.com/in/dominique-moody-645908113/" target="_blank"><i class="fab fa-linkedin fa-4x social-icon-link"></i></a>
            </div>
          </div>

          <div class="col-md-6">
            <form class="contact-form needs-validation" action="mailer.php" method="post" novalidate>

              <?php
              if ($_GET['success'] == 1) {
              echo "<div class=\"text-center success-message animated heartBeat\">Message sent successfully!</div>";
            }
              if ($_GET['success'] == -1) {
              echo "<div class=\"text-center error-message animated heartBeat\">Sorry, there was an error. Try again.</div>";
            }
               ?>

              <div class="form-group">
                <label for="name"><strong>Name</strong></label>
                <input type="text" name="name" placeholder="Name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email"><strong>Email*</strong></label>
                <input type="email" name="email" placeholder="Email" id="email" class="form-control" required>
                <div class="invalid-feedback">
                  Please enter a valid email address.
                </div>
              </div>
              <div class="form-group">
                <label for="message"><strong>Message*</strong></label>
                <textarea name="message" rows="6" cols="60" placeholder="Message" id="message" class="form-control" required></textarea>
                <div class="invalid-feedback">
                  Please complete your message.
                </div>
              </div>
              <button type="submit" class="btn btn-dark">Submit</button>

            </form>
          </div>

        </div>

      </div>

    </div>

  </div>

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <p class="footer-text">&copy; <?php echo date("Y"); ?> - DominiqueTheDeveloper.com</p>

        </div>

      </div>

    </div>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
