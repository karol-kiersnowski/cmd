<?php
	include "sys.php";
	$title = $cmd . $links;
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="fa fa-desktop"></i> <?=$screenshots?></h2>
<hr>
<section id="screenshots">
	<h3>screenshots saved as images</h3>
	<div class="card-container col-50">
		<div class="card-content">
			<a target="_blank" href="screenshots/dn.png">
				<div>
					<img alt="DOS Navigator 1.51" src="screenshots/dn.png"/>
					<div class="card-caption">
						<h3>DOS Navigator 1.51</h3>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-50">
		<div class="card-content">
			<a target="_blank" href="screenshots/dosshell-text.png">
				<div>
					<img alt="DOS Shell - text mode" src="screenshots/dosshell-text.png"/>
					<div class="card-caption">
						<h3>DOS Shell - text mode</h3>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-50">
		<div class="card-content">
			<a target="_blank" href="screenshots/dosshell-graphics.png">
				<div>
					<img alt="DOS Shell - graphics mode" src="screenshots/dosshell-graphics.png"/>
					<div class="card-caption">
						<h3>DOS Shell - graphics mode</h3>
					</div>
				</div>
			</a>
		</div>
	</div><div class="card-container col-50">
		<div class="card-content">
			<a target="_blank" href="screenshots/win-2-03.png">
				<div>
					<img alt="Windows 2.03" src="screenshots/win-2-03.png"/>
					<div class="card-caption">
						<h3>Windows 2.03</h3>
					</div>
				</div>
			</a>
		</div>
	</div>

	<h3>screenshots saved as text (HTML)</h3>
	
	<h4 class="text-center">linux - neofetch</h4>
	<?php include "screenshots/linux-neofetch.html"; ?>
	<?php include "screenshots/linux-mocp.html"; ?>
	<?php include "screenshots/linux-mc.html"; ?>
	<?php include "screenshots/linux-mcedit.html"; ?>
	<?php include "screenshots/linux-nano.html"; ?>
	<?php include "screenshots/dos-dn.html"; ?>
	<?php include "screenshots/dos-dir.html"; ?>
	<?php include "screenshots/dos-mem.html"; ?>
	<?php include "screenshots/dos-freedos-start-dn.html"; ?>

</section>

<?php include "footer.php"; ?>
