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

class setting extends Controller {



    

    function __construct($controller, $method, $data) {

        parent::__construct();

 

 }

    

function all()

{

 $Settings = $this->load->model("cpanel/ayarlar");



$data["ayarlar"] = $Settings->ayarver();

echo   $this->load->view("panel/setting/index"," Site ayarları ", $data,"admin");

    

}



public function update(){

$Settings = $this->load->model("cpanel/ayarlar"); 

$sitename=htmlspecialchars(Filter::chk($_POST["siteadi"]));

$siteadres=htmlspecialchars(Filter::chk($_POST["adres"]));  

$sitebaslik=htmlspecialchars(Filter::chk($_POST["baslik"])); 



$sitemail=htmlspecialchars(Filter::chk($_POST["mail"]));     

$sitedurum=htmlspecialchars(Filter::chk($_POST["durum"]));      

$sitecopy=htmlspecialchars(Filter::chk($_POST["copy"])); 

$analytics=htmlspecialchars(Filter::chk($_POST["analytics"]));

$sitemanset=htmlspecialchars(Filter::chk($_POST["manset"]));

$sitesondk=htmlspecialchars(Filter::chk($_POST["sondk"]));

$siteduy=htmlspecialchars(Filter::chk($_POST["duy"]));

$sitegirisreklam=htmlspecialchars(Filter::chk($_POST["girisreklam"]));      

$siteuizin=htmlspecialchars(Filter::chk($_POST["uizin"]));

$siteureg=htmlspecialchars(Filter::chk($_POST["ureg"]));

$siteregtype=htmlspecialchars(Filter::chk($_POST["regtype"]));



$updatedt=  Zaman::bugun();;

$updaterip=Security::Userip();;

$updater = Session::get("userid");



if ( !is_numeric ($sitedurum)){

    

    

    

$no= "Bazı form değerleri yanlış olduğundan dolayı yapılan değişiklik kayıt edilmedi. Örneğin: Sayı olması gereken değerler metin durumunda."; 

   $data["mesaj"]= Response::danger($no);

   

$data["ayarlar"] = $Settings->ayarver();

return   $this->load->view("panel/setting/index"," Site ayarları ", $data,"admin");

    

    

    

  die;  

}









if(empty($sitemail) or empty($siteadres)or empty($sitename)){

    

    $no= "Form alanında belirtilen yerlerin doldurulması zorunludur."; 

   $data["mesaj"]= Response::danger($no);

   

$data["ayarlar"] = $Settings->ayarver();

return   $this->load->view("panel/setting/index"," Site ayarları ", $data,"admin");

       

die;

}







     

     $data = array(

            "sitename" => $sitename,

            "url" => $siteadres,

            "title" => $sitebaslik,

            "copy" => $sitecopy,

             "analytics" => $analytics,

            "statu" => $sitedurum,

            "mail" => $sitemail,

            "login" => $siteuizin,   

            "reg" => $siteureg,

            "regtype" => $siteregtype,

            "advertbox" => $sitegirisreklam,

            "notice" => $siteduy,

            "manset" => $sitemanset,

            "flas" => $sitesondk,

            "updater" => $updater,

            "updatedt" => $updatedt,

            "updaterip" => $updaterip,

           

        );

$id="1";







$sonuc = $Settings->kaydet($data,$id);



if($sonuc==true){





$ok= "Ayar değişikliği başarılı bir şekilde kayıt edilmiştir !"; 

   $data["mesaj"]= Response::success( $ok);

   

$data["ayarlar"] = $Settings->ayarver();

return   $this->load->view("panel/setting/index"," Site ayarları ", $data,"admin");

}else {

$no= "Belirlenemeyen bir sebepten doyalı ayar değişikliği kayıt edilmedi !"; 

   $data["mesaj"]= Response::danger($no);

   

$data["ayarlar"] = $Settings->ayarver();

return   $this->load->view("panel/setting/index"," Site ayarları ", $data,"admin");

       

  

}





}



##################mail ayarları

public function mail(){

    

$Settings = $this->load->model("cpanel/ayarlar"); 

if($_POST["update"]=="start"){

 $host=htmlspecialchars($_POST["host"]);

$port=htmlspecialchars($_POST["port"]);  

$username=htmlspecialchars($_POST["username"]); 



$password=htmlspecialchars($_POST["password"]);     

$repmail=htmlspecialchars($_POST["mail"]);  













if(empty($host) or empty($port)or empty($username)or empty($password)){

    

    $no= "Form alanında belirtilen yerlerin doldurulması zorunludur."; 

   $data["mesaj"]= Response::danger($no);

   

$data["mail"] = $Settings->ayarver();

return   $this->load->view("panel/setting/mail"," Site ayarları ", $data,"admin");

       

die;

}

$data = array(

            "mailhost" => $host,

            "mailport" => $port,

            "mailuser" => $username,

            "mailpassword" => $password,

            "repmail" => $repmail,

            

        );

$id="1";







$sonuc = $Settings->kaydet($data,$id);



if($sonuc==true){





$ok= "Ayar değişikliği başarılı bir şekilde kayıt edilmiştir !"; 

   $data["mesaj"]= Response::okay($ok,"");

   

$data["mail"] = $Settings->ayarver();

return   $this->load->view("panel/setting/mail"," Mail ayarları ", $data,"admin");

}else {

$no= "Belirlenemeyen bir sebepten doyalı ayar değişikliği kayıt edilmedi !"; 

   $data["mesaj"]= Response::error($no,"");

    

$data["mail"] = $Settings->ayarver();

return   $this->load->view("panel/setting/mail"," Mail ayarları ", $data,"admin");

       

  

}   

}else 

{





$data["mail"] = $Settings->ayarver();

echo   $this->load->view("panel/setting/mail"," Mail ayarları ", $data,"admin");    

}

    

}

###################mail ayarları



}