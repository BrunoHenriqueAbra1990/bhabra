<?php

	date_default_timezone_set('America/Sao_Paulo');

	$servidor= "localhost";
	$usuario_servidor= "root";
	$senha= ""; 
	$db= "bruno";

	$con = mysqli_connect($servidor, $usuario_servidor, $senha, $db);
	//$con->query("SET NAMES 'utf8'");
	$con->query("SET character_set_connection=utf8");
	$con->query("SET character_set_client=utf8");
	$con->query("SET character_set_results=utf8");
