<?php
session_start();
unset($_SESSION['superuser']);
header('Location: ../Index.php');
?>