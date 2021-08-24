

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v5.15/icons?d=gallery&p=2">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="palavras-chave,do,meu,site">
  <meta name="description" content="Descriçao do meu website">
   <meta charset="utf-8" />
</head>
<body>
	<div class="box-login">

		<?php
			$pdo = mysql::conectar();

		 ?>

		<h2>Faça seu Login</h2>
		<form>
			<input type="text" name="user" placeholder="Login..." required="">
			<input type="password" name="password" placeholder="Senha..." required="">
			<input type="submit" name="acao" value="logar">
		</form>
	</div><!--box-login-->

</body>
</html>