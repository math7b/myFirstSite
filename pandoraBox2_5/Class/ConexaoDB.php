<?php

    // arquivo de configuração contendo as credenciais do banco de dados
    // esse arquivo será chamado através de include toda vez que for..
    // ..requisitado o acesso ao banco de dados. 
    define('BASE_URL', 'http://localhost/');
	define("DB",'mysql');
	define("DB_NAME","pandorabox2_5");
	define("DB_HOST","localhost");
	define('DB_USER', 'root');
	define('DB_PASS', '');

    define('DB_STRING', DB.':host='.DB_HOST.';dbname='.DB_NAME);
    
?>
