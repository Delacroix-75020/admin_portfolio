<?php

function insertProjet($libelle, $description, $lien, $github, $idc, $idi) {
	global $bdd;
	$insertion = $bdd->prepare("
		INSERT INTO projet (libelle, description, lien, github, idc, idi) 
		VALUES (:libelle, :description, :lien, :github, :idc, :idi)
	");
	$insertion->bindValue(':libelle', $libelle, PDO::PARAM_STR);
	$insertion->bindValue(':description', $description, PDO::PARAM_STR);
	$insertion->bindValue(':lien', $lien, PDO::PARAM_STR);
	$insertion->bindValue(':github', $github, PDO::PARAM_STR);
	$insertion->bindValue(':idc', $idc, PDO::PARAM_STR);
	$insertion->bindValue(':idi', $idi, PDO::PARAM_STR);
	return $insertion->execute();
}

function selectAllprojet(){
	global $bdd;
	$req = "SELECT * FROM projet";

	$res = $bdd -> query($req);

	$leslignes = $res->FetchAll();

		return $leslignes;
}
?>