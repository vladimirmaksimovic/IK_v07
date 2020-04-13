<?php include("header.php"); ?>
<?php include("navbaredit.php"); ?>

<?php if (!isset ($_SESSION['ses'])){

 header ('location: index.php');

 }?>



<?php $msg = isset($msg)?$msg:""?>




<?php

require_once '../models/DAO.php';



$dao = new DAO();



$atelje = $dao->selectAtelje();



$id = isset($d) ? $id : "";

$image = isset($image) ? $image : "";

$nameen = isset($nameen) ? $nameen : "";

$namesr = isset($namesr) ? $namesr : "";

$memoen = isset($memoen) ? $memoen : "";

$memosr = isset($memosr) ? $memosr : "";

$category = isset($category) ? $category : "";





?>





<body>

<div class="m-4">

<div class="pt-2">

        <h3 class="pt-4">INSERT/EDIT/DELETE</h3>

      </div>


<p class="bg-danger"> <?php echo $msg ?> </p>

<div class="col-md-12">



<form action="../controller/galery.php" method="POST" enctype="multipart/form-data">



<hr>





<div class="row text-center"> 

    <div class="col-lg-6 col-md-12 form-group">

    <label for="video">Ubaci sliku</label>

    <input type="file" name='image' id="image" class="btb btn-info">

    </div>

    <div class="col-lg-6 col-md-12 form-group">

    <label for="Kategorija">Izaberi kategoriju</label>



<select name="category" id="category">

        <option  value="1"> Slika</option>

        <option  value="2"> Skulptura</option>

        <option  value="3"> Staklo i keramika</option>

        <option  value="4"> Dizajn</option>

   </select>

    </div>

</div>



<div class="row text-center"> 

    <div class="col-lg-6 col-md-12 form-group">

        <label for="title_srb">Naslov na srpskom</label>

        <input type="text" name="namesr" class="form-control" id="namesr" value="<?php echo $namesr?>">

        <label for="content_srb">Opis na srpskom</label>

    <textarea class="form-control" name="memosr" id="memosr" rows="3" value="<?php echo $memosr?>"><?php echo $memosr?></textarea>

    </div>

    <div class="col-lg-6 col-md-12 form-group">

        <label for="title_srb">Naslov na engleskom</label>

        <input type="text" name="nameen" class="form-control" id="nameen" value="<?php echo $nameen?>">

        <label for="content_srb">Opis na engleskom</label>

    <textarea class="form-control" name="memoen" id="memoen" rows="3" value="<?php echo $memoen?>"><?php echo $memoen?></textarea>

    </div>

</div>



<?php $id = $id ?>



<input type="submit" class="btn btn-primary" name="action" value="Insert">



</form>



</div>



  <h2>OBJAVLJENO</h2>
  <a class=" " href="CRUDgalerycategory.php"> <button>SELEKTUJ PO KATEGORIJI</button> </a>

  <table border="1" width="100%" align="center">

    <tr>

      <th>FOTOGRAFIJA</th>

      <th>KATEGORIJA</th>

      <th>NASLOV SRPSKI</th>

      <th>TEKST SRPSKI</th>

      <th>NASLOV ENGLESKI</th>

      <th>TEKST ENGLESKI</th>

      <th>AKCIJA</th>

    </tr>

    <?php foreach (array_reverse($atelje) as $value) { ?>

    <tr>

      <?php if ($value['sold']==0) { $s='nije prodato'; $p="bg-success";}?>
      <?php if ($value['sold']==1) { $s='prodato';$p="bg-danger";}?>
      <td>
      <a  href="../pictures/<?= $value['image'] ?>" target="_blank"> 
      <img class="newsimage1" src="../pictures/<?= $value['image'] ?>" alt=""> </a>
      <p class="<?php echo $p ?> text-white" ><?php echo $s ?></p>
      </td>

    <?php if($value['category']==1){ ?> <td> <p>Slika</p> </td> <?php } ?>
    <?php if($value['category']==2){ ?> <td> <p>Skulptura</p> </td> <?php } ?>
    <?php if($value['category']==3){ ?> <td> <p>Staklo i keramika</p> </td> <?php } ?>
    <?php if($value['category']==4){ ?> <td> <p>Dizajn</p> </td> <?php } ?>

    <td><?= $value['namesr'] ?></td>

<td><?= $value['memosr'] ?></td>

<td><?= $value['nameen'] ?></td>

<td><?= $value['memoen'] ?></td>



        <td><a href="../controller/galery.php?action=Edit&id=<?= $value['id'] ?>">

          <input type="submit" class="btn btn-primary" value="Promeni tekst">

        </a>

        <a href="../controller/galery.php?action=EditPicture&id=<?= $value['id'] ?>">

          <input type="submit" class="btn btn-primary mt-1 mb-1"  value="Promeni sliku">

        </a>

        <a href="../controller/galery.php?action=Delete&id=<?= $value['id'] ?>">

          <input type="submit"  class="btn btn-danger " value="Izbriši">

        </a>

</td>







    </tr>

    <?php } ?>

  </table>

  </div>

</body>



</html>



<?php

include("footer.php");

?>