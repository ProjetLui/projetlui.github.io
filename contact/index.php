<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

	<title>Projet LUI - Leçons d'Utilisation d'Internet</title>
	</title>

	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="theme-color" content="#0D6554">

	<!-- Style Sheets -->
	<link rel="stylesheet" type="text/css" media="all" href="../css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="../css/animate.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Scripts -->
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/wow.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript" language="javascript" src="../js/trunk.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>

<body>

	<div class="container">
		<div class="header">
			<div class="content-inner">
				<header class="slide">
					<ul id="navToggle" class="burger slide">
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<a id="logo" href="../index.html"><img class="animated jello" src="../img/logo.svg" /></a>
				</header>

				<nav class="slide">
					<ul>
						<li class="menu-resp">MENU</li>
						<li><a href="../index.html"><i class="material-icons">home</i>Accueil</a></li>
						<li><a href="../videos/index.html"><i class="material-icons">&#xE039;</i>Vidéos</a></li>
						<li><a href="../affiches/index.html"><i class="material-icons">description</i>Affiches</a></li>
						<li><a href="../equipe/index.html"><i class="material-icons">&#xE8D3;</i>Equipe</a></li>
						<li><a href="" class="active"><i class="material-icons">email</i>Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="content slide">
			<div class="responsive">

				<div class="contact">
					<div class="content-inner">
						<h2>Nous <b>contacter</b></h2>

						<p>Vous avez envie de papoter avec nous? N'hésitez pas à nous envoyer un email et nous essayerons de vous répondre rapidement.</p>
										
										<?php if(array_key_exists('errors', $_SESSION)): ?>
        			<div class="alert alert-danger">
        				<?= implode('<br>', $_SESSION['errors']); ?>
        			</div>
        			<?php unset($_SESSION['errors']); endif; ?>

        			<?php if(array_key_exists('success', $_SESSION)): ?>
        			<div class="alert alert-success">
        				<p><i class="fa fa-check"></i> Votre email a bien été envoyé...</p>
        			</div>
        			<?php unset($_SESSION['success']); endif; ?>

										<form action="contact.php" class="animated flipInX" method="POST">

											<div class="field nom-box">
												<input name="nom" type="text" id="nom" placeholder="QUI ETES-VOUS ?" required value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''; ?>"/>
												<label for="nom">Nom</label>
											</div>

											<div class="field email-box">
												<input name="email" type="email" id="email" placeholder="EXEMPLE@EMAIL.COM" required value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"/>
												<label for="email">Email</label>
											</div>

											<div class="field objet-box">
												<input name="objet" type="text" id="objet" placeholder="QUOI ?" />
												<label for="objet">Objet</label>
											</div>

											<div class="field msg-box">
												<textarea name="message" id="message" rows="4" placeholder="VOTRE MESSAGE..." required value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>"/></textarea>
												<label for="message">Msg</label>
											</div>

											<input class="button" type="submit" value="Envoyer" />
										</form>
										<h2>NOUS <b>RENDRE VISITE</b></h2>

										<p>Vous voulez venir à notre rencontre? N'hésitez pas à passer nous voir à l'université.</p>

					</div>
				</div>

				<div id="google-container"></div>
				<div id="cd-zoom-in"></div>
				<div id="cd-zoom-out"></div>

				<div class="footer">
					<div class="content-inner">
						<footer>
							<p>Création LUI - Tous droits réservés 2016</p>
						</footer>
					</div>
				</div>

			</div>
		</div>
	</div>


</body>

</html>


<?php
	unset($_SESSION['inputs']);
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
?>