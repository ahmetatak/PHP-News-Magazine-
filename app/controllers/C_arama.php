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

class arama extends Controller {

 

       

    function __construct($controller, $method, $data) {

        parent::__construct();

}  

public function haber($controller, $method, $data){



$metin = htmlspecialchars($_GET["ara"]);





if ($metin==false){

    

  $mesaj="Arama sonucunda haber bulunamadı";

 $data["mesaj"]=Response::danger($mesaj); 



 

   

}

 if (strlen($metin)<4) {

     $mesaj="Aradığınız haber başlığı en az 4 harfli olmalıdır.";

 $data["mesaj"]=Response::danger($mesaj); 

 $this->load->view("arama/haber/index","Haber arama Sonuçları ", $data,"layout"); 

 exit;    

 }

$search_model = $this->load->model("arama");





     $aramayap = array(

     ":metin" => $metin,

 );

       $data["sonuc"] = $search_model->haberara($metin);

   

if($data["sonuc"]==false) 

{

$mesaj="Arama sonucunda haber bulunamadı";

 $data["mesaj"]=Response::danger($mesaj);     

    

 

}else {



    

//echo Time::find(Session::get("newssearch"),Time::today(),"s"); 

//Session::set("newssearch", "28-05-2014 03:55:22") ;

  

    

} 





 $this->load->view("arama/haber/index","Haber arama Sonuçları ", $data,"layout"); 

}

   

}





