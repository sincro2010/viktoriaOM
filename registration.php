<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="theme.css">
<link rel="stylesheet" href="style.css">
<title>Регистрация</title>
</head>



<body class="page light-theme">
	<div class="page-header">
  <a href="index.php" class="button-to-main">На главную страницу</a>
	<div class="top-panel">
	<button class="theme-button" type="button">Изменить тему</button>
	</div>
  </div>


    <div class="registration">
      <h1 class="signup-heading">Регистрация</h1>
      <form class="reg-form" action="https://echo.htmlacademy.ru/courses" method="post">
        
        <div class="login-inner">
        <label class="login-label" for="reg-name">Ваш логин</label>
        <input class="name" type="text" id="reg-name" name="reg-name" placeholder="Логин" required>
        </div>
        
        <div class="email-inner">
        <label class="email-label" for="reg-email">Ваш email</label>
        <input class="email" type="text" id="reg-email" name="reg-name" placeholder="email" required>
        </div>

        <div class="password-inner">
        <label class="password-label" for="reg-pass">Ваш пароль</label>
        <input class="password" type="password" id="reg-pass" name="reg-pass" placeholder="Пароль" required >
        </div>

        <div class="security">
          <div class="security-bar"></div>
        </div>
        <input class="show-password visually-hidden" type="checkbox" id="show-pass">
        <label class="checkbox-label" for="show-pass">Показать пароль</label>
        <button class="button" type="submit">Зарегистрироваться</button>
      </form>
    </div>

     

<script src="theme.js"></script>
<script src="up-button.js"></script>
<script src="read-mode.js"></script>
<script src="comments.js"></script>
<script src="likes.js"></script>
<script src="select.js"></script>

      </body>

      </html>