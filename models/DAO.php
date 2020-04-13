<?php
require_once ('../models/db.php');

class DAO {
	private $db;

	
	private $SELECT_ATELJE_BY_ID = "SELECT * FROM atelje WHERE id = ?";	
	private $SELECT_ATELJE_BY_CATEGORY = "SELECT * FROM atelje WHERE category = ?";	
	private $SELECT_ATELJE = "SELECT * FROM atelje";	
	private $DELETE_ATELJE_BY_ID = "DELETE FROM atelje WHERE id = ?";	
	private $INSERT_ATELJE = "INSERT INTO atelje (image, namesr, memosr, nameen, memoen,  category, sold) VALUES (?,?,?,?,?,?,?)";
	private $UPDATE_ATELJE_BY_ID = "UPDATE atelje SET  nameen = ?, namesr = ?, memoen = ?, memosr = ?,  
	category = ?,  sold = ? WHERE id = ?";
	private $UPDATE_IMAGE_BY_ID = "UPDATE atelje SET  image = ? WHERE id = ?";	


	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function selectAteljeById($id)
	{		
		$statement = $this->db->prepare($this->SELECT_ATELJE_BY_ID);
		$statement->bindValue(1, $id);
		$statement->execute();
		$result = $statement->fetch();
		return $result;
	}

	public function selectAteljeByCategopry($category)
	{		
		$statement = $this->db->prepare($this->SELECT_ATELJE_BY_CATEGORY);
		$statement->bindValue(1, $category);
		$statement->execute();
		$result = $statement->fetch();
		return $result;
	}

	public function selectAtelje()
	{		
		$statement = $this->db->prepare($this->SELECT_ATELJE);
		
		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}
	
	public function deleteAteljeById($id)
	{		
		$statement = $this->db->prepare($this->DELETE_ATELJE_BY_ID);
		$statement->bindValue(1, $id);
		
		$statement->execute();
	}

	public function insertAtelje($image, $namesr, $memosr, $nameen, $memoen, $category, $sold)
	{		
		$statement = $this->db->prepare($this->INSERT_ATELJE);
		$statement->bindValue(1, $image);
		$statement->bindValue(2, $namesr);
		$statement->bindValue(3, $memosr);
		$statement->bindValue(4, $nameen);
		$statement->bindValue(5, $memoen);
		$statement->bindValue(6, $category);
		$statement->bindValue(7, $sold);
		
		$statement->execute();

	}
	public function updateAteljeById($nameen, $namesr, $memoen, $memosr, $category, $sold, $id)
	{		
		$statement = $this->db->prepare($this->UPDATE_ATELJE_BY_ID);
		$statement->bindValue(1, $nameen);
		$statement->bindValue(2, $namesr);
		$statement->bindValue(3, $memoen);
		$statement->bindValue(4, $memosr);
		$statement->bindValue(5, $category);
		$statement->bindValue(6, $sold);
		$statement->bindValue(7, $id);
		
		$statement->execute();

	}

	
}
?>
