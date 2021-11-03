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

class cpanel extends Controller {

 

private  $email;

private $pass; 

private $code;

private $remember;

private $clicked;         

    function __construct($controller, $method, $data) {

        parent::__construct();


if(Session::get("login")==TRUE)
{
 
  return $this->panel();
}else
    $this->login ();

       

        

        

        

   }  



   public function login()
           

           {
$data=array();
        

$admin_model = $this->load->model("cpanel");


if(isset($_POST["email"]))
$eposta  =htmlspecialchars($_POST["email"]);
if(isset($_POST["password"]))
$sifre   =htmlspecialchars($_POST["password"]);
if(isset($_POST["start"]))
$clicked =htmlspecialchars($_POST["start"]);       

        
if(isset($clicked))  {
    
  if ($clicked){

$data = array(

":eposta" => $eposta,

":sifre" => $sifre,

);
 
// Veri tabanı işlemleri

        

        $result = $admin_model->login($data);

        if($result == false){

          

$message= "Giriş bilgileri hatalı !"; 

       

  $data["mesaj"]= Response::danger($message);

     $this->load->view("panel/login","Gündem ", $data,"login");       

        }else{       
Session::set("login", true);
Session::set("user", $result[0]["type"]);

//if($result[0]["type"]=="admin")

    
 



    return                $this->panel();

  

        }   

 



    

}else {

  return  $this->load->view("panel/login","Gündem ", $data,"login"); 

} 
} else {

  return  $this->load->view("panel/login","Gündem ", $data,"login"); 

}   

        

        



        }

    

     function panel(){
$data=array();


if(Session::get('login')==TRUE){

 $this->load->view("panel/index","Gündem ", $data,"admin"); 

     }else

{

$this->login();         

}

        

    }

   

    

//    public function loginform(){

//       

//        $this->load->view("panel/login","Gündem ", $data,"login");      

//        

//    }

      public function cikis(){

        Session::init();

        Session::destroy();

       header('Location: ' .ADRES);

    }

    

        public function allnews(){

        Session::init();

        Session::destroy();

       header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

     

     

}



