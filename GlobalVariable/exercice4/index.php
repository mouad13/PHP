<?php
$cookieSet = false;
if( !empty($_POST['login']) AND !empty($_POST['pass']) ){
  $log = htmlspecialchars($_POST['login']);
  $passw = htmlspecialchars($_POST['pass']);
  setcookie('log', $log, time()+60);
  setcookie('mdp', $passw, time()+60);
  $_COOKIE['log'] = $log;
  $_COOKIE['mdp'] = $passw;
  $cookieSet = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
  <form  method="post">
    <label for="login">Login: </label>
    <input type="text" name="login" id="login" />
    <label for="pass">Password: </label>
    <input type="password" id="pass" name="pass"/>
    <button type="submit" name="envoyer">envoyer</button>
  </form>
  <?php
  if($cookieSet===true){
    echo 'cookie set';
    $cookieSet===false;
  }
  if(isset($_COOKIE['log'])){
    echo '<p><strong>Login: </strong>'.$_COOKIE['log'].'</p>';
    echo '<p><strong>Password: </strong>'.$_COOKIE['mdp'].'</p>';
  }
  ?>
</body>
</html>