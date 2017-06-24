<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	try {
		$servidor = "10.1.1.254";
		$usuario = "1234";
		$senha = "1234";
		$banco = "1234";
		$con = new PDO ( "mysql:host=$servidor;dbname=$banco;charset=utf8",$usuario,$senha );
	} catch ( PDOException $e ) {
		echo "Erro ao conectar: " . $e->getMessage();
	}