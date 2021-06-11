<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<title>PHP веб сайт</title>
</head>
<blody>
		<div class="d-flex flex-colum flex-md-row align-items-center p-3 px-md-4 md-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto front-weight-normal">Назавание</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="#">Главная</a>
			<a class="p-2 text-dark" href="#">Контакты</a>
			<a class="p-2 text-dark" href="#">Поддержка</a>
		</nav>
		<a class="btn btn-outline-primary" href="#">Войти</a>
		<a class="btn btn-primary" href="#">Зарегестрироватся</a>
 </div>
 <div class="container mt-4">
	 <?php
		if ($_COOKIE['user']==''):
		 ?>
		 <div class="row">
				<div class="col">
					<h1>Форма регистрации</h1>
					<form  action="php/check.php" method="post">
						<input type="text" class="form-control" name="login" value="login" id="login" placeholder="Введите ваш логин"><br>

						<input type="text" class="form-control" name="name" value="name" id="name" placeholder="Введите E-mail"><br>

						<input type="password" class="form-control" name="pass" value="pass" id="pass" placeholder="Введите ваш пароль"><br>

						<button class="btn btn-success"  type ="submit" >Регистрация</button>
					</form>
				</div>


				<div class="col">
					<h1>Форма авторизации</h1>
					<form  action="php/auth.php" method="post">
						<input type="text" class="form-control" name="login" value="login" id="login" placeholder="Введите ваш логин"><br>

						<input type="password" class="form-control" name="pass" value="pass" id="pass" placeholder="Введите ваш пароль"><br>

						<button class="btn btn-success"  type ="submit" >Авторизация</button>
					</form>
				</div>
					<?php else:?>
						<p>Привет  <?php $_COOKIE['user'] ?>.Чтобы выйти нажмите  <a href="php/exit.php">здесь</a> </p>
				<?php endif; ?>

		 </div>
 </div>
 <footer class="container pt-4 my-md-5 pt-md-5 border-top">
<div class="row">
  <div class="col-12 col-md">
    <small class="d-block mb-3 text-muted">© 2021–2021</small>
  </div>
  <div class="col-6 col-md">
    <h5>О компании</h5>
    <ul class="list-unstyled text-small">
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Вакансии</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Реквезиты</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Бренд</a></li>
    </ul>
  </div>
  <div class="col-6 col-md">
    <h5>Помощь</h5>
    <ul class="list-unstyled text-small">
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Как сделать заказ</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Доставка</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Оплата</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Безопасность</a></li>
    </ul>
  </div>
  <div class="col-6 col-md">
    <h5>Юридически лицам</h5>
    <ul class="list-unstyled text-small">
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Мои компании</a></li>
      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Кэшбек</a></li>
    </ul>
  </div>
</div>
</footer>
</blody>
</html>
