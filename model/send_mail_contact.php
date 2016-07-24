 <?php
 // require_once 'vendor/autoload.php';
 require_once '../vendor/swiftmailer/swiftmailer/lib/swift_required.php';


// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
  ->setUsername('quykrb159@gmail.com')
  ->setPassword('0914168080')
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

// Create a message
$message = Swift_Message::newInstance('Liên hệ khách hàng')
  ->setFrom(array('quykrb159@gmail.com' => 'BlueRiver'))
  ->setTo(array('nguyenngocquy020196@gmail.com', 'nguyenngocquy020196@gmail.com' => 'BlueRiver'))
  ->setBody("TÊN: ".$_POST['name']."-."."Điện Thoại: ".$_POST['phone']."-"."Email: ".$_POST['email']."-"."Nội dung: ".$_POST['description'])
  ;

// Send the message
$result = $mailer->send($message);
header ("Location:/hotelDA/controller/success.php ");