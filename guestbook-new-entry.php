<?php
	include "sys.php";
	$title = $cmd . $guestbook . " / " . $newEntry;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>
<h2 class="float-left"><i class="fa fa-address-book"></i> <?=$guestbook?></h2>
<a class="float-right button" href="guestbook.php<?=$suffix?>"><i class="fa fa-arrow-left"></i> <?=$back?></a>
<div class="clear"></div>
<hr>
<section>
	<h3><?=$newEntry?></h3>
	<form action="guestbook.php<?=$suffix?>" method="post">
		<p>
			<label><?=$content?>*</label><textarea></textarea>
		</p>
		<p>
			<label><?=$yourName?>*</label><input type="text"/>
		</p>
		<p>
			<label><?=$yourEmail?></label><input type="text"/>
		</p>
		<p>
			<label><?=$yourWebsite?></label><input type="url"/>
		</p>
		<p>
			<button type="submit"><?=$submit?></button>
		</p>
	</form>
</section>

<?php include "footer.php";