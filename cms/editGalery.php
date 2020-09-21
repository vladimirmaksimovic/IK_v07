<!-- Header -->
<?php include("header.php"); ?>

<?php include("navbaredit.php"); ?>

<?php

if (!isset($_SESSION['ses'])) {

  header('location: index.php');
}

?>

<?php

$msg = isset($msg) ? $msg : "";

$galery = isset($galery) ? $galery : array('id' => '', 'image' => '', 'namesr' => '', 'memosr' => '', '' => '', 'nameen' => '', 'memoen' => '', 'category' => '');

?>

<body>

  <!-- Main -->
  <main class="p-4">
    <div class="pt-4">
      <h3 class="pt-2">EDIT</h3>

      <p class="bg-danger"> <?php echo $msg ?> </p>

    </div>

    <!-- Edit Gallery -->
    <form action="../controller/galery.php" method="get">
      <div class="row">
        <div class="col-lg-4 col-md-12 form-group">

          <img class="newsimage1 mt-2 pt-2" name="image" src="../pictures/<?= $galery['image'] ?>" alt="">

        </div>
        <div class="col-lg-4 col-md-12 form-group">
          <label for="Kategorija">Izaberi kategoriju</label><br>
          <select name="category" id="category">

            <?php if ($galery['category'] == 1) { ?> <option value="1" selected> Slike</option> <?php } ?>

            <?php if ($galery['category'] != 1) { ?> <option value="1"> Slike</option> <?php } ?>

            <?php if ($galery['category'] == 2) { ?> <option value="2" selected> Skulpture</option> <?php } ?>

            <?php if ($galery['category'] != 2) { ?> <option value="2"> Skulpture</option> <?php } ?>

            <?php if ($galery['category'] == 3) { ?> <option value="3" selected> Staklo i keramika</option> <?php } ?>

            <?php if ($galery['category'] != 3) { ?> <option value="3"> Staklo i keramika</option> <?php } ?>

            <?php if ($galery['category'] == 4) { ?> <option value="4" selected> Dizajn</option> <?php } ?>

            <?php if ($galery['category'] != 4) { ?> <option value="4"> Dizajn</option> <?php } ?>

          </select>
        </div>

        <div class="col-lg-4 col-md-12 form-group">
          <label for="Sold">Označi prodato</label><br>
          <select name="sold" id="sold">

            <?php if ($galery['sold'] == 0) { ?> <option value="0" selected> Nije prodato </option> <?php } ?>

            <?php if ($galery['sold'] != 0) { ?> <option value="0"> Nije prodato</option> <?php } ?>

            <?php if ($galery['sold'] == 1) { ?> <option value="1" selected> Prodato</option> <?php } ?>

            <?php if ($galery['sold'] != 1) { ?> <option value="1"> Prodato</option> <?php } ?>

          </select>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg-6 col-md-12 form-group">
          NASLOV SRPSKI<br>

          <input type="text" name="namesr" class="form-control" value="<?= $galery['namesr'] ?>"><br>

          TEKST SRPSKI<br>

          <textarea rows="3" cols="100" name="memosr" class="form-control" value="<?= $galery['memosr'] ?>"><?= $galery['memosr'] ?></textarea><br>

        </div>
        <div class="col-lg-6 col-md-12 form-group">
          NASLOV ENGLESKI<br>

          <input type="text" name="nameen" class="form-control" value="<?= $galery['nameen'] ?>"><br>

          TEKST ENGLESKI<br>

          <textarea rows="3" cols="100" name="memoen" class="form-control" value="<?= $galery['memoen'] ?>"><?= $galery['memoen'] ?></textarea><br>

        </div>
      </div>

      <input type="hidden" name="id" value="<?= $galery['id'] ?>"><br>

      <input type="submit" class="btn btn-primary" name="action" value="Save">

    </form>
  </main>
</body>