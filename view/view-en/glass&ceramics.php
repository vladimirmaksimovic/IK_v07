<!-- Header -->
<?php include("header.php"); ?>

<?php

require_once '../../model/DAO.php';
$dao = new DAO();
$atelje = $dao->selectAtelje();

?>

<!-- Main -->
<main class="gallery-block compact-gallery pt-5">

  <!-- Breadcrumb -->
  <nav class="breadcrumb-container mt-4" aria-label="breadcrumb">
    <ol class="breadcrumb container-fluid bg-transparent justify-content-end">
      <li class="breadcrumb-item"><a href="../../view/view-sr/gallery.php">Gallery</a></li>
      <li class="breadcrumb-item active" aria-current="page">Glass & Ceramics Gallery</li>
    </ol>
  </nav>

  <div class="container">
    <div class="heading">
      <h3>Glass & Ceramics Gallery</h3>
    </div>

    <!-- Gallery -->
    <section class="container">
      <div class="card-columns gallery-block compact-gallery">

        <?php foreach (array_reverse($atelje) as $value) { ?>

          <?php if ($value['category'] == 3) {  ?>

            <div class="card item zoom-on-hover">

              <a href="../../assets/images/<?= $value['image'] ?>" target="_blank"><img src="../../assets/images/<?= $value['image'] ?>" class="card-img-top img-fluid image" alt="..." />

                <?php

                if ($value['sold'] == 0) {
                  $s = '';
                  $p = "";
                }

                ?>

                <?php

                if ($value['sold'] == 1) {
                  $s = 'SOLD';
                  $p = "bg-danger";
                }

                ?>

                <p class="<?php echo $p ?> text-white"><?php echo $s ?></p>

                <span class="description">

                  <span class="description-heading"><?= $value['nameen'] ?></span>

                  <span class="description-body"><?= $value['memoen'] ?></span>

                </span>
              </a>
            </div>

          <?php } ?>

        <?php } ?>

      </div>
    </section>
  </div>
</main>

<!-- Footer -->
<?php include("footer.php"); ?>