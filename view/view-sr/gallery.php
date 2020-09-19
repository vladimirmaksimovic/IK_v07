<!-- Header -->
<?php include("header.php"); ?>

<!-- Main -->
<main class="gallery bg-light pt-5">
  <div class="row m-0 pt-5">

    <!-- Logo -->
    <section class="col-lg-2 col-md-12 logo-container">
      <img src="../../assets/images/art-logo-y.svg" alt="Logo" class="logo logo-rotate img-fluid d-lg-block d-md-none d-sm-none d-none " />
      <img src="../../assets/images/art-logo-x.svg" alt="Logo" class="logo img-fluid d-lg-none d-md-block d-sm-block d-block" />
    </section>

    <!-- Cards -->
    <section class="pb-5 pt-5 container col-lg-9 col-md-12 cards-container">
      <div class="row text-center">
        <div class="col-lg-3 col-md-6 col-12 pb-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="text-uppercase card-title">Slike</h5>
              <a href="images.php">
                <div class="card-1"></div>
              </a>
              <div class="card-text text-center">
                <a href="images.php" class="card-link card-text">Saznajte više ...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 pb-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="text-uppercase card-title">Skice i crteži</h5>
              <a href="sketches&drawings.php">
                <div class="card-2"></div>
              </a>
              <div class="card-text text-center">
                <a href="sketches&drawings.php" class="card-link card-text">Saznajte više ...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 pb-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="text-uppercase card-title">Staklo i keramika</h5>
              <a href="glass&ceramics.php">
                <div class="card-3"></div>
              </a>
              <div class="card-text text-center">
                <a href="glass&ceramics.php" class="card-link card-text">Saznajte više ...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 pb-3">
          <div class="card">
            <div class="card-body bg-light">
              <h5 class="text-uppercase card-title">Dizajn</h5>
              <a href="design.php">
                <div class="card-4"></div>
              </a>
              <div class="card-text text-ceter">
                <a href="design.php" class="card-link card-text">Saznajte više ...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main>

<!-- Google Map -->
<?php include("gmap.php"); ?>

<!-- Footer -->
<?php include("footer.php"); ?>