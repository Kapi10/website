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
		<input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
		<a class="btn btn-outline-primary" href="#">Войти</a>
		<a class="btn btn-primary" href="#">Зарегестрироватся</a>
 </div>
 <div class="container mt-5">
	 <h3 class="mb-5">Наши товары</h3>
	 <div class="d-flex flex-wrap">
	 <?php
	 	for($i = 0; $i < 6; $i++):
	 ?>
	 <div class="card mb-4 rounded-3 shadow-sm">
					 <div class="card-header py-3">
						 <h4 class="my-0 fw-normal">Название товара</h4>
					 </div>
					 <div class="card-body">
						 <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
						 <ul class="list-unstyled mt-3 md-4">
							 <li>Описание</li>
							 <li>Какой то текст</li>
							 <li>Доставка</li>
							 <li>Цена</li>
						 </ul>
						 <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
					 </div>
				 </div>
			 <?php endfor; ?>
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
