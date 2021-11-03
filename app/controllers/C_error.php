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

class error extends Controller {

 

    private  $modal;

    private $content;

    function __construct($controller, $method, $data) {

        parent::__construct();

//echo "kontroller".$controller."<br>";

//echo "method".$method."<br>";

//echo "data".$data."<br>"; 

        if(!$method)

            echo $this->er404 ();

 }

    

    function er404(){



        $this->load->view("errors/404","404 Not found ", $data,"empty");

    

        

    }

     function closed(){



        $this->load->view("errors/closed","Site kapalı ! ", $data,"empty");

    

        

    }

    

     

}



