<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Login | PMQ Recap</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/signin.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="drop">
<div class="container">
	<div class="text-center"><img src="assets/images/logo_recap.png"></div>
	<div class="form-signin">
		<form role="form" name="login" action="validate.php" method='POST' id="login">
			<h4 class="form-signin-heading text-default text-center">Associado, acesse com o CNPJ do Posto participante para emissão de seu certificado PMQ</h4>
			<input type="text" name="cnpj" id="cnpj" class="form-control cnpj" autocomplete="off" maxlength="18" placeholder="CNPJ" required title="Preenchimento obrigatório!" autofocus>
			<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" maxlength="14" required>
			<p class="text-center"><a href="primeiro-acesso.php" class="text-default"><strong>Primeiro Acesso?</strong></a></p>
			<input class="btn btn-lg btn-pmq text-default btn-block" name="submit" id="submit" type="submit" value="Entrar">
		</form>
	</div>
</div>
<!-- /container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script>
	function autoRefresh1(){ window.location.reload();}
	setInterval('autoRefresh1()', 60*1000*5); // this will reload page after every 15 minutes;
</script>
</body>
</html>