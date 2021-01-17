<?php
	include "sys.php";
	$title = $cmd . $textScreenshots;
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
	<?php include "screenshots-txt/dos-freedos-start-ver.html"; ?>
	<?php include "screenshots-txt/dos-dir.html"; ?>
	<?php include "screenshots-txt/dos-mem.html"; ?>
	<!-- <?php include "screenshots-txt/dos-dn.html"; ?> -->
	<?php include "screenshots-txt/windows-cmd-help-mem.html"; ?>
	<?php include "screenshots-txt/windows-cmd-dir.html"; ?>
	<?php include "screenshots-txt/powershell-get-childitem.html"; ?>
</section>

<?php include "footer.php"; ?>