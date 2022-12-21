<?php

	include_once('connection.php');
 
	if(isset($_POST['add'])){
		$database = new Connectio();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$stmt = $db->prepare("INSERT INTO member (nome, sobrenome, email) VALUES (:nome, :sobrenome, :email)");
			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'] , ':sobrenome' => $_POST['sobrenome'] , ':email' => $_POST['email'])) ) ? 'Member added successfully' : 'Something went wrong. Cannot add member';	
 
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
 
		//close connection
		$database->close();
	}
 
	else{
		$_SESSION['message'] = 'Fill up add form first';
	}
 
	header('location: /amedico/lista/inicial.php');
 ?>