<?php
  function foo($genre, $age){
    if ($genre === 'homme'&& $age < 18){
        return "Tu es un homme et tu es mineur";
    }
    elseif ($genre === 'homme' && $age >= 18){
        return 'Tu es un homme et tu es majeur';
    }
    elseif($genre === 'femme' && $age < 18){
        return 'Tu es une femme et tu es mineur';
    }
    else {
        return 'Tu es une femme et tu es majeur';
    }
  }
  echo foo('homme', 15);
  echo foo('femme', 28);
  echo foo('homme', 25);
?>