<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>

    <?php
    if( isset($_GET["dateDebut"]) AND isset($_GET["dateFin"]) ){
      echo "dateDebut: ".$_GET["dateDebut"]."</br>";
      echo "dateFin: ".$_GET["dateFin"]."</br>";
    }
     ?>

  </body>
</html>