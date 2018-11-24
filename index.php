<?php
header ('Content-Type: text/html; charset=utf-8');
ob_start ();
include "include.php";
include "creat_ob.php";
$data->transferpost ($_POST);
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

<?php $page->sidebar();?>

  <header class = 'hader'>
   <?php $page->head (); ?>
  </header>
 <center><h1>Общий чат</h1></center>
  <div class = "body">
	<?php $myrow = $page->content(); ?>
	<?if (empty($myrow)) : ?>
		<p>Нет записей</p>
	<? else : ?>
		<?foreach ($myrow as $key=>$vol):?>
			
			<br><article>
			<header><?=$myrow[$key]['user']?></header>
			<p><?=$myrow[$key]['text']?></p>
			<footer><?=$myrow[$key]['data']?></footer>
			</article>
			
		<?endforeach;?>
	<? endif ; ?>
   </div>
    
	
<?php $page->form(); ?>
	
	
  

  
  <footer class = 'footer'>
	<?php echo $page->footer (); ?>
  </footer>
 
</body>
</html>
<?php ob_flush();?>