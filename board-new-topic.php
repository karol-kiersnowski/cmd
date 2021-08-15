<?php
	include "sys.php";
	$title = $cmd . $board;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>
<h2 class="float-left"><i class="fa fa-thumbtack fa-fw"></i> <?=$board?></h2>
<a class="float-right button" href="board.php<?=$suffix?>"><i class="fa fa-arrow-left"></i> <?=$back?></a>
<div class="clear"></div>
<hr>
<section>
	<h3><?=$form?></h3>
	<form action="board.php<?=$suffix?>" method="post">
		<p>
			<label><?=$name?></label><input type="text"/>
		</p>
		<p>
			<label><?=$comment?></label><textarea></textarea>
		</p>
		<p>
			<button type="submit"><?=$submit?></button>
		</p>
	</form>
</section>

<?php include "footer.php";