<?php
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
class Ayarlar{
   public function __construct() {
       if(!defined('ADRES')){
           $getit=new load();
            $Settings = $getit->model("cpanel/ayarlar");
$data["ayaral"] = $Settings->ayarver();
      


if(isset($data["ayaral"])){
  if(is_array($data["ayaral"])){
foreach ($data["ayaral"] as $key => $value) {
 
    if(Security::is_ssl()==TRUE)
 define('ADRES', 'https://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
        else
 
 define('ADRES', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));
    define ('TEMA','default');
 define ('CPANEL','cpanel');
    define ('BASLIK',$value["title"]);
 
    define ('SITE',$value["sitename"]);
 $toplam = $Settings->toplamhit();
   $data=array(
            ':gun'=> Zaman::gun(),
            ':ay'=> Zaman::ay(),
            ':yil'=> Zaman::yil(),
        );
 
  $toplambugun = $Settings->toplambugun($data);
  
if(!defined('SONDAKIKA'))
    define ('SONDAKIKA',$value["flas"]);
Session::set('id', session_id());
        $ip=Security::Userip();
     define ('HIT',$toplam);
    define ('HITTODAY',$toplambugun);
if(Security::detectBot($_SERVER['HTTP_USER_AGENT'])==TRUE) {
echo "";
} else {
  $data=array(
            ':ip'=>  Security::Userip(),
            ':gun'=> Zaman::gun(),
            ':ay'=> Zaman::ay(),
            ':yil'=> Zaman::yil(),
        );
        $rsl=$Settings->kontrol($data);
        if($rsl==FALSE){
           $detay=  Security::Browser();
            $detay=" Tarayıcı adı:[" .$detay['tarayici']."] Versiyon :[" .$detay['versiyon'] . "] işletim sistemi :[" . $detay['platform'] . "] Ayrıntılar: <br >" . $detay['userAgent'];
            $data=array(
            'ip'=>  Security::Userip(),
            'gun'=> Zaman::gun(),
            'ay'=> Zaman::ay(),
            'yil'=> Zaman::yil(),
             'saat'=> Zaman::saat(),
             'detay'=> $detay,
        ); 
            $rsl=$Settings->setip($data);
        }
} 
      
    
}
}}
         
       }
       
       
        
    }
}

