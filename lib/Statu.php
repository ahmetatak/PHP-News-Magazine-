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

class Statu {

    public function check($controller,$method,$data){

          if (Session::get("sitestatu")=="1"){

return TRUE; }

elseif (Session::get("sitestatu")=="0" and Session::get("login")==false){

    Errors::kapali();

}

elseif (Session::get("sitestatu")=="2" and Session::get("login")==false)

    

{  

  

    if ($controller!=="cpanel"){



    Errors::bakimda();     



    }else {



        echo $this->cut_the_url($controller,$method,$data);

    }



}elseif (Session::get("sitestatu")=="2" and Session::get("login")==true){

 echo $this->cut_the_url($controller,$method,$data);   

}

  

    }

    

}