<?php

require_once('../model/db.php');

class DAOADMIN

{

	private $db;

	private $SELECT_USERS_BY_ID = "SELECT * FROM user WHERE id = ?";
	private $SELECT_USERS = "SELECT * FROM user";

	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectUsersById($id)
	{
		$statement = $this->db->prepare($this->SELECT_USERS_BY_ID);
		$statement->bindValue(1, $id);
		$statement->execute();
		$result = $statement->fetch();

		return $result;
	}

	public function selectUsers()
	{
		$statement = $this->db->prepare($this->SELECT_USERS);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	}
}
