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

class haber extends Controller {



    

    function __construct($controller, $method, $data) {

        parent::__construct();

if(Session::get("login")==false)

    die('giriş yapmamışsınız. giriş yapmadan işlem yapamazsınız.');

 }

  

    public function hepsi ($controller, $method, $page){
 
$index_model = $this->load->model("cpanel/haberler");

$list = $index_model->tumhabersay();


 
$limit = 10;    



if(!isset($page) or !is_numeric($page)){
$page=1; 

}

$data["pagem"]=$page;

$data["toplamsayfa"] = ceil($list / $limit);

$baslangic = ($page-1)*$limit;



 $data["hepsi"] = $index_model->tumhaber($baslangic,$limit);
 
 
return $this->load->view("panel/haberler/hepsi","başlık", $data,"admin");

    }

    

    

    

    

    

    

    

    

    

        public function ekle ($controller, $method, $sesid){
     
if(isset($_POST["edit"])) {
 
$veriekle = $this->load->model("cpanel/haberler");

      if($sesid!=  session_id()){

 $ermessage ='Form bilgilerini yanlızca kendi sayfamız üzerinden kabul ediyoruz';       

  $data["mesaj"]= Response::danger( $ermessage);

$this->load->view("panel/haberler/ekle","Haber ekleme", $data,"admin");

          

          die;

      }else{

$title=htmlspecialchars($_POST["baslik"]);

$img=htmlspecialchars($_POST["resim"]);     

$catid=htmlspecialchars(isset($_POST["kategori"]));   



$statu=htmlspecialchars($_POST["durum"]);     

$comment=htmlspecialchars($_POST["yorum"]);      

$headline=htmlspecialchars($_POST["manset"]);      

$breaking=htmlspecialchars($_POST["flas"]);

$order=htmlspecialchars($_POST["mansetsira"]);

$summary=$_POST["ozet"];

$news=$_POST["haber"];

$tags=htmlspecialchars($_POST["tags"]);

$updatedt=Zaman::bugun();;

$updaterip=Security::Userip();;

 

$sefurl=  url::Sefurl($title."-".Zaman::gunayyil()).".html";





     

     ////aynı başlıktan var mı diye kontrol ediyoruz.

 $veriara = array(

            ":url" => $sefurl,

            

        );
 
     $arama = $veriekle->ara($veriara);

     

     

     if($arama==TRUE){

  $ermessage ='Yazdığın haber başlığının bir kopyası veritabanında bulundu ! <br> Bunu mu demek istedin ? <a target="new" href="'.Session::get("adres").'/'.$sefurl.'">'.$title.'</a>';       

  $data["mesaj"]= Errors::danger( $ermessage);

 

  

  $this->load->view("panel/haberler/ekle",$title, $data,"admin");

 exit;

     }else { //eğer yoksa kayıt işlemine devam et bebegum !





if(empty($title) or empty($news) )

{  



 $ermessage ='form alanlarının doldurulması gerekir !';       

  $data["mesaj"]= Response::danger( $ermessage);

$this->load->view("panel/haberler/ekle",$title, $data,"admin");

exit;

}else

{

$ua=  Security::Browser();

$browser= "Tarayıcı adı: " . Filter::chk($ua['name']) . " " . Filter::chk($ua['version']) . " işletim sistemi :" .Filter::chk($ua['platform']) . " Ayrıntılar: <br >" . Filter::chk($ua['userAgent']);



   

     

     ///

     $time = Zaman::bugun();

     $userip=  Security::Userip();

     $data = array(



            "sefurl" => $sefurl,

            "title" => $title,

            "summary" => $summary,

            "news" => $news,

            "comment" => $comment,

            "breakingnews" => $breaking,

            "headline" => $headline,

            "newsorder" => $order,

            "tags" => $tags,

            "catid" => $catid,

            "img" => $img,

            "date" => $time,

            "ip" => $userip,

            "browser" => $browser,

            "statu" => $statu,

           

           

        

        );



$sonuc = $veriekle->ekle($data);

if($sonuc==true){

$message= "Haber başarılı bir şekilde kayıt edilmiştir !"; 

  

  $data["mesaj"]= Response::success($message);

  $edit="";



}  }}



}

if(!isset($data))
    $data=array();

    $this->load->view("panel/haberler/ekle",$title, $data,"admin");





  }



 else{ 

if(!isset($data))
    $data=array();

 $this->load->view("panel/haberler/ekle","", $data,"admin");

  }//edit   



    }
    public function sil($controller, $method, $id=0 ){
    
       $veriekle = $this->load->model("cpanel/haberler");
       $sil=$veriekle->sil($id);
       if($sil)
           return $this->hepsi ($controller, $method, 1);
    }

    

    

    

    

    

    

    

    

    

    

    

