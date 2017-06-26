<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
$clientIp = $_SERVER['REMOTE_ADDR'];
$serverNam = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
  <?php
  echo '<p>votre user agent: '.$useragent.'</p>';
  echo '<p>votre adresse ip: '.$clientIp.'</p>';
  echo '<p>nom du server: '.$serverNam.'</p>';
  ?>

</body>
</html>