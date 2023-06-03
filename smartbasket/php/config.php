<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

// ***SMTP*** //
		  require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smtp.timeweb.ru';
	 const LOGIN = 'craft.21.play@gmail.com';
	  const PASS = 'patapon2023';
		  const PORT = '465';
//***/SMTP***//
   
    const SENDER = 'craft.21.play@gmail.com';
    const CATCHER = 'bossbogdan2003@mail.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