    public function duzenle ($controller, $method, $id){

 
if(isset($_POST["edit"]))
   $edit=$_POST["edit"];
else $edit='';

   



if ($id=="" or $id==false)

{return false;

}else{



  if ( $edit=="start") {

      

      load::css($url="");

$haberim = $this->load->model("cpanel/haberler");

$title=htmlspecialchars($_POST["baslik"]);



$img=htmlspecialchars($_POST["resim"]);     

$catid=htmlspecialchars($_POST["kategori"]);   
if(isset($_POST["sefurl"]))
$sefurl2=htmlspecialchars($_POST["sefurl"]); 
else $sefurl2='';


$statu=htmlspecialchars($_POST["durum"]);     

$comment=htmlspecialchars($_POST["yorum"]);      

$headline=htmlspecialchars($_POST["manset"]);      

$breaking=htmlspecialchars($_POST["flas"]);

$order=htmlspecialchars($_POST["mansetsira"]);

$summary=$_POST["ozet"];

$news=$_POST["haber"];

$tags=htmlspecialchars($_POST["tags"]);

$updatedt=Zaman::bugun();;

$updaterip=Security::Userip();;

if($sefurl2=="ok"){

$sefurl= url::Sefurl($title)."-".Zaman::gunayyil().".html";

}else{

$data["gelenhaber"] = $haberim->duzenle($id);

foreach ($data["gelenhaber"] as $key => $oldurl) {

 $sefurl= $oldurl["sefurl"];   

}







}

// int kontrolu 

 

//

if(empty($title) )

{  

$ermessage= "form alanlarının doldurulması gerekir !$sefurl2"; 

    

  $data["mesaj"]= Response::danger( $ermessage);

  $data["gelenhaber"] = $haberim->duzenle($id);

    $this->load->view("panel/haberler/duzenle",$title, $data,"admin");

exit;

}else

{
$username=  Session::get("userid");

     $data = array(

            "sefurl" => $sefurl,

            "title" => $title,

            "summary" => $summary,

            "news" => $news,

            "comment" => $comment,

            "breakingnews" => $breaking,

            "headline" => $headline,

            

            "tags" => $tags,

            "catid" => $catid,

            "img" => $img,

            "statu" => $statu,

            "who" => $username,

            "updatedt" => $updatedt,

            "updaterip" => $updaterip,

         "newsorder" => $order,

        );



$sonuc = $haberim->kaydet($data,$id);

if($sonuc==true){



$message= "Haber başarılı bir şekilde kayıt edilmiştir !"; 

       

  $data["mesaj"]= Response::success($message);

    

  $edit="";



}  



}

 $data["gelenhaber"] = $haberim->duzenle($id);

    $this->load->view("panel/haberler/duzenle",$title, $data,"admin");





  } 



 else{ 

$haberim = $this->load->model("cpanel/haberler");

        $data["gelenhaber"] = $haberim->duzenle($id);
if(!isset($title))
    $title="";

    $this->load->view("panel/haberler/duzenle",  $title,$data,"admin");

  }//edit  

}} ////duzenle











     public function yukle(){

$start="ok";

         echo Upload::images($start);

     }

     

     public function subcat($subcatid){}}



