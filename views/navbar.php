<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="index.php">Ivana Knežević</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarText">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">

        <a class="nav-link" href="index.php">Početna</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="events.php">Aktivnosti</a>

      </li>

      <li class="nav-item">

        <a class="nav-link workshop-title" href="workshop.php">Kreativna jazbina</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="gallery.php">Galerija</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="about.php">O meni</a>

      </li>

      <?php if (isset($_SESSION['ses'])) { ?>

        <li class="nav-item">

          <a class="nav-link" href="../views/CRUDgalery.php">INSERT/EDIT/DELETE</a>

        </li>

      <?php } ?>

      <?php if (isset($_SESSION['ses'])) { ?>

        <li class="nav-item">

          <a class="nav-link" href="../controller/logout.php">LOGOUT</a>

        </li>

      <?php } ?>

      </li>

      <li class="nav-item eng">

        <a class="nav-link" href="../viewsen/index.php"> eng </a>

      </li>

    </ul>

  </div>

</nav>

<!-- /Navbar -->