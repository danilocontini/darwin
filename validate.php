<?php
include("conexao.class.php");

$conn = Conexao::getInstance();


/*if (is_ajax()) {
	
	if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
		
		$action = $_POST["action"];
		
		switch($action) { //Switch case for value of action
			
			case "test": test_function(); break;
		
		}
	
	}

}

//Function to check if the request is an AJAX request
function is_ajax() {
	
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';

}

function test_function(){
	$return = $_POST;
	
	//Do what you need to do with the info. The following are some examples.
	//if ($return["favorite_beverage"] == ""){
	//  $return["favorite_beverage"] = "Coke";
	//}
	//$return["favorite_restaurant"] = "McDonald's";
	
	if(isset($return["submit"])){
		$return["cnpj"] = json_encode($return);
		echo json_encode($return);
		
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
			exit();
	   
		}else{
			echo "<script>alert(‘Login Falhou’);</script>";
			
		}
	}
	
	//$return["json"] = json_encode($return);
	//echo json_encode($return);
}*/



if(isset($_REQUEST["submit"])){
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
		exit();
   
	}else{
		echo "<script>alert(‘Login Falhou’);</script>";
		
	}
}

?>