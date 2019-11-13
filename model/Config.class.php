<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja/loja";
	const SITE_NOME = "Style Unique";
	const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";
	const BD_LIMIT_POR_PAG = 6;

	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "root",
		  BD_BANCO = "Style Unique",
		  BD_PREFIX = "st_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "ivanhonemann09@gmail.com";
	const EMAIL_NOME = "Contato Style Unique";
	const EMAIL_SENHA = "Iv96263812an";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "ivanhonemann09@gmail.com";



}
 ?>

