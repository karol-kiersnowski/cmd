<?php
	include "sys.php";
	$title = $cmd . $about;
	include "header.php";
	include "nav-main.php";
	include "nav-dropdowns.php";
?>

<h2><i class="fa fa-info-circle"></i> <?=$about?></h2>
<hr>
<section>
	<h3><i class="far fa-lightbulb"></i> inspiration by the form of the website</h3>
	<p>
		I learned HTML, CSS, Javascript and PHP using <a target="_blank" href="https://www.w3schools.com">W3Schools</a> among others. I was inspired by the simplicity of explaining the issues + examples in each example.
	</p>
	<p>
		Everywhere I looked for commands, they were listed alphabetically. A better way for me is to group commands by category.
	</p>
	<p>
		Combining the interest in the Command-Line Interface (Linux, DOS, Windows command prompt & PowerShell) with the benefits of learning at w3schools, I decided to create a website for learning the CLI.
	</p>

	<h3><i class="far fa-thumbs-up"></i> thanks to authors of the</h3>
	<ul style="list-style-type: disc;">
		<li>
			<a target="_blank" href="https://fontawesome.com">Font Awesome</a> - icons
		</li>
		<li>
			<a target="_blank" href="https://fonts.google.com/specimen/Syne+Mono#standard-styles">Syne Mono</a> - a font family
		</li>
		<li>
			<a target="_blank" href="http://sourceforge.net/projects/dosega">DOSEGA</a> - a font family
		</li>
		<li>
			<a target="_blank" href="https://www.apachefriends.org/index.html">XAMPP</a> - a web server solution stack
		</li>
		<li>
			<a target="_blank" href="https://www.sublimetext.com">Sublime Text</a> - a text editor
		</li>
		<li>
			<a target="_blank" href="https://www.dosbox.com">DOSBox</a> - an x86 emulator with DOS
		</li>
		<li>
			<a target="_blank" href="https://js-dos.com">JS-DOS</a> - a DOSBox port for websites
		</li>
		<li>
			<a target="_blank" href="https://www.w3schools.com">W3Schools</a> - web tutorials
		</li>
	</ul>

	<h3><i class="fa fa-code-branch"></i> fork me</h3>
	<p>
		It is an open source project with the GNU GPL license. If you want you can fork this website.
	</p>
	<p>Fork me on <a target="_blank" href="https://github.com/karol-kiersnowski/cmd">GitHub</a></p>

	<h3><i class="fa fa-user-edit"></i> author</h3>
	<p>kargol92</p>

	<h3><i class="far fa-sticky-note"></i> license</h3>
	<p>
		<a target="_blank" href="https://github.com/karol-kiersnowski/cmd/blob/master/LICENSE">
			GNU General Public License v3.0
		</a>
	</p>
</section>

<?php include "footer.php"; ?>
