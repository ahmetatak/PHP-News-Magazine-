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
class uye extends Controller {

private $userid;

private $nick;

private $name;

private $surname;

private $email;

private $pass;

private $repass;

private $statu; 

private $userstatu; 

private $code;

private $codestatu;

private $security;

private $accounttype;

private $remember;

private $clicked;

private $today;

private $userip;

private $log;

private $key;

        function __construct($controller, $method, $data) {

        parent::__construct();



//if(Session::get("memberlogin")==false)

//    $this->login ();

       

        

        

        

   }  

   public function giris(){

//     



$uye_model = $this->load->model("uye");


if(isset($_POST["email"]))
$this->email =  Security::clearsqlinj($_POST["email"]);
if(isset($_POST["password"]))
$this->pass =Security::clearsqlinj(md5($_POST["password"]));
if(isset($_POST["start"]))
$this->clicked =Security::clearsqlinj($_POST["start"]);       

        

  if ($this->clicked){

 

//// Session::set("loginfalse", 0);

//  Session::set("loginerror", 0);  #hatayı sıfırlayalım 

$data["ayar"] = $uye_model->uyeayari();

foreach ($data["ayar"] as $key => $setuser) {

               $login=$setuser["login"]; #uye alımı açık mı kapalı mı

               $regtype =$setuser["regtype"]; #uye kaydı ne şekilde olacağını belirtiyoruz.

}  

if($login==false){

    

$message= "Üye girişlerine izin verilmiyor. Kişisel olarak algılamayın.";   

  $data["mesaj"]= Response::danger($message);

  

  $this->load->view("uye/giris","Üye girişi", $data,"layout");

  die;    

    

}

      

   $data = array(

            ":eposta" => $this->email,

            ":sifre" => $this->pass,

        );

        // Veri tabanı işlemleri

        

        $result = $uye_model->girisyap($data);

 # eğer kullancı 3 ten fazla yanlış giriş yapmaya çalıştıysa       

if(Session::get("loginerror")>2){

    $this->security =htmlspecialchars($_POST["captcha"]); 

 if (Session::get("guvenlik")!==$this->security){

 $message= "Güvenlik kodunu yanlış girdiniz !";     

  $data["mesaj"]= Response::danger($message);

    $this->load->view("uye/giris","Üye girişi", $data,"layout");

  die;

 }   

    

}     

        

        if($result == false){

################### Eğer üç defa yanlış giriş yapıldıysa bunu hesap sahibine bildir.

$data = array(":email" => $this->email,);  

$result = $uye_model->findmail($data);

if($result==true){

    Session::set("loginfalse", Session::get("loginfalse")+1);

} 

$range = range(2, 10);

//Session::set("blocked", 15);

if(Session::get("loginfalse")>2) {

echo Security::loginfailed($this->email); 

}            

##################################            

$message= "Giriş bilgileri hatalı !"; 

Session::set("loginerror", Session::get("loginerror")+1);



  $data["mesaj"]= Response::danger($message);

  

  $this->load->view("uye/giris","Üye girişi", $data,"layout");

  exit;

       

  

}else{

Session::set("loginfalse", 0);

Session::set("loginerror", 0);  #hatayı sıfırlayalım 

$this->userid=$result[0]["id"];

$this->nick=$result[0]["nick"];

$this->name=$result[0]["name"];

$this->surname=$result[0]["surname"];

$this->email=$result[0]["email"];

$this->statu=$result[0]["statu"];

$this->accounttype=$result[0]["acctype"];

$this->code=$result[0]["regkeystatu"];



//if($result[0]["type"]=="admin")

if($this->statu==2){

$message= "Üzgünüz ! bu hesap silinmiş..!"; 

$data["mesaj"]= Response::danger($message);   

$this->load->view("uye/giris","Üye girişi", $data,"layout");

die;

}

if($this->statu=FALSE){

$message= "Üzgünüz ! üyeliğiniz aktif olmadığı için girişinize izin verilmiyor.!"; 

$data["mesaj"]= Response::danger($message);   

}else{



    

 #son giriş tarih ve ip adreslerini kayıt edelim

$this->userip= Security::Userip();

$this->today= Date(Time());

#log kayıtlarının tutulacağı bölüm, ip adresleri, tarayıcı adı, tarih ve zamanlar

# burada satır satır halinde tutulacak

$this->log= "Kullancı tarayıcısı : <browser>".Security::Browser()."</browser>";

    $data = array(

            "lastlogindt" => $this->today,

            "lastip" => $this->userip,

        );

 

   $result = $uye_model->setlog($data,  $this->userid);

# log kayıtları alınmadan üye girişine izin vermeyin !   

  if ($result==true)

  {

      Session::set("userlogin", true);

Session::set("usersessionid", session_id());

   Session::set("userid", $this->userid);

Session::set("username",  $this->nick);     

 Session::set("usermail", $this->email);

  Session::set("membername", $this->name);

    Session::set("membersurname", $this->surname);

$message= "Tebrikler başarılı bir şekilde giriş yapıldı.<br> kullanıcı adınız:".Session::get("username")."<br>E-posta adresiniz:".Session::get("usermail")."";     

  $data["mesaj"]= Response::okay($message, ""); 

 $this->load->view("uye/panel","Üye girişi", $data,"user");     

  }

 ###############



} #uyelik onaylanmışsa





}#giriş bilgileri doğru ise.   

}else {
if(!isset($_POST["start"]))
    $data=array();
  return  $this->load->view("uye/giris","Gündem ", $data,"layout"); 

}      

 }

    

