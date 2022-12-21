<?php
	session_start();
	include_once('connection.php');
 
	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$acao = $_POST['acao'];
 
			$sql = "UPDATE members SET nome = '$nome', sobrenome = '$sobrenome', acao = '$acao' WHERE id = '$id'";
		
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Membro atualizado com sucesso' : 'Algo deu errado. Não é possível atualizar o membro';
 
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
 
		//close connection
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Preencher o formulário de edição primeiro';
	}
 
	header('location: /amedico/lista/inicial.php');
 ?>