<?php
	include "sys.php";
	$title = $cmd . $board . " / " . $newThread;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>
<h2 class="float-left"><i class="fa fa-thumbtack fa-fw"></i> <?=$board?></h2>
<a class="float-right button" href="board.php<?=$suffix?>"><i class="fa fa-arrow-left"></i> <?=$back?></a>
<div class="clear"></div>
<hr>
<section>
	<h3><?=$newThread?></h3>
	<form action="board.php<?=$suffix?>" method="post">
		<p>
			<label><?=$subject?>*</label><input type="text"/>
		</p>
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
			<button type="submit"><?=$submit?></button>
		</p>
	</form>
</section>

<?php include "footer.php";