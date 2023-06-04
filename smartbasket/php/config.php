<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

// ***SMTP*** //
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
    const HOST = 'smtp.gmail.com';
    const LOGIN = 'craft.21.play@gmail.com';
    const PASS = 'sonic202307032003';
    const PORT = '465';
//***/SMTP***//
   
    const SENDER = 'craft.21.play@gmail.com';
   const CATCHER = 'craft.21.play@gmail.com';
   const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
