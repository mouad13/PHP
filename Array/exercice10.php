<?php
$array['02'] = 'aisne';
$array['59'] = 'nord';
$array['60'] = 'oise';
$array['62'] = 'pas-de-calais';
$array['80'] = 'somme';

 foreach ($array as $key => $value) {
    echo "Le département ". $value . " a le numéro " . $key . '<br/>';
  }
?>