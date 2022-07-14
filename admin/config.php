<?php
	session_start();

	$host = "localhost"; //localhost
	$user = "root"; //root
	$password = ""; // "" //
	$bdd = "hazavana"; // 

	$lien = mysqli_connect($host,$user,$password,$bdd);
	mysqli_query($lien,"set names utf8")
?>