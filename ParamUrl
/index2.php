
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>

    <?php
    if( isset($_GET["age"]) ){
      echo "age: ".$_GET["age"]."</br>";
    }else {
      echo "le parametre \"age\" n'a pas ete renseigner ";
    }
     ?>

  </body>
</html>