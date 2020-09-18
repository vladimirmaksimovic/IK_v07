<!-- Header -->
<?php include("header.php"); ?>

<!-- Main -->
<main class="home pt-5 bg-light container">
  <div class="row pt-4">

    <!-- Logo -->
    <section class="col-lg-2 col-md-12 logo-container">
      <img src="../../assets/images/art-logo-y.svg" alt="Logo" class="logo logo-rotate img-fluid d-lg-block d-md-none d-sm-none d-none " />
      <img src="../../assets/images/art-logo-x.svg" alt="Logo" class="logo img-fluid d-lg-none d-md-block d-sm-block d-block" />
    </section>

    <!-- Carousel -->
    <!-- 
      Option for redirecting on Gallery page:
      <a href="../views/gallery.php">
    -->
    <section class="col-lg-10 col-md-12 pt-4 pb-4 m-auto carousel-container">
      <div id="carouselExampleCaptions" class="carousel slide pt-4 container-fluid" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../assets/images/art-img-02.svg" class="home-slide img-fluid" style="object-fit:cover;" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../assets/images/art-img-05.svg" class="home-slide img-fluid" style="object-fit:cover;" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../assets/images/art-img-06.svg" class="home-slide" style="object-fit:cover;" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../assets/images/art-img-03.svg" class="home-slide" style="object-fit:cover;" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Fourth slide label</h5>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- </a> -->

  </div>
</main>

<!-- Google Map -->
<?php include("gmap.php"); ?>

<!-- Footer -->
<?php include("footer.php"); ?>