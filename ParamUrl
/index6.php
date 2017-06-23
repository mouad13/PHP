<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>

    <?php
    if( isset($_GET["batiment"]) AND isset($_GET["salle"]) ){
      echo "batiment: ".$_GET["batiment"]."</br>";
      echo "salle: ".$_GET["salle"]."</br>";
    }
     ?>

  </body>
</html>