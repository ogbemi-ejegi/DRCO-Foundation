<!DOCTYPE html>
<html lang="en">
<head>
  <title>DRCO | Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="Styles/cover.css">
  <link rel="stylesheet" href="Styles/style.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <header class="showcase">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="DRCO Foundation" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon line"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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
    <div class="container-fluid">
    <div class="section-main container effect">
            <h1>DRCO <span class="hide-on-small">FOUNDATION</span></h1>
            <h2>...Everyone needs food</h2>
            <p class="lead hide-on-small ">A non - government entity operating in the grassroots to provide food and food supplies to widows, orphans and less-priviledge</p>
        </div><!-- end of container -->
    </div><!--end of showcase -->
  </header><!-- end of header-->


    <!--Problem Section -->
    <section id="problem" class="section">
        <div class="container">
            <h3>Everyone needs food</h3>
            <p >Hunger kill more people than HIV/AIDS, Maleria and Tuberculosis combined <br>
            Some 795 million people in the world do not have enough food to live an active life. Thats about one in nine people on earth. <br> Sub-Saharan Africa is the region with the highest prevalence of hunger. 65 million primary school age children attend classes hungry accross the world.
        </p>
        <a href="https://paystack.com/pay/drco-donation" class="btn btn-light btn-lg problem-btn" >YOU CAN DONATE</a>
        </div>
    </section> <hr>

    <!--Goals Section-->
    <section id="goals">
        <div class="container mt-3">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="card card-left">
                <img src="images/DRCO beggers.jpg" class="card-img-top card-image" alt="">
              </div>
            </div><!--end of col-md-4-->
            <div class="card card-right col-md-8 col-sm-12 col-xs-12">
              <div class="card-header">
                <h3 class="text-center">Our Goals</h3> 
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">To provide food supplies to as many widows in society as possible</li>
                  <li class="list-group-item">To provide food supplies to as many orphans in society as possible</li>
                  <li class="list-group-item">To provide food supplies to as many beggars and less privilege in society as possible</li>
                </ul>
              </div>
            </div><!--end of card text-center-->
          </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>
</div><!--end of container fluid-->

<script>
  window.sr = ScrollReveal();
  /* sr.reveal('.navbar', {
      duration: 2000,
      origin: 'left'
      //distance: '300px'
  });*/

  sr.reveal('.effect', {
      duration: 2000,
      origin: 'left',
      distance: '300px'
  });

  sr.reveal('#problem div', {
      duration: 2000,
      origin: 'left',
      distance: '300px',
      viewFactor: 0.2
  });

  sr.reveal('.problem-btn', {
      duration: 2000,
      delay:500,
      origin: 'bottom',
      distance: '100px'
  });

  sr.reveal('.card-left', {
      duration: 2000,
      origin: 'left',
      distance: '100px',
      viewFactor: 0.2
  });

  sr.reveal('.card-right', {
      duration: 2000,
      origin: 'right',
      distance: '100px',
      viewFactor: 0.2
  });


</script>

</body>
</html>