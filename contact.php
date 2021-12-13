<?php
	include "sys.php";
	$title = $cmd . $contact;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>
<h2><i class="far fa-envelope fa-fw"></i> <?=$contact?></h2>
<hr>
<section>
	<h3><?=$form?></h3>
	<form action="contact.php<?=$suffix?>" method="post">
		<p>
			<label><?=$subject?></label><input type="text"/>
		</p>
		<p>
			<label><?=$content?></label><textarea></textarea>
		</p>
		<p>
			<label><?=$yourEmail?></label><input type="text"/>
		</p>
		<p>
			<button type="submit"><?=$submit?></button>
		</p>
	</form>
</section>

<?php include "footer.php";