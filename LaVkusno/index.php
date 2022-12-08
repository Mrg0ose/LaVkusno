<?php
session_start();
require_once ("./php/LaVkusnoBD.php");
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ресторан "LaVkusno"</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/adaptive.css">
	<link rel="shortcut icon" href="./img/IconInt.png" type="../img/IconInt.png">



	
</head>
<body>








	<div class="pop_up" id="pop_up">
	<div class="pop_up_container">
		<div class="pop_up_body" id="pop_up_body">
			<p>Заполните данные и выберите столик</p>
			<div class="styleinfo">
			<form action="./php/booking.php" method="POST">
				<div class="stol">	
				</div>
				<input class="nname" name="nm" required type="text" placeholder="Имя*" >
				<input class="emaill" name="em" type="email" required type="email" placeholder="Email*">


				<?
				$today = date("Y-m-d");
				$todaymax = date("Y-m-d", strtotime("+2 days"));
				echo'
				 <input  required class="cal" required type="date" name="cl" value="Выберите дату"
				
    max="'.$todaymax.'" min="'.$today.'">';
    ?>
    <select name="tm" required class="tme">
    <?
//$a = date('H:i:s');

$query = "SELECT * FROM timess"; //where timee >= '$a'";
$timi = mysqli_query($link, $query);
while ($timis = mysqli_fetch_array($timi)):
?>

					<option value="<?=$timis['time_id'];?>"><?=$timis['timee'];?></option>
<? endwhile; ?>
</select>
    

				<select placeholder="кол-во" name="gs" required class="guest">
					<?
$query = "SELECT * FROM guesses";
$gu = mysqli_query($link, $query);
while ($gus = mysqli_fetch_array($gu)):
?>
					<option value="<?=$gus['guess_id'];?>"><?=$gus['guess'];?></option>
    <? endwhile; ?>
</select>
				<input class="kom" name="km"  type="text" maxlength="35"  placeholder="Комментарий к бронированию (макс.35 симв.)">
				<button type="submit" >Забронировать</button>
				<select required type="text"  name="st" class="stolik">
					<?
				//	$today = date("Y-m-d");
				//$todaymax = date("Y-m-d", strtotime("+2 days"));
					//$query = "SELECT * FROM tables WHERE table_id NOT IN (SELECT id_table FROM booking,timess WHERE daten between ('.$today.' and '.$todaymax.') AND id_time = time_id);";
$query = "SELECT * FROM tables";
$ta = mysqli_query($link, $query);
while ($tab = mysqli_fetch_array($ta)):
?>
					<option value="<?=$tab['table_id'];?>"><?=$tab['tablee'];?></option>
    <? endwhile; ?>
</select>
			</form>
			</div>
			<div class="pop_up_close" id="pop_up_close">&#10006</div>
		</div>
	</div>
</div>
<header class="header">
	<div class="int">
	<div class="menu">
	<div class="wrapper">
		<div class="header_wrapper">
			<div class="header__logo">
			<a href="index.html" class="header__logo-link">
				<img src="./img/logo.png" alt="LaVkusno" class="header__logo-pic">
			</a>
			</div>

		<nav class="header_nav">
			<ul class="header_list">
				<li class="header_item">
					<a href="#why" class="header_link1">Где мы?</a>
				</li>
				<li class="header_item">
					<a href="#on" class="header_link2">О нас</a>
				</li>
				<li class="header_item_b">
					<a href="#men" class="header_link3">Меню</a>
					  
				</li>
				<li class="header_item_a">
					<a href="#why"   class="header_link4">ЗАБРОНИРОВАТЬ СТОЛИК</a>
				</li>
			</ul>
		</nav>


		
		</div>
	</div>
	</div>
	<div class="titla">
		<h1 class="header_tittle">
				LaVkusno
			</h1>
			<h2 class="header_subtittle">
				restaurant
			</h2>
			</div>
	</div>
	
</header>
<main class="main">
	
		<div class="wrapper">
			<section class="intro">
			<div class="slider_middle">
				<div class="slides">
					<input type="radio" name="r" id="r1" checked>
					<input type="radio" name="r" id="r2">
					<input type="radio" name="r" id="r3">
					<input type="radio" name="r" id="r4">
					

					<div class="slide s1"> 
						<img src="./img/фото11.jpg" alt="">
					</div>
					<div class="slide"> 
						<img src="./img/фото22.jpg" alt="">
					</div>
					<div class="slide"> 
						<img src="./img/фото33.jpg" alt="">
					</div>
					<div class="slide"> 
						<img src="./img/фото44.jpg" alt="">
					</div>

				</div>
				<div class="navigation">
					<label for="r1" class="bar"></label>
					<label for="r2" class="bar"></label>
					<label for="r3" class="bar"></label>
					<label for="r4" class="bar"></label>
				</div>				
			</div>
		</div>
	</section>
	<div class="wrapper">
	<section class="onas">
		
			<div id="on" class="win">
	<h1>О нас</h1>
		</div>
		<div class="opisimg">
			<img src="./img/onas.jpg" alt="онас" width="420" height="370">
		</div>
		
		<h2 class="tx">
			Ресторан современной кухни "LaVkusno"<br>
			не оставит равнодушным даже самого серьезного критика.<br>
			Изысканные блюда готовятся прямо на глазах наших<br>
			дорогих посетителей, показывая все мастерство<br>
			команды ресторана "LaVkusno".
		</h2>
		<h2 class="tx1">
			<br>Я не я, если клиент уйдет от меня
		</h2>
