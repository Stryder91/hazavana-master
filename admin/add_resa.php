<?php include("../admin/fonctions.php"); ?>
<?php

	$email     = ($_POST["email"])     ? change($_POST["email"])     : '';
	$nom       = ($_POST["nom"])       ? change($_POST["nom"])       : '';
	$prenom    = ($_POST["prenom"])    ? change($_POST["prenom"])    : '';
	$telephone = ($_POST["telephone"]) ? change($_POST["telephone"]) : '';

	$entree = ($_POST["entree"]) ? change($_POST["entree"]) : '';
	$sortie = ($_POST["sortie"]) ? change($_POST["sortie"]) : '';

	$adultes_nb   = ($_POST["adultes_nb"])   ? change($_POST["adultes_nb"])   : '';
	$enfants_nb   = ($_POST["enfants_nb"])   ? change($_POST["enfants_nb"])   : '';
	$type_chambre = ($_POST["type_chambre"]) ? change($_POST["type_chambre"]) : '';

	var_dump($email, $nom, $prenom, $telephone, $entree, $sortie, $adultes_nb, $enfants_nb, $type_chambre);

	//SQL
	$sql = "INSERT INTO resa_lodge (
		email,
		nom,
		prenom,
		telephone,
		entree, 
		sortie,
		adultes_nb,
		enfants_nb,
		type_chambre
	) VALUES (
		'$email',
		'$nom',
		'$prenom',
		'$telephone',
		'$entree',
		'$sortie',
		'$adultes_nb',
		'$enfants_nb',
		'$type_chambre'
	)";

	try {
		$query = mysqli_query($lien,$sql);
		header("location:../index.php");
	} catch(Exception $e) {
		var_dump($e);
	}
?>
