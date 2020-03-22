<?php
	include "sys.php";
	$title = $cmd . $about;
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="fa fa-info-circle"></i> <?=$about?></h2>
<hr>
<section>
	<h3>thanks to</h3>
	<ul style="text-align: left; list-style-type: disc;">
		<li>authors of the <a href="https://fonts.google.com/specimen/Ubuntu+Mono?selection.family=Ubuntu+Mono">Ubunto Mono</a> font</li>
		<li><a href="https://fontawesome.com">Font Awesome</a> for their icons</li>
		<li><a href="https://fonts.google.com">Google Fonts</a></li>
		<li><a href="https://www.apachefriends.org/index.html">XAMPP</a> for their web server solution stack</li>
		<li><a href="https://www.sublimetext.com">Sublime Text</a> for their text editor</li>
	</ul>
</section>

<?php include "footer.php"; ?>
