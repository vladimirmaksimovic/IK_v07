<?php
require_once '../models/DAO.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

switch ($action) {

    case 'Insert':
        $dao = new DAO();
        $atelje = $dao->selectAtelje();
        foreach ($atelje as $value) {
            $id = $value['id'];
        }
        $id = $id + 1;
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $imageNameType = $id . "." . $imageFileType;
        $uploaded_image = "../pictures/" . $imageNameType;


        $namesr = isset($_REQUEST['namesr']) ? $_REQUEST['namesr'] : "";
        $memosr = isset($_REQUEST['memosr']) ? $_REQUEST['memosr'] : "";
        $nameen = isset($_REQUEST['nameen']) ? $_REQUEST['nameen'] : "";
        $memoen = isset($_REQUEST['memoen']) ? $_REQUEST['memoen'] : "";
        $category = isset($_REQUEST['category']) ? $_REQUEST['category'] : "";
        $sold = 0;

        //  if (!empty($imageNameType) && !empty($namesr) && !empty($memosr) && !empty($nameen) 
        //  && !empty($memoen) && !empty($category)) {
        if ($imageFileType == 'jpg'  && !empty($namesr) && !empty($nameen)) {
            move_uploaded_file($image_tmp, $uploaded_image);
            $dao = new DAO();
            $dao->insertAtelje($imageNameType, $namesr, $memosr, $nameen, $memoen, $category, $sold);
            header('location: ../views/CRUDgalery.php');
        } else {
            $msg = 'UPOZORENJE: Slika mora biti u jpg formatu i morate uneti ime na srpskom i engleskom';
            include '../views/CRUDgalery.php';
        }
        break;

    case 'Delete':
        $dao = new DAO();
        $atelje = $dao->selectAteljeById($_REQUEST['id']);
        $picture = $atelje['image'];
        $delete_picture = "../pictures/" . $picture;
        unlink($delete_picture);
        $dao->deleteAteljeById($_REQUEST['id']);
        header('location: ../views/CRUDgalery.php');
        break;

    case 'Edit':
        $dao = new DAO();
        $galery = $dao->selectAteljeById($_REQUEST['id']);
        include '../views/editGalery.php';
        break;

    case 'Save':
        $image = isset($_REQUEST['image']) ? $_REQUEST['image'] : "";
        $namesr = isset($_REQUEST['namesr']) ? $_REQUEST['namesr'] : "";
        $memosr = isset($_REQUEST['memosr']) ? $_REQUEST['memosr'] : "";
        $nameen = isset($_REQUEST['nameen']) ? $_REQUEST['nameen'] : "";
        $memoen = isset($_REQUEST['memoen']) ? $_REQUEST['memoen'] : "";
        $category = isset($_REQUEST['category']) ? $_REQUEST['category'] : "";
        $sold = isset($_REQUEST['sold']) ? $_REQUEST['sold'] : "";
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
        $galeru = array(
            'image' => $image, 'nameen' => $nameen, 'namesr' => $namesr,
            'memoen' => $memoen, 'memosr' => $memosr, 'category' => $category, 'sold' => $sold, 'id' => $id
        );
        // if (!empty($image) && !empty($namesr) && !empty($memosr)!empty($nameen) && !empty($memoen) && !empty($category)&& !empty($sold)) {
        if (!empty($namesr) && !empty($nameen)) {
            $dao = new DAO();
            $dao->updateAteljeById($nameen, $namesr, $memoen, $memosr, $category, $sold, $id);
            header('location: ../views/CRUDgalery.php');
        } else {
            $msg = "UPOZORENJE: Naziv ne moze biti prazan.  Promena nije uradjena.";
            $dao = new DAO();
            $galery = $dao->selectAteljeById($_REQUEST['id']);
            include '../views/editGalery.php';
        }
        break;

    case 'EditPicture':
        $dao = new DAO();
        $galery = $dao->selectAteljeById($_REQUEST['id']);
        include '../views/editPicture.php';
        break;

    case 'UpdatePicture':
        $dao = new DAO();
        $atelje = $dao->selectAteljeById($_REQUEST['id']);
        $picture = $atelje['image'];
        $delete_picture = "../pictures/" . $picture;
        $image1 = $_FILES['image1']['name'];
        $image_tmp = $_FILES['image1']['tmp_name'];
        $imageFileType = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        $imageNameType = $picture;
        $uploaded_image = "../pictures/" . $imageNameType;
        if ($imageFileType == 'jpg') {
            unlink($delete_picture);
            move_uploaded_file($image_tmp, $uploaded_image);
            sleep(5);
            header('location: ../views/CRUDgalery.php');
        } else {
            $msg = "UPOZORENJE:  Zamena slike nije uspela, slika mora biti u jpg formatu. Pokusajte ponovo.";
            include '../views/CRUDgalery.php';
        }
        // mislim da ovde nedostaje BRAKE;
    default:
        header("location: ../views/CRUDgalery.php");
        break;
}
