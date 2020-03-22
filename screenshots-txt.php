<?php
	include "sys.php";
<<<<<<< HEAD
	$title = $cmd . $textScreenshots;
=======
	$title = $cmd . $links;
>>>>>>> 2ff6a09712c7ee4bff906a78ef522297b1fde0a3
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="fa fa-desktop"></i> <?=$textScreenshots?></h2>
<hr>
<section id="screenshots">
	<?php include "screenshots-txt/linux-neofetch.html"; ?>
	<?php include "screenshots-txt/linux-mocp.html"; ?>
	<?php include "screenshots-txt/linux-mc.html"; ?>
	<?php include "screenshots-txt/linux-mcedit.html"; ?>
	<?php include "screenshots-txt/linux-nano.html"; ?>
	<?php include "screenshots-txt/dos-dn.html"; ?>
	<?php include "screenshots-txt/dos-dir.html"; ?>
	<?php include "screenshots-txt/dos-mem.html"; ?>
	<?php include "screenshots-txt/dos-freedos-start-dn.html"; ?>
</section>

<?php include "footer.php"; ?>