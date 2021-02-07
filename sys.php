<?php
	if( isset($_GET['lang']) )
		$lang = $_GET['lang'];
	else
		$lang = "en";
	include $lang . '.php';

	if( isset($_GET['th']) ) 
		$th = $_GET['th'];
	else
		$th = "light";

	$cmd = "cmd:/> ";
	$suffix = "?lang=$lang&th=$th";
?>