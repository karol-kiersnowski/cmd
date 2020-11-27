<?php
	include "sys.php";
	$title = $cmd . $home;
	include "header.php";
	include "nav-main.php";
?>

<!-- <h2><i class="fa fa-home"></i> <?=$home?></h2>
<hr>
-->

<section id="index" class="text-center">
	<h2>
	<?php if ($lang == "en") { ?>
		Let's learn the Command-Line Interface!
	<?php } else { ?>
		Zacznijmy naukę wiersza poleceń!
	<?php } ?>
	</h2>
	<article>
		<h3><i class="fab fa-linux"></i> GNU Linux (BASH)</h3>
		<h4>
		<?php if ($lang == "en") { ?>
			the open source operating system with advanced command-line interface
		<?php } else { ?>
			system operacyjny o otwartym kodzie źródłowym wraz z zaawansowanym interfejsem wiersza poleceń
		<?php } ?>
		</h4>

		<?php include "screenshots-txt/linux-intro.html"; ?>

		<a class="button" href="linux.php<?=$suffix?>">Learn Linux</a>

	</article>

	<hr>

	<article>
		<h3><i class="fab fa-windows"></i> Windows command prompt</h3>

		<h4>
	<?php if ($lang == "en") { ?>
		classic command prompt for the most popular operating system
	<?php } else { ?>
		klasyczny wiersz poleceń dla najpopularniejszego systemu operacyjnego
	<?php } ?>
		</h4>

		<?php include "screenshots-txt/windows-cmd-dir.html"; ?>

		<a class="button" href="win-dos.php<?=$suffix?>">Learn Windows cmd</a>

<!-- <?php if ($lang == "en") { ?>
	<p>
		Windows is an operating system. Unlike GNU Linux, Windows does not have a CLI mode that works without a GUI. But we can use the command interpreter in the GUI.
	</p>
	<p>
		Cmd.exe is a command interpreter in Windows. Cmd.exe is derived from COMMAND.COM - a MS-DOS interpreter. Because of this, many cmd.exe commands are compatible with MS-DOS commands.
	</p>
	<p>
		To run cmd.exe, click the Start Menu and start typing <em>cmd.exe</em> or go: Start > Programs > System tools > Command prompt.
	</p>
<?php } else { ?>
	<p>
		Windows jest systemem operacyjnym. W przeciwieństwie do Linux'a, Windows nie posiada interfejsu wiersza poleceń, który działa bez interfejsu graficznego. Możemy natomiast korzystać z interpretera poleceń w środowisku graficznym.
	</p>
	<p>
		Cmd.exe jest interpreterem poleceń w systemie Windows. Cmd.exe wywodzi się z COMMAND.COM - interpretera MS-DOS. Z tego powodu, wiele poleceń cmd.exe jest kompatybilnych z komendami MS-DOS.
	</p>
	<p>
		Aby uruchomić wiersz poleceń cmd.exe, wciśnij start i zacznij wpisywać <em>cmd.exe</em> lub wybierz: Start > Programy > Narzędzia systemowe > Wiersz polecenia.
	</p>
<?php } ?> -->




<!-- <?php if ($lang == "en") { ?>
	<p>
		MS-DOS / PC-DOS (Disk Operating System) was popular in the 80s and early 90s. It doesn't have GUI, so we can use DOS only in Command-Line Interface. Nowadays, DOS is practically not used as the primary operating system.
	</p>
	<p>
		On modern computers, we will not run the original DOS versions (MS-DOS / PC-DOS). However, we can run <a target="_blank" href="http://freedos.org/">FreeDOS</a> - a DOS compatible operating system. There are also DOS emulators. The most popular of them is <a target="_blank" href="https://www.dosbox.com">DOSBox</a>.
	</p>
<?php } else { ?>
	<p>
		MS-DOS / PC-DOS (Disk Operating System) był popularnym systemem operacyjnym w latach 80-tych i na początku lat 90-tych. Nie posiadał interfejsu graficznego (GUI), więc mogliśmy korzystać z niego jedynie w trybie tekstowym. W dzisiejszych czasach DOS nie jest praktycznie używany jako podstawowy system operacyjny.
	</p>
	<p>
		Na współczesnych komputerach nie uruchomimy oryginalnych wersji DOS'a (MS-DOS / PC-DOS). Możemy jednak uruchomić <a target="_blank" href="http://freedos.org/">FreeDOS</a> - system operacyjny kompatybilny z DOS'em. Poza tym istnieją emulatory DOS-a. Najpopularniejszym z nich jest <a target="_blank" href="https://www.dosbox.com">DOSBox</a>.
	</p>
<?php } ?> -->
	</article>

	<hr>

	<article>

		<h3>DOS</h3>
		<h4>
		<?php if ($lang == "en") { ?>
			simple & text-base operating system for PC
		<?php } else { ?>
			prosty & tekstowy system operacyjny dla komputerów osobistych (PC)
		<?php } ?>
		</h4>

		

		<?php include "screenshots-txt/dos-freedos-start-ver.html"; ?>

		<div>
			<a class="button" href="win-dos.php<?=$suffix?>">Learn DOS</a>
			<a class="button" target="_blank" href="js-dos.html">Run js-dos (DOSBox)</a>
			<a class="button" target="_blank" href="https://kargol92.github.io/webdos">Run WebDOS (it's just a toy)</a>
		</div>

	</article>

	<hr>

	<article>
		<h3><i class="fa fa-terminal"></i> PowerShell</h3>

		<h4>
		<?php if ($lang == "en") { ?>
			modern & advanced command-line interpreter
		<?php } else { ?>
			nowoczesny i zaawansowany interpreter wiersza poleceń
		<?php } ?>
		</h4>

		<?php include "screenshots-txt/powershell-get-childitem.html"; ?>

		<a class="button" href="powershell.php<?=$suffix?>">Learn PowerShell</a>

	</article>

</section>

<?php include "footer.php"; ?>