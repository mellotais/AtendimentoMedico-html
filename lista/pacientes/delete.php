<?php
	
	include_once('connection.php');
 
	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM members WHERE id = '".$_GET['id']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Pessoa deletada com sucesso!' : 'Algo deu errado. Não é possível excluir membro';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
 
		//close connection
		$database->close();
 
	}
	else{
		$_SESSION['message'] = 'Selecione o membro para excluir primeiro';
	}
 
	header('location: /amedico/lista/inicial.php');
 ?>