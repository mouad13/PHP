<?php
$cookieSet = false;
if( !empty($_POST['login']) AND !empty($_POST['pass']) ){
  setcookie('log', htmlspecialchars($_POST['login']), time()+60);
  setcookie('mdp', htmlspecialchars($_POST['pass']), time()+60);
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
  <form   method="post">
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
  ?>
</body>
</html>