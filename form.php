<div id="slideout">
  <img src="img/nap.png" alt="Отправить отзыв" width = "10%" />
  <div id="slideout_inner">
    <? if (1==1) :?>
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