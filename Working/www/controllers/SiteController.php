<?php

class SiteController {

	


	public function actionAuth() {

		require_once(ROOT."/views/site/index.php");
		return true;
	}
	/*public function LButton_Click(object sender, RoutedEventArgs e) //Метод, который вызывается при нажатии на кнопку "Посчитать"
{
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_login'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['user_password'] == "")   $errors[] = "Поле 'Ваш пароль' не заполнено!";
  
	//Валидация полученных данных

	$login = $_POST['user_login'];
	$password = $_POST['user_password'];

		Route($login, $password); //Передача данных модели
	}

private void RButton_Click(object sender, RoutedEventArgs e) //Метод, который вызывается при нажатии на кнопку "Посчитать"
{
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_login_reg'] == "")    $errors[] = "Поле 'Ваш логин' не заполнено!";
    if($_POST['user_password_reg'] == "")   $errors[] = "Поле 'Ваш пароль' не заполнено!";
    if($_POST['user_confirm_password_reg'] == "")    $errors[] = "Поле 'Повторите' не заполнено!";
    if($_POST['user_email_reg'] == "")   $errors[] = "Поле 'Ваша почта' не заполнено!";
    if($_POST['user_name_reg'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
  
  
	//Валидация полученных данных

	$login2 = $_POST['user_login_reg'];
	$password2 = $_POST['user_password_reg'];
	$confirm_password = $_POST['user_confirm_password_reg'];
	$email = $_POST['user_email_reg'];
	$name = $_POST['user_name_reg'];
	

		Route2($login2, $password2, $confirm_password, $email, $name); //Передача данных модели
	}*/
}

