<?php
session_start();
if ($_SESSION['user']){
  header ('Location: GPanel.php');
}
else if($_SESSION['superuser']){
  header ('Location: APanel.php');
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>GuestPanelAuthorization</title>
  
  
  
      <link rel="stylesheet" href="css/styleadmin.css">
      <link rel="shortcut icon" href="./img/IconInt.png" type="../img/IconInt.png">

  
</head>

<body>
  <body>
<form action='./php/authorization.php' method='post'>
  <?
     if($_SESSION['message'])
     {
      echo ' <p class="msg">'.$_SESSION['message'].'</p>';
     }
     unset($_SESSION['message'])
     ?>
  
  <input checked="" id="signin" name="action" type="radio" value="signin">
  <label for="signin" >Sign in</label>
  <div id="wrapper">
    <div id="arrow"></div>
    <input id="log" placeholder="Login" name="login" type="text">
    <input id="pas" placeholder="Password" name="password" type="password">
  </div>
  <button type="submit">
    <span>
      Reset password
      <br>
      Sign in
      <br>
      Sign up
    </span>
  </button>
  
</form>
<div id="hint">LAVKUSNOCONTROLPANEL</div>

<script type="text/javascript">
    
</script>

</body>
  
  
</body>
</html>
