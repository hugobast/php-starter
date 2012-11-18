<?php

  date_default_timezone_set('America/New_York');

  require 'lib/PHPMailer/class.phpmailer.php';

  // Congiguration
  define("SMTP_HOST", "smtp.example.com");
  define("SMTP_USERNAME", "postmaster@example.com");
  define("SMTP_PASSWORD", "p@ss+w0rd!");
  define("EMAIL_SUBJECT", "Contact - Message via example.com")

  class Mailer {
    function __construct() {
      $this->mailer = new PHPMailer();
      $this->mailer->IsSMTP();
      $this->mailer->SMTPAuth = true;
      $this->mailer->Host = SMTP_HOST;
      $this->mailer->Username = SMTP_USERNAME;
      $this->mailer->Password = SMTP_PASSWORD;
    }

    function send($from, $fromName, $to, $message) {
      $this->mailer->From = $from;
      $this->mailer->FromName = $fromName;
      $this->mailer->AddAddress($to);
      $this->mailer->Subject = EMAIL_SUBJECT;

      $body = <<<BODY
      Message de: $fromName
      courriel: $from

      ============================

      Message:

      $message

BODY;

      $this->mailer->Body = $body;

      if(!$this->mailer->Send()) {
        return false;
      } else {
        return true;
      }
    }
  }

  $mailer = new Mailer();