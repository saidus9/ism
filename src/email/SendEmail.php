<?php
Acme\Email;

class SendEmail
{
  public static function sendEmail($to, $subjec, $message, $from = "")
  {
    if (strlen($from) == 0)
      $from = getenv('SMTP_FROM');

      $transport = \Swift_SmtpTransport::newInstance(getenv('SMTP_HOST'), getenv('SMTP_PORT'))
          ->setUsername(getenv('SMTP_USER'))
          ->setPassword(getenv('SMTP_PASS'));

      $mailer = \Swift_Mailer::newInstance($transport);

      $message = \Swift_Message::newInstance()
          ->setSubject($subjec)
          ->setFrom($from)
          ->setTo($to)
          ->setBody($message);

      $result = $mailer->send($message);
  }
}
