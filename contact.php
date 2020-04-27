<!DOCTYPE html>
<html lang="en">
<head>
  <title>DRCO | Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="Styles/cover.css">
  <link rel="stylesheet" href="Styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="JS/main.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="DRCO Foundation"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon line"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us  </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Our Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donate</a>
          </li>
        </ul>
      </div>
    </nav>
</div>
  </header><!-- end of header-->
  
    <div class="jumbotron" style="margin-bottom: 0; ">
        <h3 class="text-center h-margin">TALK TO US</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="textarea">Message</label>
                        <textarea class="form-control" id="textarea" name="message" rows="5" required></textarea>
                    </div>
                    <div id="responseText"></div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="push-down push-left">
                    <h3>OUR OFFICE</h3>
                    <p class="lead bold">
                      9, Bombay Crescent, Apapa, Lagos, Nigeria. <br>
                      Tel: 09080060339, 08115933455 <br>
                      Email: drcofoundation@gmail.com
                    </p>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <div>
            <?php include("includes/footer.php"); ?>
          </div>
</body>
</html>
