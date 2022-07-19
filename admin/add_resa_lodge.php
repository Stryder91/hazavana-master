<?php include("../admin/fonctions.php"); ?>
<?php

	$email     = ($_POST["email"])     ? change($_POST["email"])     : '';
	$nom       = ($_POST["nom"])       ? change($_POST["nom"])       : '';
	$prenom    = ($_POST["prenom"])    ? change($_POST["prenom"])    : '';
	$telephone = ($_POST["telephone"]) ? change($_POST["telephone"]) : '';

	$entree = ($_POST["entree"]) ? change($_POST["entree"]) : '';
	$sortie = ($_POST["sortie"]) ? change($_POST["sortie"]) : '';

	$adultes_nb   = ($_POST["adultes_nb"])   ? change($_POST["adultes_nb"])   : 0;
	$enfants_nb   = ($_POST["enfants_nb"])   ? change($_POST["enfants_nb"])   : 0;
	$nb_chambre   = ($_POST["nb_chambre"])   ? change($_POST["nb_chambre"])   : 0;
	$nb_bungalow  = ($_POST["nb_bungalow"])  ? change($_POST["nb_bungalow"])  : 0;

	var_dump($email, $nom, $prenom, $telephone, $entree, $sortie, $adultes_nb, $enfants_nb, $nb_chambre, $nb_bungalow);

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
		nb_chambre,
		nb_bungalow
	) VALUES (
		'$email',
		'$nom',
		'$prenom',
		'$telephone',
		'$entree',
		'$sortie',
		'$adultes_nb',
		'$enfants_nb',
		'$nb_chambre',
		'$nb_bungalow'
	)";

	try {
		$query = mysqli_query($lien,$sql);
		// $to = "lioneldg92@gmail.com";
		// $subject = "Coucou";
		// $body = "COUCOU BODY";
		header("location:../index.php");
	} catch(Exception $e) {
		var_dump($e);
	}
?>
