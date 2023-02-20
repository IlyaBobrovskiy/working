<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="main/main.css"> 
<script src="/validate.js"></script> 
	<title>Авторизация</title>
</head>
<body>
	<form method="post" id="Login">
		
		<label>Login</label>
		
			<input type="text" placeholder="Введите свой логин" id ="login">
		
		<label>Password</label>
			
			<input type="password" placeholder="Введите пароль" id="password">
		
		<button id="log_in" click = "LButton_Click">Войти</button>
			<p>Если нет аккаунта!</p><a href="/register.php">Зарегистрируйтесь</a>
	</form>
</body>

</html>
