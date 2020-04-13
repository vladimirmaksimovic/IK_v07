<?php include ("header.php");?>
<?php include("navbaredit.php"); ?>
<?php if (!isset ($_SESSION['ses'])){
 header ('location: index.php');
 }?>
<?php
    $msg = isset($msg)?$msg:"";

?>
        
<body>
<body>
<div class="m-2">
    <div class="pt-5">
        <h3 class="pt-4">EDIT PICTURE</h3>
    </div>
    

    <form action="../controller/galery.php" method="POST" enctype="multipart/form-data">
    <img class="newsimage1 mt-2 pt-2" name="image" src="../pictures/<?= $galery['image']?>" alt="">
    <label for="video">Promeni sliku</label>
    <input type="file" name='image1' id="image1" class="btb btn-info">

    <input type="hidden" name="id" value="<?= $galery['id']?>"><br>

    <input type="submit" class="btn btn-primary m-2" name="action" value="UpdatePicture">
    </form>

    <?= $msg ?>
</body>