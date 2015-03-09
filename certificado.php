<?php
	include("config.php");
	session_start();
	protectPage();
	
	$mesAno = explode('/',$_POST['mes']);
	$mes = $mesAno[0];
	$ano = $mesAno[1];
	
	$date = new DateTime();
	$date->setDate($ano, $mes, 1);
	//$date->format("F");
	//$date->modify("+1 day");
	//setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	//date_default_timezone_set('America/Sao_Paulo');
	
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION['razao_social']; ?></title>
<link href="assets/css/certificado.css" rel="stylesheet" />
</head>
<body>
<div id="container">
	<div class="bg"><img src="assets/images/background.jpg"></div>
	<h1 class="txt-center cert-<?php echo $ano; ?> arial fw900">certificado</h1>
    <div class="texto txt-center arial f17">
    	<p>Certificamos que o Posto <font class='fw700'><?php echo $_SESSION["razao_social"]; ?></font>, CNPJ <font class='fw700'><?php echo $_SESSION["cnpj"]; ?></font> faz parte do nosso Programa de Monitoramento da Qualidade - PMQ, que semanalmente analisa a qualidade de todos os seus combustíveis, e que no mês de <font class='fw700 uppercase'><?php echo strftime("%B", strtotime( '-1 month', $date->getTimestamp())); ?></font>, apresentou resultados* que atendem as especificações da Agência Nacional do Petróleo, Gás Natural e Biocombustíveis - ANP.</p>
    </div>
    <div id="sign">
        <img src="assets/images/sign.png" />
        <p class="arial f15 no-mrgn txt-right" >FLÁVIO MARTINI DE SOUZA CAMPOS</p>
        <p class="arial f12 no-mrgn disp-block txt-right">PRESIDENTE DO RECAP</p>
        <p class="arial f16 disp-block txt-right"><?php echo date("01/$mes/$ano"); ?></p>
        <p class="arial f12 mrgntop-75 txt-right">*Referentes às análises realizadas no mês de <font class='fw700 uppercase'><?php echo strftime("%B", strtotime( '-1 month', $date->getTimestamp())); ?></font>.</p>
    </div>
    <div class="qmr">
	<?php echo '<img src="assets/images/qmr'.$ano.'.png">'; ?>
    </div>
    <div class="recap">
		<div class="recap-bg"><img src="assets/images/recap-bg-<?php echo $ano; ?>.png"></div>
    	<span class="flt-right logo"><img src="assets/images/logo_recap.png" width="114" height="49" /></span>
		<p class="flt-right txt-right f10 arial">Sindicato do Comércio Varejista de Derivados de Petróleo de Campinas e Região</p>
    </div>
</div>
<script>
	function autoRefresh1(){ window.location.reload();}
	setInterval('autoRefresh1()', 60*1000); // this will reload page after every 15 secounds;

	//window.print();
</script>
</body>
</html>