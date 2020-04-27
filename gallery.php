<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DRCO | Gallery</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="Styles/fluid-gallery.css">
    <link rel="stylesheet" href="Styles/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light container">
      <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="DRCO Foundation" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon line"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="gallery.php">Our Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donate</a>
          </li>
        </ul>
      </div>
    </nav>
  </header><!-- end of header-->

<div class="container gallery-container">

    <h1 class="h1-small">Our Gallery</h1>

    <p class="page-description text-center"></p>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="gallery/gallery1.jpg">
                    <img src="gallery/gallery1.jpg" alt="Group pics">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery/team.jpg">
                    <img src="gallery/team.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="gallery/DRCO Women - Copy.jpg">
                    <img src="gallery/DRCO Women - Copy.jpg" alt="Food to Women">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="gallery/DRCO beggers.jpg">
                    <img src="gallery/DRCO beggers.jpg" alt="DRCO children">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="p-bottom">
                    <a class="lightbox" href="gallery/gallery.jpg">
                        <img src="gallery/gallery.jpg" alt="Coast">
                    </a>
                </div> 
                <div>
                    <a class="lightbox" href="gallery/children.jpg">
                        <img src="gallery/prayers.jpg" alt="prayers">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div><?php include("includes/footer.php") ?></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
