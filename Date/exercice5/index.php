<?php
$dateDebut = "2016/05/16" ; 
$dateFin = "today"; 
$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut)); 
echo number_format($dureeSejour/86400 ,0);
?>