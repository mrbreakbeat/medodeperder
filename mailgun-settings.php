<?php

// Enter your Mailgun API key here
/*
|--------------------------------------------------------------------------
| Mailgun Settings
|--------------------------------------------------------------------------
|
| Register for Free on Mailgun.com for sending transactional emails.
| Mailgun is powerful API email service by rackspace.
| It is easy to use. Just signup on mailgun.com and
| follow steps to get API key & domain name.
|
*/

$mailgunKey = 'key-fe2c5b046d9fdd70458fc8cb85d4929a'; //Will be like key-........
$mailgunDomain = 'sandboxd293701160924c60b1dc9aa5a702f823.mailgun.org'; //You can use sandbox domain provided by mailgun


// Your details to receive email from end-user
$yourEmail = 'sergio.silva.unb@gmail.com'; //Chage this email id to yours where you want to receive email


// Following settings will be used to send email to end-user who submits contact us form.
// We will be sending 'Thank You' email to end-user.
$fromName = 'Pare de Perder Produtos por Motivos de Temperatura'; //Sender's Name
$subject = 'Obrigado pelo Contato';
$thankYouMsg = 'Obrigado por sua mensagem, entraremos em contato em breve!'; //Your thank you message
