<?php
	include "sys.php";
	$title = $cmd . $guestbook;
	include "header.php";
	include "nav-main.php";
	include "header2.php";
?>
<h2 class="float-left"><i class="fa fa-address-book"></i> <?=$guestbook?></h2>
<a class="float-right button" href="guestbook-new-entry.php<?=$suffix?>"><i class="fa fa-plus"></i> <?=$addEntry?></a>
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