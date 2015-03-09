<?php
include("config.php");
session_start();	
protectPage();


//var_dump($r_meses);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/favicon.ico">
<title>Painel de controle | PMQ Recap</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Font-Awesome core CSS -->
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link href="assets/css/dashboard.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-inverse navbar-custom navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand text-center center-block" href="">PMQ - <img src="assets/images/logo_recap.png" height="25"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
				<a href="logout.php"><i class="fa fa-sign-out"></i>&emsp;Sair</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2">
			<!--ul class="nav nav-sidebar">
				<li class="active"><a href="certificado.php" target="_blank">Certificado</a></li>
				<li><a href="#">Certificados 1</a></li>
				<li><a href="#">Certificados 2</a></li>
				<li><a href="#">Certificados 3</a></li>
			</ul-->
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1>	Programa de Monitoramento de Qualidade - Recap</h1>
				<p class="page-header text-uppercase">
					<?php echo "Olá <span class='text-success'>".$_SESSION['razao_social']."</span>, seja bem-vindo!"; ?>
				</p>
				<form name="mes"  action="certificado.php" method="post">
					<div class="row">
						<div class="col-lg-2">
							<select class="form-control">
								<?php meses($_SESSION['id_posto']);?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<input type="submit" name="submit_mes" class="btn btn-lg btn-success fa" value="Imprimir Certificado &#xf02f;">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script>
	function autoRefresh1(){ window.location.reload();}
	setInterval('autoRefresh1()', 60*1000*15); // this will reload page after every 15 minutes;
</script>
</body>
</html>
