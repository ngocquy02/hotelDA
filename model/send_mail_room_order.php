 <?php

 require_once('../admin/include/config.php');
  require_once('../admin/include/room_db.php');
  require_once('../admin/include/get_list.php');
  require_once('../admin/include/customer_db.php');
  require_once('../admin/link.php');
  $max_id= get_room_order_max_id();
  $room=get_room($max_id['room_id']);
  $customer=get_customer_id($max_id['customer_id']);
  $city=get_city_id($customer['city_id']);
$date_order=date('d/m/Y',strtotime($max_id['date_order'] ));
$date_check_in=date('d/m/Y',strtotime($max_id['date_check_in'] ));
$date_checkout=date('d/m/Y',strtotime($max_id['date_checkout'] ));
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
$message = Swift_Message::newInstance('Thông tin đặt phòng')
  ->setFrom(array('quykrb159@gmail.com' => 'BlueRiver'))
  ->setTo(array($customer['email'], $customer['email'] => $customer['email']))
  ->setBody("Tên phòng: ".$room['name']." - "."Tổng tiền phòng: ".$max_id['price']." ( VNĐ )"." - "."Ngày đặt: ".$date_order." - "."Ngày đến: ".$date_check_in." - "."Ngày đi: ".$date_checkout)
  ;

// Send the message
$result = $mailer->send($message);
header ("Location:". $option['link']."/controller/notification.php");