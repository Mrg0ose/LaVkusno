<?php
session_start();
require_once("./php/LaVkusnoBD.php");
?> 

<?
$_SESSION['addingu'];
$_SESSION['addingu'] ='Заполните данные.';
header( "Location: ../APanel.php" );
?>

