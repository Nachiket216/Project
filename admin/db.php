<?php



class connect
{
	public $servername='localhost';
	private $username='root';
	private $password='';
	private $dbname='easymart';

	public function dbconnect()
	{
		$db=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
		
		return $db;
	}
}



?>