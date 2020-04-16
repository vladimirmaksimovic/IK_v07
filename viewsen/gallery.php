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
            <a href="images.php">
              <div class="card-1"></div>
            </a>
            <div class="card-text text-center">
              <a href="images.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Sketches & drawings</h5>
            <a href="sketches&drawings.php">
              <div class="card-2"></div>
            </a>
            <div class="card-text text-center">
              <a href="sketches&drawings.php" class="card-link card-text">More ...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="text-uppercase card-title">Glass & Ceramics</h5>
            <a href="glass&ceramics.php">
              <div class="card-3"></div>
            </a>
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
            <a href="design.php">
              <div class="card-4"></div>
            </a>
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