<!-- Header -->
<?php include("header.php"); ?>

<!-- Main -->
<main class="gallery bg-light">

  <!-- Cards -->
  <section class="pt-5 pb-5 bg-white container">
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Images</h5>
            <div class="card-1"></div>
            <div class="card-text text-center">
              <a href="images.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Sculptures</h5>
            <div class="card-2"></div>
            <div class="card-text text-center">
              <a href="sculptures.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Glass & Ceramics</h5>
            <div class="card-3"></div>
            <div class="card-text text-center">
              <a href="glass&ceramics.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Desing</h5>
            <div class="card-4"></div>
            <div class="card-text text-center">
              <a href="design.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Map -->
  <?php include("gmap.php"); ?>

</main>

<!-- Footer -->
<?php include("footer.php"); ?>