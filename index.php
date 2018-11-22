<?php
header ('Content-Type: text/html; charset=utf-8');
ob_start ();
include "include.php";
include "creat_ob.php";
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<link rel="stylesheet" href="styl.css">
	<meta charset="utf-8"/> 
	<title>Яма</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/right-nav-style.css">
</head>	
<body>

<input type="checkbox" id="nav-toggle" hidden>
    <nav class="nav">
        <label for="nav-toggle" class="nav-toggle" onclick></label>
        <h2 class="logo"> 
            <a href="">pit.ru</a> 
        </h2>
        <ul>
            <li><a href="#1">Один</a>
            <li><a href="#2">Два</a>
            <li><a href="#3">Три</a>
            <li><a href="#4">Четыре</a>
            <li><a href="#5">Пять</a>
            <li><a href="#6">Шесть</a>
            <li><a href="#7">Семь</a> 
        </ul>
    </nav>

  <header class = 'hader'>
   <?php $page->head (); ?>
  </header>
 <center><h1>Общий чат</h1></center>
  <div class = "body">
	<?php $myrow = $page->content(); ?>
	<?if (empty($myrow)) : ?>
		<p>Нет записей</p>
	<? else : ?>
		<?php $data->foreach_mess  ($myrow);?>
	<? endif ; ?>
   </div>
    
	
<div id="slideout">
  <img src="img/nap.png" alt="Отправить отзыв" width = "10%" />
  <div id="slideout_inner">
    <? if ( isset($_SESSION['login']) and  isset($_SESSION['password'])) :?>
		<div class = "form">
			<form method = 'POST' action = 'index.php'>
			<h2>Текст </h2>
			<br>
			<textarea name = 'text'></textarea>
			<br><br>
			<button type = 'submit' name = 'submit'>Отправить</button>
			</form>
		</div>
	<? else :?>
		<div class = "form">
			<form method = 'POST' action = 'index.php'>
			<h2>Логин </h2>
			<input type = "text" name = "login">
			<br><br>
			<h2>Пароль </h2>
			<input type = "text" name = "password">
			<br><br>
			<button type = 'submit' name = 'submit'>Войти</button> 
			<br><br>
			<button type = 'submit' name = 'submit'>Зарегистрироваться</button>
			</form>
		</div>
	<? endif ;?>		
  </div>
</div>
	
	
  

  
  <footer class = 'footer'>
	<?php echo $page->footer (); ?>
  </footer>
 
</body>
</html>
<?php ob_flush();?>