     function panel(){

  if(Session::get("userlogin")==true){

   

$this->load->view("uye/panel","Gündem ", $data,"user");             

 

     }else {

         $this->giris();         

 

     }

        

    }

    

     function sifre($c,$m,$d){

$this->key=  Security::clearsqlinj($_POST["start"]);

#########get the post

if ($this->key=="ok")

    {

 $sessionid=  Security::clearsqlinj($d);

 #eğer kullanıcı kimliği yanlışsa 

if($sessionid!=Session::get("id")){

    $this->load->view("uye/sifre","Şifremi unuttum ", $data,"layout"); 

die;} #

$this->email=  Security::clearsqlinj($_POST["email"]);

$this->security=  Security::clearsqlinj($_POST["captcha"]);

 if (Session::get("guvenlik")!==$this->security){

 $message= "Güvenlik kodunu yanlış girdiniz !";     

  $data["mesaj"]= Response::danger($message);

 }else {

$form = $this->load->model("form");

$form   ->post('email')

                ->isEmpty('E-posta')

                ->length('E-posta',2,100)

                ->isMail('E-posta');



if($form->submit()){

     $uye_model = $this->load->model("uye");

    $this->key=$this->forgot($this->email);

    $result = $uye_model->lookformail($this->email);

    if($result==false){

 $message= "E-posta adresiniz yanlış";     

 $data["mesaj"]= Response::error($message,"");

   $this->load->view("uye/sifre","Şifremi unuttum ", $data,"layout");    

   die;

    }

 if($this->key){

     $this->today=  Time::today();  

  $this->userip=  Security::Userip(); 

     

        $data = array("email" => $this->email,);

        $data["uye"] = $uye_model->getuser($data);

             foreach ($data["uye"] as $key => $user) {

         

          $this->userid=$user["id"];

          $this->statu=$user["statu"];

          

          

          #yalnızca uye aktif ise şifre değiştirme anahtarı üret

          if($this->statu==1){

                 $data = array(

                      

              "forgotpass"   =>  $this->key,

              "forgotpassdt" =>  $this->today,

              "forgotpassip" =>  $this->userip,

              );

$result = $uye_model->uyedegis($data,  $this->userid);          

 if($result==TRUE){

Security::forgot($this->email,$this->key);

$message= "E-posta adresinize şifrenizi değiştirebilmeniz için bir kod gönderdik. Lütfen '<strong>".$this->email."</strong>' e-posta adresinize gönderilen kodu onaylatın.";     

  $data["mesaj"]= Response::okay($message, "");      

     }else {

$message= "Veridiğiniz e-posta adresi şifre değişikliği işlemi gerçekleşmedi. Lütfen e-posta adresinizi kontrol edip tekrar deneyiniz. Eğer aynı hatayı alıyorsanız yönetici ile iletişime geçiniz.";     

 $data["mesaj"]= Response::error($message,""); 

          

     }

 

          }  else{     

  $message= "E-posta adresiniz yanlış";     

 $data["mesaj"]= Response::error($message,"");

          }



      }

      



 }       

        } else{

            $data["error"] = $form->errors;

            

        }

     

     

     

 } 



}else{

 ## Şifreyi al   

if($_GET["email"] and $_GET["key"]){

    $this->email =  Security::clearsqlinj($_GET["email"]);

    $this->key   =  Security::clearsqlinj($_GET["key"]);

    

if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))

   {

 $message= "E-posta adresiniz yanlış";     

 $data["mesaj"]= Response::error($message,"");

 $this->load->view("uye/giris","Şifremi unuttum ", $data,"layout"); 

   die;

   }

   $uye_model = $this->load->model("uye");

 $data = array(

            ":email" => $this->email,

            ":key" => $this->key,

        );   

 $result = $uye_model->sifrebul($data);

 if($result==FALSE){

   $message= "Şifre değiştirme işlemi gerçekleşmiyor. E-posta adresi veya onay kodu hatalı";     

 $data["mesaj"]= Response::error($message,"");

 $this->load->view("uye/giris","Şifremi unuttum ", $data,"layout"); 

 }else{

     $data["useremail"]=$this->email;

     $data["key"]=$this->key;

       

$this->load->view("uye/yenisifre","Şifreyi değiştir ", $data,"layout");        

            

      

 } 

 

 $this->load->view("uye/giris","Şifremi unuttum ", $data,"layout");   

}    

    

    

####### şifre alındı    

}



