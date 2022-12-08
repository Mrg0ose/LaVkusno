<?php
session_start();
require_once("LaVkusnoBD.php");
$login = $_POST['login'];
$password = $_POST['password']; 
$admin = 'a';
$manager = 'm';
$query = "SELECT * FROM users WHERE login = '$login' AND 
password = '$password'";
$send_query = mysqli_query($link, $query);
if (mysqli_num_rows($send_query)>0){
$user = mysqli_fetch_assoc($send_query);
if ($user['rights'] == $admin)
{
$_SESSION['superuser']=["rights"=> $user['rights'],
                    "fio"=> $user['fio'],
                    "id_user" =>$user['id_user']];
    header( "Location: ../APanel.php" );
}
else if ($user['rights'] == $manager)
{
$_SESSION['user']=["rig"=> $user['rights'],
                    "nm"=> $user['fio']];
header( "Location: ../GPanel.php" );
}
}
else{
    $_SESSION['message'] ='Не правильный логин или пароль';
header( "Location: ../Index.php" );
}
?> 