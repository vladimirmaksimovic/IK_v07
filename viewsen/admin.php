<!-- Header -->
<?php include("header.php"); ?>

<?php

if (isset($_SESSION['ses'])) {
  header('location: CRUDvesti.php');
}

?>

<!-- Main -->
<main class="container m-5 pt-5 mx-auto">
  <article class="row">
    <div class="col-xs-12 mx-auto">
      <h1 class="display-5 text-uppercase">Ukoliko imate dozvolu za pristup ulogujte se</h1>
      <div class="page-content">

        <!-- Login Form -->
        <form action="../controller/login.php" method="post">
          <div class="form-group">
            <label for="username">User name:</label><br>
            <input type="text" name="username" required class="form-control" placeholder="Unesite korisničko ime">
          </div>
          <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" name="password" required class="form-control" placeholder="Unesite lozinku">
          </div>
          <input type="submit" name="action" value="login">
        </form>

      </div>
    </div>
  </article>
</main>