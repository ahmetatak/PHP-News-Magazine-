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

class home extends Controller {

 

    private  $modal;

    private $content;

    function __construct($controller, $method, $data) {

        parent::__construct();

//echo "kontroller".$controller."<br>";

//echo "method".$method."<br>";

//echo "data".$data."<br>"; 

        if(!$method)

            echo $this->index ();

 }

    

    function index(){

  

       $index_model = $this->load->model("home");

        $data["manset"] = $index_model->mansetlistele();

        $data["sonhaber"] = $index_model->sonhaberlistele();

        $data["yazar"] = $index_model->yazarListele();



        //controller (class) name ,viewfile name,title, data, layout type

        $this->load->view("home/home","Gündem ", $data,"layout");

    

        

    }

    

    

     

}



