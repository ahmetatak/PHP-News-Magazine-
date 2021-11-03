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

class kategori extends Controller {



    

    function __construct($controller, $method, $data) {

        parent::__construct();

//echo "kontroller".$controller."<br>";

//echo "method".$method."<br>";

//echo "data".$data."<br>"; 



        

       

        

    }

    

 

    public function haber($controller, $method, $type){

          $categori =  $this->load->model("cpanel/kategoriler");

          if( $type=="sil"){

              $catid=htmlspecialchars($_POST["kategori"]); 

              

             

        if ($catid==FALSE){

             $message="Kategori kimliği hatalı !";

        $data["mesaj"]= Response::danger($message); 

        

        }else {

            

             $sonuc = $categori ->sil($catid);

            

         if ($sonuc==true){

              $message="Kategori başarılı bir şekilde silinmiştir.";

         $data["mesaj"]= Response::success($message); }

         else { $message="Üzgünüz kategori silme işlemi başarısız.";

         $data["mesaj"]= Response::danger($message); }

               

        }

     

 $this->load->view("panel/haberler/kategori","Gündem ", $data,"admin");

          }else {

          

          

       if( $type=="ekle"){

           

           
if(isset($_POST["insert"]))
             $insert=$_POST["insert"];
else $insert='';

  if ($insert=="start") { 

      ###############insert

      $catid=htmlspecialchars($_POST["kategori"]);      

$catname=htmlspecialchars($_POST["name"]);



$catimg=htmlspecialchars($_POST["img"]);

$catdetail1=htmlspecialchars($_POST["detay"]);

$catstatu1=htmlspecialchars($_POST["durum"]);

$creatorip=Security::Userip();

$createdt= Zaman::bugun();     

$creator=  Session::get("userid");

if (empty($catname) or empty($catimg) or $catid=="" or $catstatu=""){

$message= 'Form alanları boş bırakılamaz !<br> '.isset($catstatu).''; 

       

  $data["mesaj"]= Response::danger($message);    

 $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");      

 die();   

}

$cattype="news";

$sefurl=  Security::sefurl($catname).".html";

 $categori =  $this->load->model("cpanel/kategoriler");

$checkurl= $categori ->checkurl($sefurl);

if($checkurl==true){

 $message= "Kategoriye kayıt  edilecek adrese benzer bir adres var."; 

       

  $data["mesaj"]= Response::danger($message);  

  $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");

 die;   

 

}

    

     $datam = array(

            "sefurl" => $sefurl,

            "catname" => $catname,

            "catdetail" => $catdetail1,

            "catimg" => $catimg,

            "upcatid" => $catid,

            "cattype" => $cattype,

            "statu" => $catstatu1,

            "createddt" => $createdt,

            "creatorip" => $creatorip,

            "creator" =>$creator,      

        );

 

 $sonuc = $categori ->ekle($datam);

if($sonuc==true){





$ok= "Kategori başarılı bir şekilde eklenmiştir.!"; 

   $data["mesaj"]= Response::success( $ok);

 



 $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");

 }else {

$message= "Üzgünüz kategori eklenmedi!<br>"; 

       

  $data["mesaj"]= Response::danger($message); 

  $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");

 }

      ################  /insert

      

      

      

  }else {
if(!isset($data) or !is_array($data))
    $data=array();
     $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");  

  }

           

           

          

       }//insert

       

       else{

      
if(isset($_POST["edit"]))
      $edit=$_POST["edit"];
else $edit="";
if(isset($_POST["update"]))
      $update=$_POST["update"];
else$update='';

  if ( $edit=="start") {

   

       $id=$_POST["kategori"]; 

 

         

$data["edit"]= $categori->duzenle($id);

 $this->load->view("panel/haberler/kategori/duzenle","Gündem ", $data,"admin");

       

  }else{

       if ( $update=="start") {

  echo          $this->haberguncelle();

  }else{

       
if(!isset($data) or !is_array($data))
    $data=array();
 $this->load->view("panel/haberler/kategori","Gündem ", $data,"admin");   

  } //kaydet

    } //duzenle

    }// haber kategori

} //ekle

 }//sil  



 

  public function haberguncelle(){

       $categori =  $this->load->model("cpanel/kategoriler");

$id=$_POST["id"];

$sesid=$_POST["sesid"];

$data["edit"]= $categori->duzenle($id);

if ($sesid!=session_id()){

  $message= "Sitede değişiklik yapabilmek için yanlız bu site üzerinden veri alış-verişi gerçekleşebilir ! <br>"; 

       

  $data["mesaj"]= Response::danger($message);  



 $this->load->view("panel/haberler/kategori/duzenle","Gündem ", $data,"admin");  

}else{

    

$catid=htmlspecialchars($_POST["kategori"]);      

$catname=htmlspecialchars($_POST["name"]);



$catimg=htmlspecialchars($_POST["img"]);

$catdetail=htmlspecialchars($_POST["detay"]);

$statu=htmlspecialchars($_POST["durum"]);

$updaterip=Security::Userip();

$updatedt= Zaman::bugun();     

$updater=  Session::get("userid");

if (empty($catname) or empty($catimg) or $catid=="" or $catstatu=""){

$message= "Form alanları boş bırakılamaz !<br>"; 

       

  $data["mesaj"]= Response::danger($message);    

 $this->load->view("panel/haberler/kategori/duzenle","Gündem ", $data,"admin");      

 die();   

}



$sefurl=  Security::sefurl($catname).".html";

 $categori =  $this->load->model("cpanel/kategoriler");

$checkurl= $categori ->checkurl($sefurl);

//if($sefurl==true){
//
// $message= "Kategoriye kayıt  edilecek adrese benzer bir adres var. yeni adres"; 
//
//       
//
//  $data["mesaj"]= Response::danger($message);  
//
//  $this->load->view("panel/haberler/kategori/ekle","Gündem ", $data,"admin");
//
// die;   
//
// return $sefurl;
//
//}



     $data = array(

            "sefurl" => $sefurl,

            "catname" => $catname,

            "catdetail" => $catdetail,

            "catimg" => $catimg,

            "statu" => $statu,

            "upcatid" => $catid,

             "updateddt" => $updatedt,

            "updaterip" => $updaterip,

            "updater" => $updater,      

        );

    

 $sonuc = $categori ->kaydet($data,$id);

if($sonuc==true){





$ok= "Kategori başarılı bir şekilde güncellenmiştir!"; 

$data["mesaj"]= Response::success( $ok);

$data["edit"]= $categori->duzenle($id);

 $this->load->view("panel/haberler/kategori/duzenle","Gündem ", $data,"admin");

 }else {}

}









  }







}  