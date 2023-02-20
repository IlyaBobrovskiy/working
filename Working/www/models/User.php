<?php

require_once(ROOT."/components/Db.php");

class User {

	@var string;
	
	private $login; 

	@var string;

	private $password;

	@var string;
	
	private $confirm_password;

	@var string;
	
	private $email;

	@var string;
	
	private $name;

	public void Route($login, $password);
{
	$this->login = $login;
		$this->password = $password;

	UpdateView(); //Вызов обновления представления
}
public void Route2($login, $password, $confirm_password, $email, $name);
{
		$this->login = $login;
		$this->password = $password;
		$this->confirm_password = $confirm_password;
		$this->email = $email;
		$this->name = $name;
		

	UpdateView(); //Вызов обновления представления
}
	
	


	
	

}