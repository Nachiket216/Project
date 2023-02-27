<?php

class fun{
	private $db;
	function __construct($con){
	$this->db=$con;
		
	}
	
	public function login($username,$password){
		//echo "ok2";
	
	$sql='select * from user where user_name="'.$username.'" and c_password="'.$password.'"';
	//$sql="SELECT * FROM user WHERE user_name='$username' AND c_password='$password'";
		
		
	$result=mysqli_query($this->db,$sql);	

	$count=mysqli_num_rows($result);

	if($count>=1){
		$output=mysqli_fetch_array($result,MYSQLI_BOTH);
		print_r($output);
		$_SESSION['userid']=$output['username'];
		$_SESSION['is_start']=true;
		header('location:admin/home.php');
	}else{
		$out='email password does not match';
		return $out;
	}
	}

	public function getadmissiondetails(){
		
		$sql='select * from admission_details ';
		
		$result=mysqli_query($this->db,$sql);
		
		return $result;
	}
	public function getapplyforcenterdetails(){
		
		$sql='select * from applyforcenter_details ';
		
		$result=mysqli_query($this->db,$sql);
		
		return $result;
	}
	public function deleteapplyforcenterdetails($username){
		
		$sql='delete from  applyforcenter_details where username='.$username;
		
		$result=mysqli_query($this->db,$sql);
		
		return $result;
	}
	public function atc_details($c_code, $c_name,$o_name,$address,$city, $state,$country,$pin){
		
		$sql = "INSERT INTO atc_center
(center_code,center_name,owner_name,state,city,address,country,pin_code)
    VALUES ('".$c_code."','".$c_name."','".$o_name."','".$state."','".$city."','".$address."','".$country."',
    '".$pin."')";
		
		$result=mysqli_query($this->db,$sql);
		
		return $result;
	}
	public function getatcdetails(){
		
		$sql='select * from atc_center ';
		
		$result=mysqli_query($this->db,$sql);
		
		return $result;
	}
	public function getatc_details_bycode($c_code){
												
	$sql="select * from atc_center where center_code='$c_code'";
										
	$result=mysqli_query($this->db,$sql);
										
		return $result;
	}
	public function getstud_details_byenroll($enrollno){
												
	$sql="select * from student_details where enrollment_no='$enrollno'";
										
	$result=mysqli_query($this->db,$sql);
										
		return $result;
	}


	


	


	
}






?>