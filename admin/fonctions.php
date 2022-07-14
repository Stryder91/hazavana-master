<?php
	include("config.php");

	function change($string)
	{
		return(str_replace("'","\'",strip_tags($string, '<br>')));
	}
?>