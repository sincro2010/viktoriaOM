<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" content="dark light">
<link rel="stylesheet" href="theme.css">
<link rel="stylesheet" href="style.css">
<title>Читать книги онлайн</title>
</head>

<body class="page light-theme">
	<div class="main">
	<div class="page-header">
	<div class="nav">
		<ul class="main-menu">
			<li><a href="index.php">Главная</a></li>
			<li><a href="#">Виктория ОМ</a>
				<ul class="sub-menu closed">
					<li><a href="annotation.php?book_id=0"><?= get_book_heading(0) ?></a></li>
					<li><a href="annotation.php?book_id=1"><?= get_book_heading(1) ?></a></li>
					<li><a href="annotation.php?book_id=2"><?= get_book_heading(2) ?></a></li>
				</ul>
			</li>
			<li><a href="#">Моя библиотека</a></li>
		</ul>
	</div>

	<div class="top-panel">
		<form action="" method="POST">
			<input type="search" name="search" id="search" placeholder="Найти">
		</form>
	<a href="registration.php">Регистрация/</a>
	<a href="/login">Вход</a>
	<button class="theme-button" type="button">Изменить тему</button>
	</div>
	</div>