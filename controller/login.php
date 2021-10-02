<?php

session_start();

include("../model/daoadmin.php");

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

require_once '../model/DAOadmin.php';
$dao = new DAOADMIN();
$user = $dao->selectUsers();

switch ($action) {

	case 'login':
		if (!empty($_POST)) {
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

			foreach (array_reverse($user) as $value) {
				if ($username == $value['name'] && $password == $value['password']) {
					$_SESSION['ses'] = $username;
					echo ($_SESSION['ses']);
					header('location:../cms/CRUDgalery.php');
				} else {
					sleep(1);
					header('location:../view/index.php');
				}
			}
		}
		break;

	case 'logout':
		session_destroy();;
		$ses = NULL;
		header('location:../view/index.php.');
		break;
}
