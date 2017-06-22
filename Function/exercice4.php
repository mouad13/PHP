<?php
  function foo($num1, $num2) {
    if($num1 > $num2){
      return "Le premier nombre est plus grand <br>";
    }elseif($num1 < $num2){
      return "le premier nombre est plus petit <br>";
    }
    return "Les deux nombres sont identiques <br>";
  }
  echo foo(1,6);
  echo foo(8,8);
  echo foo(9,3);
 ?>