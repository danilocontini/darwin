<?php
include("conexao.class.php");
session_start();
date_default_timezone_set('America/São Paulo');
setlocale(LC_TIME, "pt_BR");

//Meses que possui acesso
function meses($id_posto){
	
	$conn = Conexao::getInstance();
	$meses = $conn->prepare("SELECT data FROM permissao INNER JOIN posto ON posto.id_posto=permissao.id_posto WHERE permissao.status=1 AND posto.id_posto=:id_posto ORDER BY data ASC");
	$meses->bindParam(":id_posto", $id_posto, PDO::PARAM_STR);
	$meses->execute();
	$r_meses = $meses->fetchAll(PDO::FETCH_NAMED);
	$meses = null;
	
	//echo $id_posto;
	echo '<select class="form-control" name="mes">';			
	foreach ($r_meses as $l){
		foreach($l as $mes){
			echo '<option value="'.utf8_encode($mes).'">'.utf8_encode($mes).'</option>';
		}
	}
	echo '</select>';
	
};

//Protege página
function protectPage(){
	if(!isset($_SESSION["cnpj"])){
		header("Location: login.php");
		exit;
	}
};
function logout(){
	// Remove as variáveis da sessão (caso elas existam)
	if ($_SESSION['cnpj'] == true) {
		unset($_SESSION);
		session_destroy();
	}
	
	header('Location:login.php');
}

?>