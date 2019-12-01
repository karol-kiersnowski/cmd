<?php
	include "sys.php";
	$title = $cmd . " windows";
	include "header.php";
?>

<h2><i class="fab fa-windows"></i> windows cmd / DOS</h2>
<hr>
<section>
	<hr>
	<h3><i class="fa fa-question fa-fw"></i> <?=$commands?></h3>
	<hr>
	<ul>
		<li>help</li>
		<li>/h , /help</li>
		<li>version</li>
	</ul>
	<hr>
	<h3><i class="far fa-folder-open fa-fw"></i> <?=$browsingDirectories?></h3>
	<hr>
	<ul>
		<li>dir</li>
		<li>cd</li>
		<li>tree</li>
	</ul>
	<hr>
	<h3><i class="far fa-copy fa-fw"></i> <?=$foldersFilesManipulation?></h3>
	<hr>
	<ul>
		<li>copy</li>
		<li>diskcopy</li>
		<li>xcopy</li>
		<li>move</li>
		<li>ren</li>
		<li>del</li>
		<li>undelete</li>
		<li>md / mkdir</li>
		<li>rd / rmdir</li>
		<li>type</li>
	</ul>
	<hr>
	<h3><i class="fa fa-terminal fa-fw"></i> <?=$console?></h3>
	<hr>
	<ul>
		<li>cls</li>
		<li>more</li>
		<li>prompt</li>
	</ul>
	<hr>
	<h3><i class="fa fa-globe fa-fw"></i> <?=$network?></h3>
	<hr>
	<ul>
		<li>ipconfig</li>
		<li>ping</li>
		<li>tracert</li>
		<li>route</li>
	</ul>
	<hr>
	<h3><i class="fa fa-align-left fa-fw"></i> <?=$textEditors?></h3>
	<hr>
	<ul>
		<li>edlin</li>
		<li>edit</li>
	</ul>
	<hr>
	<h3><i class="fa fa-save fa-fw"></i> <?=$batchFiles?></h3>
	<hr>
	<ul>
		<li>.bat</li>
	</ul>
	<hr>
	<h3><i class="fa fa-save fa-fw"></i> dosbox</h3>
	<hr>
	<ul>
		<li>mount</li>
		<li>imgmount</li>
	</ul>
	<h4>Mount disks / directories</h4>
		<pre>
mount c c:/Apps   /   mount c ~/Apps
c:

mount d d: -t cdrom   /   mount d ~/ -t cdrom

imgmount d "..\WORMS.DAT" -t iso
	</pre>
	<h3><i class="fa fa-exclamation-triangle fa-fw"></i> danger zone</h3>
	<hr>
	<ul>
		<li>chkdsk</li>
		<li>format</li>
	</ul>
</section>

<?php include "footer.php"; ?>