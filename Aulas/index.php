<?php

require "vendor/autoload.php";

interface EmailInterface
{
    public function send();
}

class Swift implements EmailInterface
{
    public function send(){
        return "enviando email com o swift";
    }
}


class Mailer implements EmailInterface
{
    public function send()
    {
        return "enviando email com o Mailer";
    }
}

class SendEmail{
    private $email;

    public function __construct(EmailInterface $email)
    {
        $this->email = $email;
    }

    public function send(){
        return $this->email->send();
    }
}

$email = new SendEmail(new Swift);
echo $email->send();