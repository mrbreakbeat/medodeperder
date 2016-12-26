<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun/vendor/autoload.php';
use Mailgun\Mailgun;

include 'mailgun-settings.php';

//$name = $_POST['name'];
$email = $_POST['email'];
//$message = $_POST['message'];

// Update in version 1.1 - added validation to stop blank emails
if ($email){
    # Instantiate the client.
    $mgClient = new Mailgun($mailgunKey);
    $domain = $mailgunDomain;

    # Make the call to the client.
    $result = $mgClient->sendMessage("$domain",
                      array('from'    => "Contato do site <sergio.silva.unb@$mailgunDomain>",
                            'to'      => $yourEmail,
                            'subject' => 'Contato feito pelo site',
                            'html'    => 'Ola!,<br><br>, alguem chamado <br><br>com o e-mail -'.$email.' <br><br>Enviou a seguinte mensagem do website da velum.:<br><br>'));


    $result = $mgClient->sendMessage("$domain",
                      array('from'    => "$fromName <sergio.silva.unb@$mailgunDomain>",
                            'to'      => $email,
                            'html'    => "Olá $name,<br><br>".$thankYouMsg));
}
