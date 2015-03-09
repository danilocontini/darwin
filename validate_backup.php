<?php
include("conexao.class.php");

$conn = Conexao::getInstance();

if(isset($_REQUEST["login"])){
	$consulta = $conn->prepare("SELECT * FROM login WHERE cnpj=:cnpj AND senha=:senha");
	
	$consulta->bindParam(":cnpj", $_POST["cnpj"], PDO::PARAM_STR);
    $consulta->bindParam(":senha", $_POST["senha"], PDO::PARAM_STR);
    $consulta->execute();
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);
	$consulta = null;
	
	if(!empty($linha)){
		session_start();
		$dados = $conn->prepare("SELECT * FROM posto INNER JOIN email ON posto.id_posto=email.id_posto WHERE posto.id_posto=:id_posto");
		$dados->bindParam(":id_posto", $linha['id_posto'], PDO::PARAM_STR);
		$dados->execute();
		$resultado = $dados->fetch(PDO::FETCH_ASSOC);
		$dados = null;
		
		$_SESSION["id_posto"] = $linha["id_posto"];
		$_SESSION["cnpj"] = $linha["cnpj"];
		$_SESSION["razao_social"] = $resultado["razao_social"];
		header("Location: dashboard.php");
   
	}else{
		echo "<script>alert(‘Login Falhou’);</script>";
	}
}
?>