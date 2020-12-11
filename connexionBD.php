<?php
	try{
		$bdd= new PDO('mysql:host=localhost; dbname=petcare-1; charset=UTF8',"root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(exception $ex){
		die("ERREUR:".$ex->getMessage());
	}
?>