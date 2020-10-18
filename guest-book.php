<?php
	include "sys.php";
	$title = $cmd . $guestBook;
	include "header.php";
	include "nav-main.php";
?>
<h2><i class="fa fa-address-book"></i> <?=$guestBook?></h2>
<section>
	<hr>
	<h3><?=$form?></h3>
	<form>
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

	<h3><?=$guestEntries?></h3>
	
	
	<!-- <p>super strona</p>
	<hr>
	<div class="author">Author: aaaa</div>
	<div class="date">18.10.2020 17:27</div>
	<div class="clear"></div> -->
</section>

<?php include "footer.php";