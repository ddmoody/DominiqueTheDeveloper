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
  <title>Dominique The Developer | Portfolio</title>
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
                <a class="nav-link active" href="portfolio.php">Portfolio</a>
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
            <h1 class="animated bounceInLeft delay-1s">Great results - client approved.</h1>
            <h3 class="animated bounceInRight delay-2s">Check out some of my recent work.</h3>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Header Section End -->

  <!-- Portfolio Section Start -->

  <main>
    <section>

      <div class="container section">

        <div class="card-deck">
          <div class="card shadow">
            <img src="images/baslerscreenprinting.png" class="card-img-top" alt="baslerscreenprinting">
            <div class="card-body">
              <div class="text-center">
                <h5 class="card-title">Basler Screen Printing</h5>
              </div>

              <p class="card-text">This is a website I created for a St. Louis screen printing company.</p>
            </div>
            <div class="text-center card-button">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#baslerModal">
                View More Info
              </button>
            </div>
            <div class="card-footer">

            </div>
          </div>

          <!-- Basler Screen Printing Modal Start -->

          <div class="modal fade" id="baslerModal" tabindex="-1" role="dialog" aria-labelledby="baslerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="baslerModalLabel">Basler Screen Printing</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="modal-description">
                    <p>The owner of Basler Screen Printing needed a simple and clean website for his business. So I opted for a single-page layout design using Bootstrap 4 as a framework.<br><br> In order to help convert business, I added a mailing
                      list sign-up section that connects to his Mailchimp account via their API. The scripts for the mailing list and the contact form are both written in PHP. The website also features a Google Maps API integration.</p>
                    <hr>
                    <p><i>Technologies Used: <br> HTML5, CSS3, Jquery/Javascript, PHP, Bootstrap 4 </i></p>
                  </div>

                  <div class="text-center">
                    <a href="http://baslerscreenprinting.com/" target="_blank" class="btn btn-dark" role="button">View Live Site</a>
                    <a href="https://github.com/ddmoody/BaslerScreenPrinting" target="_blank" class="btn btn-success" role="button">View The Code</a>
                  </div>
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
          </div>

          <!-- Basler Screen Printing Modal End -->


          <div class="card shadow">
            <img src="images/the-juice-sign.png" class="card-img-top" alt="The Juice sign">
            <div class="card-body">
              <div class="text-center">
                <h5 class="card-title">The Juice STL</h5>
              </div>

              <p class="card-text">I'm currently building a website for a popular South St Louis juice bar. <br> Stay posted for updates, as it will be launching soon! </p>
            </div>
            <div class="card-footer">

            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-md-auto portfolio-page-p">
            <p>Like what you see? I can do these things and more for your website. <br>
              Feel free to get in touch with me and see results: </p>
          </div>
        </div>

        <div class="about-button text-center">
          <a href="contact.php" class="btn btn-lg btn-dark" role="button">Contact Me</a>
        </div>

      </div>

    </section>
  </main>

  <!-- Portfolio Section End -->

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
