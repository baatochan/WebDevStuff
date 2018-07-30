<?php
include("connect.php");

if ($_GET['name']) {
  $query = mysql_query("select * from shortlinks WHERE name = '".$_GET['name']."'");
  $rekord = mysql_fetch_array($query);
  $isRekord = false;
  if ($rekord != null) {
    $isRekord = true;
  }
}
?>

<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Add short link - bartoszka1996</title>
		<!--<link href="favicon.ico" rel="shortcut icon" type="image/ico">-->
		<link href="arkusz_podstawowy.css" rel="stylesheet" type="text/css">

    <?php
    if($isRekord){
      echo '<meta http-equiv="refresh" content="0; url='.$rekord[2].'">';
    }
    ?>
	</head>
	<body>
		<div id="page" class="dodaj_usun">
      <div>
        <h1 style="text-align: center;">Huh? Wut are you looking for?</h1>
            <?php
            if($isRekord){
              echo '<p><a href="'.$rekord[2].'">Click here</a></p>';
            }
            ?>
      </div>
			<footer>
				<p>~~Designed by <a href="https://plus.google.com/113232252744106953426?rel=author">bartoszka1996</a></p>
			</footer>
		</div>
	</body>
</html>