$this->load->view("uye/sifre","Şifremi unuttum ", $data,"layout");             

 

           

 

     

        

    }

    

 

      public function cikis(){

          $address=  Session::get("adres");

 

        unset($_SESSION['userlogin']);

        unset($_SESSION['userid']);

        unset($_SESSION['membername']);

        unset($_SESSION['userlogin']);

       header('Location: ' . $address);

    }

    

        public function ol(){

 $uye_model = $this->load->model("uye");

            $data["ayar"] = $uye_model->uyeayari();

             foreach ($data["ayar"] as $key => $setuser) {

               $signup=$setuser["reg"]; #uye alımı açık mı kapalı mı

               $regtype =$setuser["regtype"]; #uye kaydı ne şekilde olacağını belirtiyoruz.

             }

             #uye alımı kapalıysa 

             if($signup==false){

                 

$mesaj="Üye kayıt işlemi şuan kapalı olduğundan dolayı başvuru formunuz kayıt edilmeyecektir.";

 $data["mesaj"]=Response::danger($mesaj); 

            $this->load->view("uye/uyeol","Kayıt ol", $data,"news"); 

                 die;

                 

             }else{

             return  $this->load->view("uye/uyeol","Kayıt ol ", $data,"news");     

             }        



        





  

        }

        public function kayit($c, $m, $d){  

            

        $form = $this->load->model("form");

   

        $form   ->post('email')

                ->isEmpty('E-posta')

                ->length('E-posta',2,100)

                ->isMail('E-posta');

        $form   ->post('email')

                ->findmail('E-posta adı');

        $form   ->post('name')

                ->isEmpty('İsim')

                ->length('İsim',2,100);

         $form  ->post('surname')

                ->isEmpty('Soyisim')

                ->length('Soyisim',2,100);

         $form  ->post('repassword')

                ->isEmpty('Şifre (tekrar)')

                ->length('Şifre (tekrar) ',6,50);

         $form  ->post('password')

                ->isEmpty('Şifre')

                ->length('Şifre',6,50)

                ->issame("Şifre","Şifre (tekrar)",$form->values['password'],$form->values['repassword']);

     

        $form   ->post('captcha')

                ->isEmpty('Güvenlik kodu')

                ->length('Güvenlik kodu',0,6)

                ->captcha('Güvenlik kodu');

        $form   ->post('nick')

                ->isEmpty('kullanıcı adı')

                ->length('Kullanıcı adı',4,25)

                ->username('Kullanıcı adı');

        $form   ->post('nick')

                ->finduser('Kullanıcı adı');

        

        if($form->submit()){

   
 

            $uye_model = $this->load->model("uye");

        $data["ayar"] = $uye_model->uyeayari();

             foreach ($data["ayar"] as $key => $setuser) {

               $signup=$setuser["reg"]; #uye alımı açık mı kapalı mı

               $regtype =$setuser["regtype"]; #uye kaydı ne şekilde olacağını belirtiyoruz.

             }

             #uye alımı kapalıysa 

             if($signup==false){

                 

$mesaj="Üye kayıt işlemi şuan kapalı olduğundan dolayı başvuru formunuz kayıt edilmemiştir.";

 $data["mesaj"]=Response::danger($mesaj); 

            $this->load->view("uye/uyeol","Kayıt ol", $data,"news"); 

                 die;

                 

             }else { #uye alımı kapalı değilse 

 ###formları süzgeçten geçirelim

                 $d=  Security::clearsqlinj($d);

if($d!=Session::get("id"))

    die;

 $nick     =   $form->values['nick'];                

 $name     =   $form->values['name'];

 $surname  =   $form->values['surname'];                

 $email    =   $form->values['email'];

 $password =   md5($form->values['password']); 

 $rpassword=   $form->values['repassword']; 

 $regdt = Time::today();

 $regip = Security::Userip();

 ###

       

  if ($regtype=="1"){ #uye kayıt şekli e-posta aktivasyon kodu ile

    $regmessage="Belirttiğiniz <strong>'$email'</strong> e-posta adresine aktivasyon kodu gönderildi. 45 saat içinde aktif edilmesi gerekiyor."; 

   $activasyon= $this->sendactivation("20",$form->values['email']);

   $keystatu="0";

   $userstatu=0;

  }elseif($regtype=="2")

  {

 $regmessage="Üyeliğiniz yönetici onayından sonra aktif edilecek. Yönetici onaylandığında belirttiğiniz <strong>'$email'</strong> e-posta adresine e-posta gönderilecektir."; 

$userstatu=0;

   $activasyon="2";

   $keystatu="1";

  }elseif($regtype=="0")

  {



  $regmessage="Üyeliğiniz aktif durumda ! Hemen giriş yapabilirsiniz.";     

   $userstatu="1";

   $activasyon="0";

   $keystatu="1";

  }

  ###############verileri kayıt edelim.

  $accounttype="user";



 

   $datam = array(

            "nick"        => $nick,

            "name"        => $name,

            "surname"     => $surname,

            "pass"        => $password,

            "email"       => $email, 

            "statu"       => $userstatu,

            "acctype"     => $accounttype,

            "registerip"  => $regip,

            "regdate"     => $regdt,

            "regkey"      => $activasyon,

            "regkeystatu" => $keystatu,

        );

    $result = $uye_model->uyeekle($datam);



    if ($result==TRUE){

 

        $mesaj="Abonelik kaydınız başarılı bir şekilde kayıt edilmiştir. $regmessage";

 $data["mesaj"]=Response::okay($mesaj,""); 



    }else{ 

         $mesaj="Abonelik kaydınız kayıt edilemedi ! Lütfen kayıt formunu tekrar doldurunuz. Eğer tekrar aynı hatayı alırsanız yönetici ile iletişim kurunuz.";

 $data["mesaj"]=Response::error($mesaj,"");        

    }

  #################



            

             } #uye alımı kapalıysa

        }else { #formlarda hata varsa...

            $data["error"] = $form->errors;

        }

return  $this->load->view("uye/uyeol","Kayıt ol", $data,"news");             

        }

     # Aktivasyon kodunu oluştur ve e-posta adresine yolla !

        private function sendactivation($uzunluk,$email){

            $uye_model = $this->load->model("uye");

 $uzunluk="11";



$karakterler = "1234567890abcdefghijklmnopqrstuvwxyz";

for($i=0;$i<$uzunluk;$i++)

{	 

$key .= $karakterler{rand(0,35)};



$getkey = array(

            ":key" => $key,

        );



 $result = $uye_model->findkey($getkey);

 if($result==true){

     continue;   

 }



   }

   $mail = new Mail();

$mail->setTo($email, 'Vukuat ')

     ->setSubject('Aktivasyon kodu')

     ->setFrom('no-reply@vukuat.com', 'Vukuat.com')

     ->addMailHeader('Reply-To', 'no-reply@vukuat.com', 'Vukuat.com')

     ->addMailHeader('Cc', 'info@vukuat.com', 'İletişim Adresi')

     ->addMailHeader('Bcc', 'info@vukuat.com', 'İletişim Adresi')

     ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())

     ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')

     ->setMessage('<strong>Vukuat.Com Aktivasyon kodu</strong><br><br><br>Aktivasyon kodunuz : <a href="'.Session::get("adres").'/uye/aktivasyon/'.$key.'/">'.$key.'</a>')

     ->setWrap(100);

