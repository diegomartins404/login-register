<?php
class Users{
	private $username;
	private $birthdate;
	private $firstname;
	private $password;

	public function getUsername(){
		return $this->username;
	}
	public function setUsername($value){
		$this->username = $value;
	}


	public function getBirthdate(){
		return $this->birthdate;
	}
	public function setBirthdate($value){
		$this->birthdate = $value;
	}


	public function getFirstname(){
		return $this->firstname;
	}
	public function setFirstname($value){
		$this->firstname = $value;
	}


	public function getPassword(){
		return $this->password;
	}
	public function setPassword($value){
		$this->password = $value;
	}

	public function InsertUsers($username, $birthdate, $firstname, $password){
		$sql = new Sql();
		$exec = $sql->execQuery("INSERT INTO tb_users (desusername, desbirthdate, desfirstname, despassword) VALUES (:USERNAME, :BIRTHDATE, :FIRSTNAME, :PASSWORD)", array(
			":USERNAME"=>$username,
			":BIRTHDATE"=>$birthdate,
			":FIRSTNAME"=>$firstname,
			":PASSWORD"=>$password
		));
	}

	public function Login($username, $password){
		$sql = new Sql();
		$result = $sql->Select("SELECT * FROM tb_users WHERE desusername = :USERNAME AND despassword = :PASSWORD", array(
			":USERNAME" => $username,
			":PASSWORD" => $password
		));
		if (count($result) > 0){
			echo "login com sucesso";
		}
		else{
			echo 'login falhou';
		}
	}


}


?>