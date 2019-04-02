<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/login.css">

</head>
<body>
	<div class="header-bar">

		<?php

			$page = $pages->get('/');
			$home = $page->HttpUrl();
		?>

		<img src="<?php echo $config->urls->assets?>imagens/logo.png" width="45px" height="45px">
		<a href="<?php $home ?>">Bruno's site</a>
	</div>
	<?php echo $home ?>
	<div id="card">
		<label id="card-header">Login</label>
		
		<div id="card-content">
			<input class="card-input" type="text" name="login" placeholder="E-mail">

			<input class="card-input" type="password" name="senha" placeholder="Senha">

			<button class="btn-submit" type="submit">Entrar</button>
		</div>
	</div>

</body>
</html>