<?php
	if( isset($_GET['lang']) )
		$lang = $_GET['lang'];
	else
		$lang = "en";
	include $lang . '.php';

	if( isset($_GET['theme']) ) 
		$th = $_GET['theme'];
	else
		$th = "light";

	$cmd = "cmd:/> ";
	$suffix = "?lang=$lang&theme=$th";
?>