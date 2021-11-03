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

class Yorum extends Controller {

    protected $sefurl;

    protected $commtype;

    protected $dataid;

    protected $answer;

    protected $userid;

    protected $fullname;

    protected $nick;

    protected $email;

    protected $hideemail;

    protected $comment;

    protected $date;

    protected $ip;

    protected $statu;

    function __construct($controller, $method, $data) {

        parent::__construct();



 }

 public function ekle($controller, $method, $data){

 if (Session::get("userlogin")==false){

     echo '<p class="text-danger">Üye girişi yapmanız gerekir</p>';

 }else{

  $parca = explode("/", $data);



$sessionid= $_POST["sessionid"];

if($sessionid!==  session_id())

die('<p class="text-danger">Üzgünüz form bilgileri başka bir adres üzerinden kabul edilmiyor.</p>');

     $this->sefurl= Security::sefurl(Security::clearsqlinj($data));  

     

     

     

     

$yorum_model = $this->load->model("yorum");







$data = array(

":url" => $this->sefurl,

":statu" => 1,

);

$result = $yorum_model->haber($data);



 if ($result==true){

#statu durumunu kontrol edelim



                $this->statu=$result[0]["comment"];

                $this->dataid=$result[0]["id"];

                

if ($this->statu==false)

{

die('<p class="text-danger">Bu haber yoruma kapalıdır !</p>');

}

#### form kontrolü 

$form = $this->load->model("form");

$form   ->post('text')

        ->isEmpty('Yorum') 

        ->length('Yorum',4,200); 

$form   ->post('answer')

        ->length('Cevap',0,100);

     $form   ->post('hideemail')

        ->length('Cevap',0,100); 

       $form   ->post('captcha')

                ->isEmpty('Güvenlik kodu')

                ->length('Güvenlik kodu',0,6)

                ->captcha('Güvenlik kodu');







//şimfilik boşta olan değerler

                  

//





#######membername 

if($form->submit()){

 

    if(Session::get("userid")!==false or Session::get("username")!==False ){

$this->fullname=Session::get("membername")." ".Session::get("membersurname");

$this->nick=Session::get("username");

$this->userid=Session::get("userid");

$this->email=Session::get("usermail");



}else{

$this->fullname="0";

$this->nick=Security::clearsqlinj($form->values['nick']);

$this->userid="";

$this->email="";

$this->hideemail="1";

}

                    

$this->hideemail=Security::clearsqlinj($form->values['hideemail']);

if($this->hideemail=="ok")

    $this->hideemail=1;

else

    $this->hideemail=0;

  $this->answer=Security::clearsqlinj($form->values['answer']);



$this->comment =  Security::clearsqlinj($form->values['text']);

 $this->date=  Time::today();

 $this->ip =  Security::Userip();

 $this->statu="0";

    $this->commtype="news";

//    if($this->dataid==false or $this->nick==false or $this->comment==false or $this->commtype==false or $this->ip==false or $this->date==false)

//    die('<p class="text-danger">Yorum eklenemedi#</p>');

$data = array(

"commtype" => $this->commtype,

"dataid" => $this->dataid,

"answer" => $this->answer,

"userid" => $this->userid,

"fullname" => $this->fullname,

"nick" => $this->nick,

"email" => $this->email,

"hideemail" => $this->hideemail,

"comment" => $this->comment,

"date" => $this->date,

"ip" => $this->ip,

"statu" => $this->statu,

 

);  

   $result = $yorum_model->yorumekle($data);



    if ($result==TRUE){

    die('<p class="text-success">Yorum eklendi. onaylandıktan sonra yayınlanacaktır.  </p>');    

    }else {

        

//echo  $this->commtype."<br>";

//echo  $this->dataid."<br>";

//echo $this->answer."<br>";

//echo $this->userid."<br>";

//echo $this->fullname."<br>";

//echo $this->nick."<br>";

//echo $this->email."<br>";

//echo $this->hideemail."<br>";

//echo $this->comment."<br>";

//echo $this->date."<br>";

//echo $this->ip."<br>";

//echo $this->statu."<br>";    



       

        

        

        die('<p class="text-danger">Yorum eklenemedi</p>');

    }







 } else{

            $data["error"] = $form->errors;

            

        }

                    

        if(isset($data["error"])){



            foreach ($data["error"] as $key => $value) {

                switch($key){

                    case 'captcha':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    case 'answer':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    case 'text':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                  

                    default:

                        break;

                }

            }

 }

     

 }// haber varsa 

    

 }//else   



 }//ekle

    



     

}//class



