<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>TP_Blog</title>
	<link rel="stylesheet" href="TP_blog_CSS.css">
	<script src="script.js"></script>
</head>
<body>
<h1>Blog du futur</h1>
<header>
	<div id="header">
	
		<?php
			include("TP_blog_cible.php");	//Appel du fichier cible
		?>	
	
	</div>

</header>


<footer>

<div>
<form action="Ecriture_Texte.php" method="POST">	<!-- renvoi vers une autre page contenant le formulaire -->
<input type="submit" value="Ecrire_Message" />
</form>
</div>

<p>
RENCUREL Pierre, F2A
</p>
</footer>
</body>
</html>