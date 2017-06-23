<?php
if($_GET['genre']===null || $_GET['prenom']===null || $_GET['nom']===null || $_GET['fichier']===null){
	echo '<form method="GET" action="index.php" enctype="multipart/form-data">
	<select name="genre">
		<option value="Mr">Mr</option>
		<option value="Mme">Mme</option>
	</select>
	<label for="nom">Nom</label>
	<input id="nom" type="text" name="nom" />
	
	<label for="prenom">Prénom</label>
	<input type="text" name="prenom" />

	<input type="file" name="fichier"/>
	
	<button type="submit" value="Envoyer">Envoyer</button>
</form>';

$extensions = array('.png');
$extension = strrchr($_GET['fichier'], '.');

if(!in_array($extension, $extensions)) 
{
	$erreur = 'Vous devez uploader un fichier de type png';
}

}

else{
	
	$genre=$_GET['genre'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$fichier=$_GET['fichier'];
	echo($genre." ".$prenom." ".$nom." ".$fichier);
	
}
?>