<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>

    <?php
    if( isset($_GET["langage"]) AND isset($_GET["serveur"]) ){
      echo "langage: ".$_GET["langage"]."</br>";
      echo "serveur: ".$_GET["serveur"]."</br>";
    }
     ?>

  </body>
</html>