<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Naslovnica</a></li>
		<li><a href="index.php?menu=2">Vijesti</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=4">Info</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Registarcija</a></li>
			<li><a href="index.php?menu=6">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="signout.php">Odjava</a></li>';
		}
		print '
	</ul>';
?>