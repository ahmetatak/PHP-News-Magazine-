<?phpinfo@ahmetatak.netinfo@ahmetatak.netinfo@ahmetatak.net
/* 
 *  ..:: ENGLISH ::..
 *  © 2017 Aljazarisoft.com all rights reserved. Please Read "Licence Agreement & Terms And Conditions" carefully before using this app!
 *  You agree to the Licence Agreement & Terms and Conditions by using this app
 *  Programmed by Ahmet ATAK <info@ahmetatak.net>, <info@ahmetatak.net> 
 *  Powered by Aljazarisoft.com | Software & Design <info@aljazarisoft.com>
 *  ..:: Türkçe ::..
 *  © 2017 Aljazarisoft.com her hakkı saklıdır. Bu uygulamayı kullanmadan önce lütfen Lisans Sözleşmesi'ni ve koşulları dikkatle okuyun!
 *  Bu uygulamayı kullanarak Lisans Sözleşmesi'ni ve koşulları kabul etmiş olursunuz.
 *  Ahmet ATAK tarafından programlandı <info@ahmetatak.net>, <info@ahmetatak.net> 
 *  Aljazarisoft.com [El-Cezerî yazılım] tarafından desteklenmektedir! | Yazılım & Tasarım <info@aljazarisoft.com>
 */

class Mailer {

private $host;

private $port;

private $user;

private $pass;

private $repmail; 



    

    

    public function __construct($from='no-reply@vukuat.com',$fromname='Vukuat.Com',$to,$name='',$subject='',$message='') {

        



$model = load::model("cpanel/ayarlar");

 $data["mail"] = $model->ayarver();

if(is_array( $data["mail"])){

foreach ( $data["mail"] as $key => $smtp) {

    $host=$smtp["mailhost"];

    $port=$smtp["mailport"];

    $user=$smtp["mailuser"];

    $pass=$smtp["mailpassword"];

    $repmail=$smtp["repmail"];

 

}

} 

require_once('phpmailer/class.phpmailer.php');

require_once('phpmailer/class.smtp.php');

$emailTo = "info@ahmetatak.net";

 $emailAccount = $user;

 $myPassword = $pass;



$mail = new PHPMailer();

$mail->CharSet = "UTF-8";

 $mail->IsSMTP();

 $mail->SMTPDebug = 1; // 1 tells it to display SMTP errors and messages, 0 turns off all errors and messages, 2 prints messages only.

 $mail->Host = $host;

 $mail->SMTPAuth = false;

$mail->SMTPSecure = "SSL";

 $mail->Port = $port;





$mail->Username = $emailAccount;

 $mail->Password = $myPassword;



$mail->From = $from;

 $mail->FromName = $fromname;

 $mail->AddAddress($to, $name);

 $mail->Subject = $subject;



 $mail->Body = $message;

  $mail->IsHTML(true); 



if ($mail->Send() == true) {

return true;

 }

else {

// echo"Mesaj göndelilemedi çünkü :" . $mail->ErrorInfo;

    return false;

 }



    }

    

    

}





