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

class Errors {

    



            

  public static function danger($message){

        

        return '<div class="alert alert-danger"><i class="vukuat-icon-attention vt-2"></i> '. $message.'</div>';

    }

  public static function success($message){

        

        return '<div class="alert alert-success"><i class="vukuat-icon-ok"></i> '. $message.'</div>';

    }



    



  public static function er404 (){

$load= new load();
return $load->view("errors/404", "Aradığınız Sayfaya erişilemiyor.",$data=array(),"layout");

    }

  public static function kapali (){

echo "site suan kapali durumda ! ";

    }

  public static function bakimda (){



 

return load::view("errors/closed","Bakım Modu  ", $data,"empty");







    }

    

}