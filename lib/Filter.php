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


class Filter {

    

    
public static function chk(&$var) {
  if (!isset($var))
    return NULL;
  else
    return $var;
}
    
public static function idmi($id){
            if (!is_numeric($id)) {
            return false; }
 else{
     
     
     return true;
 }
}
    public static function integer($val) {

  if (is_int($val)) {

echo "doğru !";

  }else

      $message="Girilen değerlerden biri veya bir kaçı sayı cinsinden değil !";

     return Response::danger($message);

 

}     

    

}

