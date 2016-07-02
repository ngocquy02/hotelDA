 <?php
 // require_once 'vendor/autoload.php';
 require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
  ->setUsername('quykrb159@gmail.com')
  ->setPassword('241546874')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);
// $mailer->setContentType("text/html");
// Create a message
$message = Swift_Message::newInstance('Chúc mừng bạn đã đăng kí thành công')
->setContentType("text/html")
  ->setFrom(array('quykrb159@gmail.com' => 'John Doe'))
  ->setTo(array('nguyenngocquy020196@gmail.com', 'nguyenngocquy020196@gmail.com' => 'A name'))
  ->setBody()

;

// Send the message
$result = $mailer->send($message);


?>