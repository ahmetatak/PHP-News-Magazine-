<?phpinfo@ahmetatak.netinfo@ahmetatak.net
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
class Time {
    
  public static function guncevir($date){
  
}
  public static function aycevir($ay){
 if($ay=="01")
     $ay="Ocak";
 else
     if($ay=="02")
     $ay="Şubat";
     else
     if($ay=="03")
     $ay="Mart";
      else
     if($ay=="04")
     $ay="Nisan";
      else
     if($ay=="05")
     $ay="Mayıs";
     else
      if($ay=="06")
     $ay="Haziran";
      else
      if($ay=="07")
     $ay="Temmuz";
        else
      if($ay=="08")
     $ay="Ağustos";
              else
      if($ay=="09")
     $ay="Eylül";
                    else
      if($ay=="10")
     $ay="Ekim";
                          else
      if($ay=="11")
     $ay="Kasım";
                          else
      if($ay=="12")
     $ay="Aralık";
    
 return$ay;
}
  public static function bugun(){
$today = date("d-m-Y H:i:s");  
return $today;
}
  public static function gunayyil(){
$today = date("d")."-".date("m")."-".date("Y");  
return $today;
}
  public static function saat(){
$saat=  date("H:i:s");
return $saat;
}
  public static function gun(){
 $gun=  date("d");
return $gun;   
}
  public static function ay(){
$ay=  date("m");
return $ay;    
}
  public static function yil(){
$yil=  date("Y");
return $yil;    
}
  public static function tarih(){
    $tarih = date("YmdHis");
    return $tarih;
}
 
 
    
}