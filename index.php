<?php
	include "sys.php";
	$title = $cmd . $home;
	include "header.php";
	include "nav-main.php";
?>

<h2><i class="fa fa-home"></i> <?=$home?></h2>
<hr>

<?php if ($lang == "en") { ?>
<h3>Let's learn the Command-Line Interface!</h3>
<?php } else { ?>
<h3>Zacznijmy naukę wiersza poleceń!</h3>
<?php } ?>

<!-- the open source operating system with clear command-line interface
classic command prompt for the most popular operating system
simple & ancient operating system only with command-line interface
modern & advanced command-line interpreter -->

<section>
	<h4><i class="fab fa-linux"></i> GNU Linux (BASH)</h4>
<?php if ($lang == "en") { ?>
	<p>
		GNU Linux is an operating system. In most of the distributions (e.g. <a target="_blank" href="https://ubuntu.com/">Ubuntu</a>, <a target="_blank" href="https://www.linuxmint.com/">Linux Mint</a>), we can use it with CLI (Command-Line Interface) and GUI (Graphical User Interface).
	</p>
	<p>
		If we are just using a GUI, we can use a terminal emulator (pseudoterminal) or go to the CLI.
	</p>
	<p>
		To enter to the CLI (not terminal emulator), press <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Instead of <kbd>F2</kbd> can be <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
	</p>
	<p>
		If you want to go back to the GUI, press <kbd>Alt</kbd> + <kbd>F1</kbd>. Instead of <kbd>F1</kbd> can be <kbd>F6</kbd>, <kbd>F7</kbd> or other function key. You can also quickly switch between instances of the command line with <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> or <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
	</p>
<?php } else { ?>
	<p>
		GNU Linux jest systemem operacyjnym. W większości dystrybucji (np. <a target="_blank" href="https://ubuntu.com/">Ubuntu</a>, <a target="_blank" href="https://www.linuxmint.com/">Linux Mint</a>), możemy korzystać z niego za pomocą wiersza poleceń (CLI - Command-Line Interface) jak i środowiska graficznego (GUI - Graphical User Interface).
	</p>
	<p>
		Jeśli właśnie korzystamy ze środowiska graficznego, możemy użyć emulatora terminala (pseudoterminala) lub przejść do wiersza poleceń.
	</p>
	<p>
		Aby przejść do wiersza poleceń (nie emulatora terminala), wciśnij <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> lub <kbd>F1</kbd>.
	</p>
	<p>
		Jeśli chcesz z powrotem wrócić do środowiska graficznego, wciśnij <kbd>Alt</kbd> + <kbd>F1</kbd>. Zamiast <kbd>F1</kbd> może być <kbd>F6</kbd>, <kbd>F7</kbd> lub inny klawisz funkcyjny. Możemy również szybko przełączać się pomiędzy kolejnymi instancjami wiersza poleceń za pomocą <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> lub <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
	</p>
<?php } ?>

	<?php include "screenshots-txt/linux-intro.html"; ?>




</section>
<hr>
<section>
	<h4><i class="fab fa-windows"></i> Windows cmd / DOS</h4>
<?php if ($lang == "en") { ?>
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
<?php } ?>

	<?php include "screenshots-txt/windows-cmd-dir.html"; ?>

<?php if ($lang == "en") { ?>
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
<?php } ?>

	<?php include "screenshots-txt/dos-freedos-start-ver.html"; ?>

	<div class="text-center">
		<a class="button" target="_blank" href="js-dos.html">Run js-dos (DOSBox)</a>
		<a class="button" target="_blank" href="https://kargol92.github.io/webdos">Run WebDOS (it's just a toy)</a>
	</div>

</section>

<hr>

<section>
	<h4><i class="fa fa-terminal"></i> PowerShell</h4>

	<?php include "screenshots-txt/powershell-get-childitem.html"; ?>

</section>


<?php include "footer.php"; ?>