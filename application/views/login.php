<?php
defined('BASEPATH') OR exit ('no direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css"/>
</head>
<body>

<div class="uk-position-center">
	<div class="uk-card uk-card-primary uk-card-body">
		<h3 class="uk-card-title">Login</h3>
		<form method="POST" action="">
			<div class="uk-margin">
				<input class="uk-input" type="text" name="username" placeholder="Nom d'utilisateur">
			</div>
			<div class="uk-margin">
				<input class="uk-input" type="password" name="password" placeholder="Mot de passe">
			</div>
			<div class="uk-margin">
				<button class="uk-button uk-button-primary" type="submit">Se connecter</button>
			</div>
		</form>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
</body>
</html>
