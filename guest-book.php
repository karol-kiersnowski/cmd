<?php
	include "sys.php";
	$title = $cmd . $guestBook;
	include "header.php";
	include "nav-main.php";
?>
<h2><i class="fa fa-address-book"></i> <?php echo $guestBook; ?></h2>
<section>
	<hr>
	<form>
		<p><input type="text" placeholder="login"/></p>
		<p><textarea placeholder="comment here"></textarea></p>
		<p><button type="submit">Submit</button></p>
	</form>
</section>

<?php include "footer.php";