$send = $mail->send();



            return $key;

            

     

        } #aktivasyon kodu sonu

      

        

 ####################################Aktivasyon kodu       

     public function aktivasyon($c,$m,$d){ 

         $uye_model = $this->load->model("uye");

         

   if (empty($d))

   {

return false;      

   }else{

       $this->code=  Security::clearsqlinj($d);

       $data = array(

            ":key" => $this->code,

        );

        $result = $uye_model->findkey($data);

        if($result==true)

        {

            

          $data["aktivasyon"] = $uye_model->aktivasyon($data);

          foreach ($data["aktivasyon"] as $key =>$valu){

$this->userid= "";

$this->nick   = "";

$this->email  = "";

$this->statu  = "";

$this->code   = "";

$this->codestatu="";        

$this->userid=$valu["id"];

$this->nick   =$valu["nick"];

$this->email  =$valu["email"];

$this->statu = $valu["statu"];

$this->code   =$valu["regkey"];



$this->codestatu=$valu["regkeystatu"];

########################################Eğer hesap zaten aktif edilmişse 

if ($this->statu==1){

  $mesaj="Bu aktivasyon koduna sahip olan üyelik hesabı, aktif olduğundan dolayı tekrar aktif edilemez! ";

 $data["mesaj"]=Response::error($mesaj,""); 

   $this->load->view("uye/panel",$this->nick, $data,"user");

   die;

}

################################### Eğer hesap silinmişse 

if ($this->statu ==2){

  $mesaj="Hesabınız silindiği için aktivasyon işlemi gerçekleşmedi!";

 $data["mesaj"]=Response::error($mesaj,""); 

   $this->load->view("uye/panel",$this->nick, $data,"user");

   die;

}

if ($this->statu==0){

    #aktivasyon işlemi başlasın !

    

    $this->statu="1";

    $this->codestatu="1";

    $this->today=Time::today();

    $this->userip=Security::Userip();



    ####  

 

     $data = array(

            "statu"         => $this->statu,

            "activationdt"  => $this->today,

            "activatorip"   => $this->userip,

            "regkeystatu"   => $this->codestatu,

        );

     

       

        $result = $uye_model->aktifet($data,$this->userid);

if($result==TRUE){

      $mesaj="Tebrikler Aktivasyon işlemi başarılı bir şekilde gerçekleşmiştir.";

 $data["mesaj"]=Response::okay($mesaj,""); 

   $this->load->view("uye/panel",$this->nick, $data,"user");

   die;

}else {

$mesaj="Veritabanından kaynaklanan bir hata yüzünden aktivasyon işlemi gerçekleşmedi. Lütfen yönetici ile iletişime geçiniz.";

$data["mesaj"]=Response::error($mesaj,""); 

$this->load->view("uye/panel",$this->nick, $data,"user");

die;

}

}













          }

     

        }else {

            $mesaj="Aktivasyon kodunuz yanlış. Lütfen aktivasyon kodunuzu kontrol ediniz !";

 $data["mesaj"]=Response::error($mesaj,""); 

   $this->load->view("uye/panel",$this->nick, $data,"user");  

            

        }

   } 



     }

 ####################################Aktivasyon kodu  sonu

     public function ayarlar(){

  $this->load->view("uye/panel/ayarlar","Üyelik ayarları", $data,"user");       

     }

          public function abone(){

  $this->load->view("uye/panel/abone","Haber abonelik ayarları", $data,"user");       

     }

               public function profil($c,$m,$d){

    $uye_model = $this->load->model("uye");

$this->nick=  Security::clearsqlinj($d); 



    $data = array(

            ":username" => $this->nick,

        );

        $result = $uye_model->uye($data);

        

  if ($result=False){

 

        $mesaj="Aradığın kullanıcı bulunamadı !";

 $data["mesaj"]=Response::error($mesaj,""); 

   $this->load->view("uye/panel",$this->nick, $data,"user"); 

die;

    }else{ }      

$this->load->view("uye/panel/profil",$this->nick, $data,"user"); 

     }

                    public function gizlilik(){

  $this->load->view("uye/panel/gizlilik","Gizlilik", $data,"user");       

     }

                      public function guvenlik(){

  $this->load->view("uye/panel/guvenlik","Güvenlik ayarları", $data,"user");       

     }

     

     public function forgot($email){

          $uye_model = $this->load->model("uye");

         $this->email=$email;

 $uzunluk="11";



$this->code = "1234567890abcdefghijklmnopqrstuvwxyz";

for($i=0;$i<$uzunluk;$i++)

{	 

$this->key .= $this->code{rand(0,35)};



$getkey = array(

            ":email" => $this->email,

            ":key" => $this->key,

        );



 $result = $uye_model->forgot($getkey);

 if($result==true){

     continue;   

 }



   }

   



   return $this->key;   

     }

     

     public function yenisifre(){ 

 

// $this->email =  Security::clearsqlinj($_POST["email"]);

// $this->key   =  Security::clearsqlinj($_POST["key"]);

//

//  $this->pass  =  md5($_POST["password"]);

//    $this->repass  =  md5($_POST["repassword"]);

    

    

    $form = $this->load->model("form");

    

        $form   ->post('captcha')

                ->isEmpty('Güvenlik kodu')

                ->length('Güvenlik kodu',0,6)

                ->captcha('Güvenlik kodu');

        $form   ->post('key')

                ->isEmpty('Onay kodu')

                ->length('Onay kodu',2,100);

$form   ->post('email')

                ->isEmpty('E-posta')

                ->length('E-posta',2,100)

                ->isMail('E-posta');

   $form  ->post('repassword')

                ->isEmpty('Şifre (tekrar)')

                ->length('Şifre (tekrar) ',6,50);

 $form  ->post('password')

                ->isEmpty('Şifre')

                ->length('Şifre',6,50)

                ->issame("Yeni şifre","Yeni şifre (tekrar)",$form->values['password'],$form->values['repassword']);

 



  if($form->submit()){



      $uye_model = $this->load->model("uye");

      $this->email =  Security::clearsqlinj($form->values['email']);

 $this->key   =  Security::clearsqlinj($form->values['key']);



  $this->pass  =  md5($form->values['password']);

    $this->repass  =  md5($form->values['repassword']);

 

 $data = array(

            ":email" => $this->email,

            ":key" => $this->key,

        );   

 $result = $uye_model->sifrebul($data);

 if($result==FALSE){

   $message= "Şifre değiştirme işlemi gerçekleşmiyor. E-posta adresi veya onay kodu hatalı";     

 $data["mesaj"]= Response::error($message,"");

 $this->load->view("uye/giris","Şifremi unuttum ", $data,"user"); 

 }else{

$this->userid=$result[0]["id"];

  #onaylıyoruz

  $this->statu=$result[0]["statu"];

  

  $this->today=  Time::today();

  $this->userip=  Security::Userip();

  $this->key=  $this->forgot($this->email);

       $data = array(

           "pass"   => $this->pass,

           "forgot"   => 0,

           "forgotpass"   => $this->key,

            "passeddt"  => $this->today,

            "passedip"   => $this->userip,

        );

     

       

        $result = $uye_model->uyedegis($data,$this->userid);

        if($result){

$message= "Şifreniz başarılı bir şekilde değiştirilmiştir.";     

$data["mesaj"]= Response::okay($message,"");

$this->load->view("uye/yenisifre","Şifreyi değiştir ", $data,"user");        

            

        }

 } 

     }else { #formlarda hata varsa...

            $data["error"] = $form->errors;

        }

return  $this->load->view("uye/yenisifre","Yeni şifre", $data,"news"); 

}

     

     

     

     

     

}





