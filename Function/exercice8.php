<?php
  function foo($num1 = 1, $num2 = 2, $num3 = 3){
    return $num1 + $num2 + $num3;
  }
  echo foo(null, 7);
?>