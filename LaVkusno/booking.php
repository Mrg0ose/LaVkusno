<?php
session_start();
require_once("LaVkusnoBD.php");
$nme = $_POST['nm'];
$eml = $_POST['em'];
$dte = $_POST['cl'];
$tme = $_POST['tm'];
$gsts = $_POST['gs']; 
$cment = $_POST['km']; 
$tbles = $_POST['st'];
$query = "SELECT * FROM booking WHERE id_table = '$tbles' AND 
id_time = '$tme' AND daten = '$dte'";
$send_query = mysqli_query($link, $query);
if (mysqli_num_rows($send_query)>0){
 $_SESSION['messagefail'] ='Упс... По этим данным столик уже забронирован, пожалуйста введите другое время,дату или столик.';
header( "Location: ../Index.php" );
}
else{
$query = "INSERT INTO booking (id_book, name, id_guess, id_table, id_time, daten, comment, email, status) VALUES (NULL, '$nme', '$gsts', '$tbles', '$tme', '$dte', '$cment', '$eml', 1)";
$result = mysqli_query ($link, $query);
$_SESSION['messageacc'] ='Столик забронирован, подробная информация была отправлена на ваш Email, ожидаем вас в нашем ресторане!';
header( "Location: ../Index.php" );
}
?>