<?phpinfo@ahmetatak.netinfo@ahmetatak.net
/* 
 *  ..:: ENGLISH ::..
 *  © 2017 Aljazarisoft.com all rights reserved. Please Read "Licence Agreement & Terms And Conditions" carefully before using this app!
 *  You agree to the Licence Agreement & Terms and Conditions by using this app
 *  Programmed by Ahmet ATAK <info@ahmetatak.net>, <ahmet_atak@msn.com> 
 *  Powered by Aljazarisoft.com | Software & Design <info@aljazarisoft.com>
 *  ..:: Türkçe ::..
 *  © 2017 Aljazarisoft.com her hakkı saklıdır. Bu uygulamayı kullanmadan önce lütfen Lisans Sözleşmesi'ni ve koşulları dikkatle okuyun!
 *  Bu uygulamayı kullanarak Lisans Sözleşmesi'ni ve koşulları kabul etmiş olursunuz.
 *  Ahmet ATAK tarafından programlandı <info@ahmetatak.net>, <ahmet_atak@msn.com> 
 *  Aljazarisoft.com [El-Cezerî yazılım] tarafından desteklenmektedir! | Yazılım & Tasarım <info@aljazarisoft.com>
 */

Class Response {

    

 public static function danger($message){

        

        return '<div  class="alert alert-danger"><button type="button" class="close"  data-dismiss="alert" aria-hidden="true">&times;</button><i class="vukuat-icon-attention vt-2"></i> '. $message.'</div>';

    }

 public static function error($message,$goback){

      if (!isset($goback))

      {

    $onclick ='history.go(-1);';     

      }else{
          $onclick ='';
      }
          

 return '<div class="alert alert-danger"><button type="button" class="close" onClick="'.$onclick.'" data-dismiss="alert" aria-hidden="true">&times;</button><i class="vukuat-icon-error vt-2"></i> '. $message.'</div>';

        

         

      }

 public static function success($message){

        

        return '<div class="alert alert-success"><button type="button" class="close" onClick="history.go(-1);" data-dismiss="alert" aria-hidden="true">&times;</button><i class="vukuat-icon-ok"></i> '. $message.'</div>';

    }

 public static function warning($message,$goback){

       if($goback){

       $goback='onClick="history.go(-1);"';}

       elseif ($goback=="no") {

        $goback='';   

       } 

        return '<div class="alert alert-warning"><button type="button" class="close" '.$goback.' data-dismiss="alert" aria-hidden="true">&times;</button><i class=" vukuat-icon-warning-empty"> Uyarı !</i> '. $message.'</div>';

    } 

 public static function okay($message,$goback){

       if($goback){

       $goback='onClick="history.go(-1);"';}

       elseif ($goback=="no") {

        $goback='';   

       } 

        return '<div class="alert alert-success"><button type="button" class="close" '.$goback.' data-dismiss="alert" aria-hidden="true">&times;</button><i class="vukuat-icon-ok"> Tebrikler !</i> '. $message.'</div>';

    } 

 public static function sendmail($to, $from, $subject, $body) { 

    $message = "To je nějaký ukázkový text.\r\nTento text je na dalším řádku.";

$message = base64_encode($message);



// headers...

$headers = "";

$headers .= "From: $from\r\n";

$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$headers .= "Content-Transfer-Encoding: base64\r\n";

$headers .= "MIME-Version: 1.0";



mail($to,$subject, $body, $headers);

}



 public static function mailstyle(){

 echo '<style>

.mark {

  background-color: #fcf8e3;

  padding: .2em;

}

.text-left {

  text-align: left;

}

.text-right {

  text-align: right;

}

.text-center {

  text-align: center;

}

.text-justify {

  text-align: justify;

}

.text-nowrap {

  white-space: nowrap;

}

.text-lowercase {

  text-transform: lowercase;

}

.text-uppercase {

  text-transform: uppercase;

}

.text-capitalize {

  text-transform: capitalize;

}

.text-muted {

  color: #777777;

}

.text-primary {

  color: #428bca;

}

a.text-primary:hover {

  color: #3071a9;

}

.text-success {

  color: #3c763d;

}

a.text-success:hover {

  color: #2b542c;

}

.text-info {

  color: #31708f;

}

a.text-info:hover {

  color: #245269;

}

.text-warning {

  color: #8a6d3b;

}

a.text-warning:hover {

  color: #66512c;

}

.text-danger {

  color: #a94442;

}

a.text-danger:hover {

  color: #843534;

}

.bg-primary {

  color: #fff;

  background-color: #428bca;

}

a.bg-primary:hover {

  background-color: #3071a9;

}

.bg-success {

  background-color: #dff0d8;

}

a.bg-success:hover {

  background-color: #c1e2b3;

}

.bg-info {

  background-color: #d9edf7;

}

a.bg-info:hover {

  background-color: #afd9ee;

}

.bg-warning {

  background-color: #fcf8e3;

}

a.bg-warning:hover {

  background-color: #f7ecb5;

}

.bg-danger {

  background-color: #f2dede;

}

a.bg-danger:hover {

  background-color: #e4b9b9;

}

.page-header {

  padding-bottom: 9px;

  margin: 40px 0 20px;

  border-bottom: 1px solid #eeeeee;

}

.row {

  margin-left: -15px;

  margin-right: -15px;

}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {

  position: relative;

  min-height: 1px;

  padding-left: 15px;

  padding-right: 15px;

}

.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {

  float: left;

}

.col-xs-12 {

  width: 100%;

}

.col-xs-11 {

  width: 91.66666667%;

}

.col-xs-10 {

  width: 83.33333333%;

}

.col-xs-9 {

  width: 75%;

}

.col-xs-8 {

  width: 66.66666667%;

}

.col-xs-7 {

  width: 58.33333333%;

}

.col-xs-6 {

  width: 50%;

}

.col-xs-5 {

  width: 41.66666667%;

}

.col-xs-4 {

  width: 33.33333333%;

}

.col-xs-3 {

  width: 25%;

}

.col-xs-2 {

  width: 16.66666667%;

}

.col-xs-1 {

  width: 8.33333333%;

}

.col-xs-pull-12 {

  right: 100%;

}

.col-xs-pull-11 {

  right: 91.66666667%;

}

.col-xs-pull-10 {

  right: 83.33333333%;

}

.col-xs-pull-9 {

  right: 75%;

}

.col-xs-pull-8 {

  right: 66.66666667%;

}

.col-xs-pull-7 {

  right: 58.33333333%;

}

.col-xs-pull-6 {

  right: 50%;

}

.col-xs-pull-5 {

  right: 41.66666667%;

}

.col-xs-pull-4 {

  right: 33.33333333%;

}

.col-xs-pull-3 {

  right: 25%;

}

.col-xs-pull-2 {

  right: 16.66666667%;

}

.col-xs-pull-1 {

  right: 8.33333333%;

}

.col-xs-pull-0 {

  right: auto;

}

.col-xs-push-12 {

  left: 100%;

}

.col-xs-push-11 {

  left: 91.66666667%;

}

.col-xs-push-10 {

  left: 83.33333333%;

}

.col-xs-push-9 {

  left: 75%;

}

.col-xs-push-8 {

  left: 66.66666667%;

}

.col-xs-push-7 {

  left: 58.33333333%;

}

.col-xs-push-6 {

  left: 50%;

}

.col-xs-push-5 {

  left: 41.66666667%;

}

.col-xs-push-4 {

  left: 33.33333333%;

}

.col-xs-push-3 {

  left: 25%;

}

.col-xs-push-2 {

  left: 16.66666667%;

}

.col-xs-push-1 {

  left: 8.33333333%;

}

.col-xs-push-0 {

  left: auto;

}

.col-xs-offset-12 {

  margin-left: 100%;

}

.col-xs-offset-11 {

  margin-left: 91.66666667%;

}

.col-xs-offset-10 {

  margin-left: 83.33333333%;

}

.col-xs-offset-9 {

  margin-left: 75%;

}

.col-xs-offset-8 {

  margin-left: 66.66666667%;

}

.col-xs-offset-7 {

  margin-left: 58.33333333%;

}

.col-xs-offset-6 {

  margin-left: 50%;

}

.col-xs-offset-5 {

  margin-left: 41.66666667%;

}

.col-xs-offset-4 {

  margin-left: 33.33333333%;

}

.col-xs-offset-3 {

  margin-left: 25%;

}

.col-xs-offset-2 {

  margin-left: 16.66666667%;

}

.col-xs-offset-1 {

  margin-left: 8.33333333%;

}

.col-xs-offset-0 {

  margin-left: 0%;

}

@media (min-width: 768px) {

  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {

    float: left;

  }

  .col-sm-12 {

    width: 100%;

  }

  .col-sm-11 {

    width: 91.66666667%;

  }

  .col-sm-10 {

    width: 83.33333333%;

  }

  .col-sm-9 {

    width: 75%;

  }

  .col-sm-8 {

    width: 66.66666667%;

  }

  .col-sm-7 {

    width: 58.33333333%;

  }

  .col-sm-6 {

    width: 50%;

  }

  .col-sm-5 {

    width: 41.66666667%;

  }

  .col-sm-4 {

    width: 33.33333333%;

  }

  .col-sm-3 {

    width: 25%;

  }

  .col-sm-2 {

    width: 16.66666667%;

  }

  .col-sm-1 {

    width: 8.33333333%;

  }

  .col-sm-pull-12 {

    right: 100%;

  }

  .col-sm-pull-11 {

    right: 91.66666667%;

  }

  .col-sm-pull-10 {

    right: 83.33333333%;

  }

  .col-sm-pull-9 {

    right: 75%;

  }

  .col-sm-pull-8 {

    right: 66.66666667%;

  }

  .col-sm-pull-7 {

    right: 58.33333333%;

  }

  .col-sm-pull-6 {

    right: 50%;

  }

  .col-sm-pull-5 {

    right: 41.66666667%;

  }

  .col-sm-pull-4 {

    right: 33.33333333%;

  }

  .col-sm-pull-3 {

    right: 25%;

  }

  .col-sm-pull-2 {

    right: 16.66666667%;

  }

  .col-sm-pull-1 {

    right: 8.33333333%;

  }

  .col-sm-pull-0 {

    right: auto;

  }

  .col-sm-push-12 {

    left: 100%;

  }

  .col-sm-push-11 {

    left: 91.66666667%;

  }

  .col-sm-push-10 {

    left: 83.33333333%;

  }

  .col-sm-push-9 {

    left: 75%;

  }

  .col-sm-push-8 {

    left: 66.66666667%;

  }

  .col-sm-push-7 {

    left: 58.33333333%;

  }

  .col-sm-push-6 {

    left: 50%;

  }

  .col-sm-push-5 {

    left: 41.66666667%;

  }

  .col-sm-push-4 {

    left: 33.33333333%;

  }

  .col-sm-push-3 {

    left: 25%;

  }

  .col-sm-push-2 {

    left: 16.66666667%;

  }

  .col-sm-push-1 {

    left: 8.33333333%;

  }

  .col-sm-push-0 {

    left: auto;

  }

  .col-sm-offset-12 {

    margin-left: 100%;

  }

  .col-sm-offset-11 {

    margin-left: 91.66666667%;

  }

  .col-sm-offset-10 {

    margin-left: 83.33333333%;

  }

  .col-sm-offset-9 {

    margin-left: 75%;

  }

  .col-sm-offset-8 {

    margin-left: 66.66666667%;

  }

  .col-sm-offset-7 {

    margin-left: 58.33333333%;

  }

  .col-sm-offset-6 {

    margin-left: 50%;

  }

  .col-sm-offset-5 {

    margin-left: 41.66666667%;

  }

  .col-sm-offset-4 {

    margin-left: 33.33333333%;

  }

  .col-sm-offset-3 {

    margin-left: 25%;

  }

  .col-sm-offset-2 {

    margin-left: 16.66666667%;

  }

  .col-sm-offset-1 {

    margin-left: 8.33333333%;

  }

  .col-sm-offset-0 {

    margin-left: 0%;

  }

}

@media (min-width: 992px) {

  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {

    float: left;

  }

  .col-md-12 {

    width: 100%;

  }

  .col-md-11 {

    width: 91.66666667%;

  }

  .col-md-10 {

    width: 83.33333333%;

  }

  .col-md-9 {

    width: 75%;

  }

  .col-md-8 {

    width: 66.66666667%;

  }

  .col-md-7 {

    width: 58.33333333%;

  }

  .col-md-6 {

    width: 50%;

  }

  .col-md-5 {

    width: 41.66666667%;

  }

  .col-md-4 {

    width: 33.33333333%;

  }

  .col-md-3 {

    width: 25%;

  }

  .col-md-2 {

    width: 16.66666667%;

  }

  .col-md-1 {

    width: 8.33333333%;

  }

  .col-md-pull-12 {

    right: 100%;

  }

  .col-md-pull-11 {

    right: 91.66666667%;

  }

  .col-md-pull-10 {

    right: 83.33333333%;

  }

  .col-md-pull-9 {

    right: 75%;

  }

  .col-md-pull-8 {

    right: 66.66666667%;

  }

  .col-md-pull-7 {

    right: 58.33333333%;

  }

  .col-md-pull-6 {

    right: 50%;

  }

  .col-md-pull-5 {

    right: 41.66666667%;

  }

  .col-md-pull-4 {

    right: 33.33333333%;

  }

  .col-md-pull-3 {

    right: 25%;

  }

  .col-md-pull-2 {

    right: 16.66666667%;

  }

  .col-md-pull-1 {

    right: 8.33333333%;

  }

  .col-md-pull-0 {

    right: auto;

  }

  .col-md-push-12 {

    left: 100%;

  }

  .col-md-push-11 {

    left: 91.66666667%;

  }

  .col-md-push-10 {

    left: 83.33333333%;

  }

  .col-md-push-9 {

    left: 75%;

  }

  .col-md-push-8 {

    left: 66.66666667%;

  }

  .col-md-push-7 {

    left: 58.33333333%;

  }

  .col-md-push-6 {

    left: 50%;

  }

  .col-md-push-5 {

    left: 41.66666667%;

  }

  .col-md-push-4 {

    left: 33.33333333%;

  }

  .col-md-push-3 {

    left: 25%;

  }

  .col-md-push-2 {

    left: 16.66666667%;

  }

  .col-md-push-1 {

    left: 8.33333333%;

  }

  .col-md-push-0 {

    left: auto;

  }

  .col-md-offset-12 {

    margin-left: 100%;

  }

  .col-md-offset-11 {

    margin-left: 91.66666667%;

  }

  .col-md-offset-10 {

    margin-left: 83.33333333%;

  }

  .col-md-offset-9 {

    margin-left: 75%;

  }

  .col-md-offset-8 {

    margin-left: 66.66666667%;

  }

  .col-md-offset-7 {

    margin-left: 58.33333333%;

  }

  .col-md-offset-6 {

    margin-left: 50%;

  }

  .col-md-offset-5 {

    margin-left: 41.66666667%;

  }

  .col-md-offset-4 {

    margin-left: 33.33333333%;

  }

  .col-md-offset-3 {

    margin-left: 25%;

  }

  .col-md-offset-2 {

    margin-left: 16.66666667%;

  }

  .col-md-offset-1 {

    margin-left: 8.33333333%;

  }

  .col-md-offset-0 {

    margin-left: 0%;

  }

}

@media (min-width: 1200px) {

  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {

    float: left;

  }

  .col-lg-12 {

    width: 100%;

  }

  .col-lg-11 {

    width: 91.66666667%;

  }

  .col-lg-10 {

    width: 83.33333333%;

  }

  .col-lg-9 {

    width: 75%;

  }

  .col-lg-8 {

    width: 66.66666667%;

  }

  .col-lg-7 {

    width: 58.33333333%;

  }

  .col-lg-6 {

    width: 50%;

  }

  .col-lg-5 {

    width: 41.66666667%;

  }

  .col-lg-4 {

    width: 33.33333333%;

  }

  .col-lg-3 {

    width: 25%;

  }

  .col-lg-2 {

    width: 16.66666667%;

  }

  .col-lg-1 {

    width: 8.33333333%;

  }

  .col-lg-pull-12 {

    right: 100%;

  }

  .col-lg-pull-11 {

    right: 91.66666667%;

  }

  .col-lg-pull-10 {

    right: 83.33333333%;

  }

  .col-lg-pull-9 {

    right: 75%;

  }

  .col-lg-pull-8 {

    right: 66.66666667%;

  }

  .col-lg-pull-7 {

    right: 58.33333333%;

  }

  .col-lg-pull-6 {

    right: 50%;

  }

  .col-lg-pull-5 {

    right: 41.66666667%;

  }

  .col-lg-pull-4 {

    right: 33.33333333%;

  }

  .col-lg-pull-3 {

    right: 25%;

  }

  .col-lg-pull-2 {

    right: 16.66666667%;

  }

  .col-lg-pull-1 {

    right: 8.33333333%;

  }

  .col-lg-pull-0 {

    right: auto;

  }

  .col-lg-push-12 {

    left: 100%;

  }

  .col-lg-push-11 {

    left: 91.66666667%;

  }

  .col-lg-push-10 {

    left: 83.33333333%;

  }

  .col-lg-push-9 {

    left: 75%;

  }

  .col-lg-push-8 {

    left: 66.66666667%;

  }

  .col-lg-push-7 {

    left: 58.33333333%;

  }

  .col-lg-push-6 {

    left: 50%;

  }

  .col-lg-push-5 {

    left: 41.66666667%;

  }

  .col-lg-push-4 {

    left: 33.33333333%;

  }

  .col-lg-push-3 {

    left: 25%;

  }

  .col-lg-push-2 {

    left: 16.66666667%;

  }

  .col-lg-push-1 {

    left: 8.33333333%;

  }

  .col-lg-push-0 {

    left: auto;

  }

  .col-lg-offset-12 {

    margin-left: 100%;

  }

  .col-lg-offset-11 {

    margin-left: 91.66666667%;

  }

  .col-lg-offset-10 {

    margin-left: 83.33333333%;

  }

  .col-lg-offset-9 {

    margin-left: 75%;

  }

  .col-lg-offset-8 {

    margin-left: 66.66666667%;

  }

  .col-lg-offset-7 {

    margin-left: 58.33333333%;

  }

  .col-lg-offset-6 {

    margin-left: 50%;

  }

  .col-lg-offset-5 {

    margin-left: 41.66666667%;

  }

  .col-lg-offset-4 {

    margin-left: 33.33333333%;

  }

  .col-lg-offset-3 {

    margin-left: 25%;

  }

  .col-lg-offset-2 {

    margin-left: 16.66666667%;

  }

  .col-lg-offset-1 {

    margin-left: 8.33333333%;

  }

  .col-lg-offset-0 {

    margin-left: 0%;

  }

}

.clearfix:before,

.clearfix:after,

.container:before,

.container:after,

.container-fluid:before,

.container-fluid:after,

.row:before,

.row:after {

  content: " ";

  display: table;

}

.clearfix:after,

.container:after,

.container-fluid:after,

.row:after {

  clear: both;

}

.center-block {

  display: block;

  margin-left: auto;

  margin-right: auto;

}

.pull-right {

  float: right !important;

}

.pull-left {

  float: left !important;

}

</style>';  

}



public function loginerror($email){

    

$browser = new Browser();

$browsername=$browser->getBrowser();

$mesaj='';

$info='Aşağıda yer alan ip adresi üzerinden sizin hesabınıza erişilmeye çalışıldı. Eğer bu konuda bilgi sahibiyseniz bu mesajı dikkate almayınız.';

$mesaj='

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Yanlış giriş yapıldı | Vukuat.com</title>

'.load::css($url).'

 '.Response::mailstyle().'   

</head>



<body>



   <div class="col-md-12">

        <div class="well ">

        <h3><legend class="text-center text-danger">Dikkat! Birileri hesabınıza erişmeye çalışıyor.</legend></h3><br>

  <br>

  <p class="text-warning ">'.$info.'</p>  <br> 

      

<div class="col-md-12">

<h5><p class="text-info">Hata sayısı :</p> <p class="text-danger">'.Session::get("loginfalse").'</p></h5>

<h5><p class="text-info">Ip adresi :</p> <p class="text-danger">'.Security::Userip().'</p></h5>

<h5><p class="text-info">Tarayıcı :</p> <p class="text-danger">'.$browsername=$browser->getBrowser().'</p></h5>

<h5><p class="text-info">versiyon :</p> <p class="text-danger">'.$browsername=$browser->getVersion().'</p></h5>

<h5><p class="text-info">Tarih :</p> <p class="text-danger">'.Time::today().'</p></h5>



</div>



        </div>

      </div>

      <h3><p class="text-info ">Bu e-posta, otomatik gönderilmiştir.</p></h3><br>   

</body>

</html>

';

return $mesaj;

}



 public static function forgot($email,$key){

    

$browser = new Browser();





$info='Şifre değişikliği için aşağıda gönderdiğimiz kod ile yeni şifre temin edebilirsiniz. Eğer "şifremi unuttum" talebinde bulunmadıysanız lütfen hesap bilgilerinizi gözden geçiriniz. Hesabınızın güvende olmadığını düşünüyorsanız, kimlik bilgilerinizle giriş yapıp e-posta veya şifrenizi değiştiriniz. ';

$mesaj='

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Yanlış giriş yapıldı | Vukuat.com</title>



<link rel="stylesheet" href="'.Session::get("adres").'/template/basic/css/bootstrap.min.css">

<link rel="stylesheet" href="'.Session::get("adres").'/template/basic/css/design.css"> 

</head>



<body>



   <div class="col-md-12">

        <div class="well ">

        <h3><legend class="text-center text-danger">Şifrenizi mi unuttunuz ?</legend></h3>

  <br>

  <p class="text-primary"><a href="'.Session::get("adres").'/uye/sifre/?email='.$email.'&key='.$key.'">Şifremi değiştir.</a></p>

  <p class="text-warning ">'.$info.'</p>  <br> 

  <p class="text-info "><strong>"Şifremi unuttum"</strong> talebinde bulunan kişinin bilgileri.</p>     

<div class="col-md-12">



<h5><p class="text-danger">Ip adresi :'.Security::Userip().'</p></h5>

<h5><p class="text-primary">Tarayıcı :'.$browsername=$browser->getBrowser().'</p></h5>

<h5><p class="text-info">versiyon :'.$browsername=$browser->getVersion().'</p></h5>

<h5><p class="text-info">Tarih :'.Time::today().'</p></h5>



</div>



        </div>

      </div>

      <h3><p class="text-info ">Bu e-posta, otomatik gönderilmiştir.</p></h3><br>   

</body>

</html>

';

return $mesaj;

}

}