<h2 class="tx2">
			 <br>не удовлетворив свой желудок
			 </h2>
<h2 class="tx3">
			  <br>изысканным блюдом...
		</h2>


		<div class="opisimg2">
			<img src="./img/chif.png" alt="chif">
		</div>
		<div class="chif">
		<h2 class="tx4">
			  Иванов Иван Иванович
		</h2>
		<h2 class="tx5">
			  Ведущий Шеф-повар
		</h2>
		</div>

		</section>
		</div>

<div class="wrapper">
<section class="menur">
			<div id="men" class="win2">
	<h1>Меню</h1>
		</div>
		<div class="tables">

		<div class="winmss">
			<div class="winmsstxt">
<h1>Салаты/Супы</h1>
<h1>--------------------------------------</h1>
</div>
<div class="winmtxt">
			<?
			$a = '1';
			$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>";
}
?>
</div>
			</div>
		</div>
		<div class="winmd">
			<div class="winmsstxt">
<h1>Десерт</h1>
<h1>--------------------------------------</h1>
</div>
			<div class="winmtxt">
			<?
			$a = '2';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>";
}
?>
</div>
		</div>
		<div class="winmg">
			<div class="winmsstxt">
<h1>Горячее</h1>
<h1>--------------------------------------</h1>
</div>
<div class="winmtxt">
			<?
			$a = '3';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>";
}
?>
</div>
			
		</div>
		</div>
	</section>
	</div>


	<div class="wrapper">
<section class="vipspismenu">

		<div class="tablesvip">
			
		</div>
		<div class="winma">
			<div class="winmsstxt">
<h1>Алкогольные напитки</h1>
<h1>------------------------------------------------------------</h1>
</div>
<div class="winmtxtn">

			<?
			$a = '4';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>","<br>";
}
?>
			</div>
	
		</div>
		<div class="winmba">
<div class="winmsstxt">
<h1>Безалкогольные напитки</h1>
<h1>------------------------------------------------------------</h1>
</div>
			<div class="winmtxtn">
			<?
			$a = '5';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>","<br>";
}
?>
</div>
		</div>
		<div class="winmsp">
			<div class="winmsstxt">
<h1>Суши/Пицца</h1>
<h1>------------------------------------------------------------------------------------------------------------------------------</h1>
</div>
<div class="winmtxts">
			<?
			$a = '6';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>","<br>";
}
?>
</div>
<div class="winmtxtp">
			<?
			$a = '7';
$p = ' ';
			$n ='руб.';
$query = "SELECT * FROM menu where category_product = '$a'";
$prod = mysqli_query($link, $query);
while ($men = mysqli_fetch_array($prod))
{
echo $men ['name_product'];
echo $p;
echo $men ['count'];
echo $men ['unit'];
echo $p;
echo $men ['price'];
echo $n, "<br>","<br>";
}
?>
</div>
		</div>
		<!-- <button class="razv">
			<i class="updwn"> </i>
		</button> -->
		</div>
	</section>
	</div>

<div class="wrapper">
<section class="geo">
			<div id="why" class="win3">
	<h1>Где мы?</h1>
		</div>
		<div class="geoinf">
	<div class="opisimgeo">
			<img src="./img/GPS.png" alt="гео" class="geoimg" width="430" height="300">
		</div>
		 
		<h2 class="txgeo">
			Наш ресторан находится на ул.Пушкина 69.<br>
			График работы:<br>           Ежедневно с 10:00 до 02:00.<br>
			Горячая линии: 8-987-654-32-10.<br>
			Email: LaVkusno@mail.ru
		</h2>
				<button id=open_pop_up class="bron"> 
					<a href="#" class="stl" >Забронировать сейчас</a></button>

		</div>
		
		<div class="win4">
			<h1 class="soc">Мы есть в соц.сетях:</h1>
	</div>
	<div class="socs">
		<a href="Index.php" class="header__logo-link">
			<img src="./img/vk.png" alt="" class="vk" width="25">
		</a>
		<a href="Index.php" class="header__logo-link">
			<img src="./img/inst.png" alt="" class="inst" width="25">
		</a>
		<a href="Index.php" class="header__logo-link">
			<img src="./img/face.png" alt="" class="face" width="25">
		</a>
		</div>

		</section>
		</div>
		
    <footer>
        <p>© 2022 LaVkusno. Все права защищены.</p>
    </footer>
</article>

<div class="wrapper">
	<div class="btnup">
				
				<div class="btn-up btn-up_hide"></div>

  <script src="./js/btn-up.js"></script>
			</div>
		</div>

</main>
<?
     if($_SESSION['messagefail'])
     {
      echo ' <div id="zatemnenie">
      <div id="okno">
        Упс... По этим данным столик уже забронирован, пожалуйста введите другое время,дату или столик.<br>
        <a href="Index.php" class="close">Закрыть окно</a>
      </div>
    </div>';
     }
     unset($_SESSION['messagefail'])
     ?>
     <?
     if($_SESSION['messageacc'])
     {
      echo ' <div id="zatemnenie">
      <div id="okno">
        Столик забронирован, подробная информация была отправлена на ваш Email, ожидаем вас в нашем ресторане!<br>
        <a href="Index.php" class="close">Закрыть окно</a>
      </div>
    </div>';
     }
     unset($_SESSION['messageacc'])
     ?>





<script src="./js/pop.js"></script>
</body>
</html>