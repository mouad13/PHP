<?php
session_start();
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$age = $_SESSION['age'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <title></title>
</head>
<body>
  <?php
  echo "<p>nom: <small>".$nom."</small></p>";
  echo "<p>prenom: <small>".$prenom."</small></p>";
  echo "<p>age: <small>".$age."</small></p>";
  unset($_SESSION['nom']);
  unset($_SESSION['prenom']);
  unset($_SESSION['age']);
  
  ?>

</body>
</html>