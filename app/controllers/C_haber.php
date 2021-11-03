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
class Haber extends Controller {

 

 

    function __construct($controller, $method, $data) {

        parent::__construct();

//echo "kontroller".$controller."<br>";

//echo "method".$method."<br>";

//echo "data".$data."<br>"; 

 }

    

 public function detay($controller, $method, $baslik='',$data){


    

 //the data is checking   



 $baslik= Security::clearsqlinj($baslik);
 if(Filter::idmi($baslik)==TRUE)
   $via=TRUE;
 else
     $via=FALSE;
 $data=array(
     ':sefurl'=>$baslik,
 );
$haber_model=  $this->load->model('haber');
    $data["detay"] = $haber_model->haberoku($data,$via);
       

        if (!$data["detay"] )

        {

     

            //haber bulunamadı diyelim

        echo    Errors::er404();  

        

        

        

        }else {

         

        ///hit

    foreach ($data["detay"] as $key => $getnews) {   

        $title= $getnews["title"];

        $haberid= $getnews["id"];

        $hit=$getnews["hits"]+1;

        $datahit = array(

            "hits" => $hit, 

        );

$data["hit"] = $haber_model->hits($datahit,$getnews["id"]);

$sametitle=$getnews["title"];

if ($sametitle==false)

    $sametitle=0;

    }//hit



        



$data["yorum"] = $haber_model->yorumlar($haberid);

$data["same"] = $haber_model->benzerhaber($sametitle);



      //controller (class) name ,viewfile name,title, data, layout type

        $this->load->view("haber/index",$title, $data,"news");

    }

    }

    public function kategori($controller, $method, $kategori){

 $kategori=  Security::sefurl($kategori);


       

        

$haber_model = $this->load->model("haber");
 $data["mesaj"]="a ";
 $data["liste"]=" a";
 
$data=array();
        

        

        $this->load->view("haber/kategori/index","Kategoriler", $data,"news");

        

        

        

        

        

        

         

        

    }

    

     

}



