<?
session_start();
require_once("./php/LaVkusnoBD.php");
?> 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>GuestPanel</title>
      <link rel="stylesheet" href="./css/styleAP.css">
      <link rel="shortcut icon" href="./img/IconInt.png" type="../img/IconInt.png"> 
</head>
<body>
  <form action='./php/logouta.php' method='post'>
  <button class="logout">Выход</button>
</form>
  <div class="wrapper">
    <div class="panel4">
    <div class="tab4">
    <table class="prtb">
      <form action="" method="POST">
      <tr><td>Название:</td><td><input name=nam></input></td></tr>
      <tr><td>Категория:</td><td><select name="cat"><option value=""></option></select></input></td></tr>
      <tr><td>Кол-во:</td><td><input name="kol"></input></td></tr>
      <tr><td>Ед.изм</td><td><select name="edz"><option value="мг">мг</option><option value="мл">мл</option><option value="шт">шт</option><option value="см">см</option></select></td></tr>
      <tr><td>Цена:</td><td><input name="prc"></input></td></tr>
      <tr><td><button class="adp2" style="width:100px;">Добавить продукт</button></td></tr>
</table>
</form>
  </div>
  </div>
  <div class="panel3">
    <div class="tab3">
    <table class="ustb">
      <form action="" method="POST">
      <tr><td>ФИО:</td><td><input name=fio></input></td></tr>
      <tr><td>Логин:</td><td><input name="log"></input></td></tr>
      <tr><td>Пароль:</td><td><input name="pas"></input></td></tr>
      <tr><td>Права</td><td><select name="rig"><option value="m">Manager</option><option value="a">Admin</option></select></td></tr>
      <tr><td><button class="adp" style="width:100px;">Добавить пользователя</button></td></tr>
</table>
</form>
  </div>
  </div>
  <div class="panel">
    <div class="tab">
      <?
if (isset($_GET['del'])){
  $id = $_GET['del'];
  $query ="DELETE FROM menu where id_product = $id";
  mysqli_query($link,$query) or die(mysqli_error($link));
}
?>
    <table class="cc">
      <tr><td class="null"><a href ="../php/adproduct.php" style="padding-left: 10px;border: none; background: none"><img src="/img/new.png" width="45" height="40" ></a></td><td>Название</td><td class="nw">Категория</td><td class="nw">Кол-во</td><td>Ед.изм</td><td>Цена</td></tr>
      <?
$query = "SELECT * FROM menu, categories where category_product = id_category";
$men = mysqli_query($link, $query);
while ($menu = mysqli_fetch_array($men))
{
echo ' 
<tr><td class="null"><a href ="?del='.$menu["id_product"].'" style="border: none; background: none"><img src="/img/dl.png" width="50" height="40" ></a></td><td class="nw">'.$menu["name_product"].'</td><td class="nw">'.$menu["name_category"].'</td><td class="nw">'.$menu["count"].'</td><td>'.$menu["unit"].'</td><td>'.$menu["price"].'</td></tr> 
';}
    ?>
</table>

  </div>
  </div>

  <div class="panel2">
    <div class="tab2">
      <?
if (isset($_GET['deli'])){
  $idu = $_GET['deli'];
  $sid = $_SESSION['superuser']['id_user'];
  if ($sid == $idu)
  {
  echo'   <div id="zatemnenie1">
      <div id="okno1">
        Нельзя удалить самого себя!<br>
        <a href="APanel.php" class="close">Закрыть окно</a>
      </div>
    </div>';
}
else
{
  $query ="DELETE FROM users where id_user = $idu";
  mysqli_query($link,$query) or die(mysqli_error($link));
}
}
?>
    <table class="cc">
      <tr><td class="null"><a href ="../php/aduser.php" style="padding-left: 10px;border: none; background: none"><img src="/img/new.png" width="45" height="40" ></a></td><td>ФИО</td><td class="nw">Логин</td><td class="nw">Пароль</td><td>Права</td></tr>
      <?
$query = "SELECT * FROM users";
$us = mysqli_query($link, $query);
while ($user = mysqli_fetch_array($us))
{
echo ' 
<tr><td class="null"><a href ="?deli='.$user["id_user"].'" style="border: none; background: none"><img src="/img/dl.png" width="50" height="40" ></a></td><td class="nw">'.$user["fio"].'</td><td class="nw">'.$user["login"].'</td><td class="nw">'.$user["password"].'</td><td>'.$user["rights"].'</td></tr> 
';}
    ?>
</table>





  </div>
  </div>


  </div>

  <body>
</html>
