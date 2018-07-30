<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Add short link - bartoszka1996</title>
		<!--<link href="favicon.ico" rel="shortcut icon" type="image/ico">-->
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="page" class="dodaj_usun">
			<?php
				include("connect.php");
				if($_POST){
					$haslo = $_POST['pass'];
					if($haslo == $pass){
						echo '<form method="post"><p><label for="nazwa">Short name: </label><input type="text" name="nazwa"></p><p>Short link in form of http://bartoszka1996.cba.pl/short/?name=YOURSHORTLINK</p><p><label for="adres">Link: </label><input type="text" name="adres"><input type="hidden" name="pass" value="xxx"></p><input type="hidden" name="pass" value="xxx"><p><input type="submit" value="Dodaj"></p></form>';
						$spr = $_POST['nazwa'];
						if($spr != NULL) {
								$query = mysql_query("INSERT INTO shortlinks(name, address) values ('".$_POST['nazwa']."', '".$_POST['adres']."')");
								echo '<p>Short link has been created! <a href="add.php">Reload</a></p>';


						}
					}
					else {
						echo '<p class="zle_haslo">Podałeś złe hasło!</p>';
						echo '<form id="panel" name="panel_login" method="POST"><label for="pass">Podaj hasło:</label><input type="password" id="pass" name="pass" maxlength="10"><input type="submit" value="Zaloguj"></form>';
					}
				}
				else {
					echo '<form id="panel" name="panel_login" method="POST"><label for="pass">Podaj hasło:</label><input type="password" id="pass" name="pass" maxlength="10"><input type="submit" value="Zaloguj"></form>';
				}
			?>
			<footer>
				<p>~~Designed by <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a></p>
			</footer>
		</div>
	</body>
</html>
