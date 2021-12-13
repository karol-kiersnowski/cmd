<?php
	include "sys.php";
	$title = $cmd . $board;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>
<h2 class="float-left"><i class="fa fa-thumbtack fa-fw"></i> <?=$board?></h2>
<a class="float-right button" href="board-new-thread.php<?=$suffix?>"><i class="fa fa-plus"></i> <?=$newThread?></a>
<div class="clear"></div>
<hr>
<section>

	<!-- <h3><?=$guestEntries?></h3> -->
	<!-- <p>super strona</p>
	<hr>
	<div class="author">Author: aaaa</div>
	<div class="date">18.10.2020 17:27</div>
	<div class="clear"></div> -->
</section>

<?php include "footer.php";