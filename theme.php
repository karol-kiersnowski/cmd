<?php
	include "sys.php";
	$title = $cmd . $theme;
	include "header.php";
	include "nav-main.php";
?>
<h2><i class="fa fa-adjust"></i> <?=$theme?></h2>
<section>
	<hr>
	<h3>choose a color theme</h3>
	<div class="card-container col-25">
		<div class="card-content padding-5">
			<a href="?lang=<?=$lang?>&th=light">
				<div class="card-caption" style="background-color: #eee;">
					<h3>modern<br>(light)</h3>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a href="?lang=<?=$lang?>&th=blue">
				<div class="card-caption" style="background-color: #00a; color: #fff;">
					<h3>DOS<br>(blue / gray)</h3>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a href="?lang=<?=$lang?>&th=gray">
				<div class="card-caption" style="background-color: #aaa; color: #fff;">
					<h3>DOS<br>(gray / blue)</h3>
				</div>
			</a>
		</div>
	</div><div class="card-container col-25">
		<div class="card-content padding-5">
			<a href="?lang=<?=$lang?>&th=dark">
				<div class="card-caption" style="background-color: #000; color: #fff;">
					<h3>terminal<br>(dark)</h3>
				</div>
			</a>
		</div>
	</div>
</section>

<?php include "footer.php";