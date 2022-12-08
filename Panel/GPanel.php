<?php
require_once("./php/LaVkusnoBD.php");
?> 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>GuestPanel</title>
      <link rel="stylesheet" href="./css/styleGP.css">
      <link rel="shortcut icon" href="./img/IconInt.png" type="../img/IconInt.png"> 
</head>
<body>
  <div class="wrapper">
  <div class="panel">
    <div class="tab">
      <?
if (isset($_GET['del'])){
  $id = $_GET['del'];
  $query ="DELETE FROM booking where id_book = $id";
  mysqli_query($link,$query) or die(mysqli_error($link));
}
?>
<?
if (isset($_GET['acc'])){
  $id = $_GET['acc'];
  $query ="UPDATE booking SET status = 2 where id_book = $id";
  mysqli_query($link,$query) or die(mysqli_error($link));
}
?>    
    <table>
      <tr><td></td><td class="null"></td><td>имя</td><td class="nw">гостей</td><td class="nw">столик</td><td>дата</td><td>время</td><td>комментарий</td><td>статус</td></tr>
      <?
$query = "SELECT * FROM booking, timess,statuses where time_id = id_time and id_status = status";
$boo = mysqli_query($link, $query);
while ($book = mysqli_fetch_array($boo))
{
$date = new DateTime($book ['daten']);

$time = new DateTime($book ['timee']);

echo ' 
<tr><td class="null"><a href ="?del='.$book["id_book"].'" style="border: none; background: none"><img src="/img/dl.png" width="50" height="40" ></a></td><td class="null" ><a href ="?acc='.$book["id_book"].'" style="border: none; background: none"><img src="/img/ac.png" width="40" height="38"</a></td><td class="nw">'.$book["name"].'</td><td class="nw">'.$book["id_guess"].'</td><td class="nw">'.$book["id_table"].'</td><td>'.$date->Format('d.m.Y').'</td><td>'.$time->Format('H:i').'</td><td class="null"><a href="?com='.$book["id_book"].'#okno" style="border: none; background: none"><img src="/img/come.png" width="45" height="38"></a></td><td>'.$book['statuss'].'</td></tr> 
';}
    ?>
</table>

<?
if (isset($_GET['com'])){
  $id = $_GET['com'];
$query = "SELECT * FROM booking where id_book = $id";
$boo = mysqli_query($link, $query)or die(mysqli_error($link));
while ($book = mysqli_fetch_array($boo))
{
echo ' 
<div id="okno">
      '.$book["comment"].'<br>
      <a class="msgbtn" href="#" class="close">Закрыть окно</a>
    </div>
    ';}}
    ?>
     



  </div>
  </div>
<form action='./php/logoutm.php' method='post'>
  <button class="logout">Выход</button>
</form>
  </div>
  <body>
</html>
