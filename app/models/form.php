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



class Model_form extends Model{ 
    public $currentValue;
    public $values = array();
    public $errors = array();
    
    public function __construct() {
        parent::__construct();
         
       //   echo "burasi model sayfasi ";
        
     
    }
    public function post($key){
        $this->values[$key]     = trim($_POST[$key]);
        $this->currentValue    = $key;
        return $this;
    }
    public function isEmpty($postname=""){
        if(empty($this->values[$this->currentValue])){
            $message='<strong>'.$postname.'</strong> alanı boş olmamalıdır.';
            $this->errors[$this->currentValue]['empty'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.  Response::Error($message, "").'</label>';
        }
        return $this;
    }
     public function isInt($postname=""){
        
       if(ctype_digit($this->values[$this->currentValue])==FALSE){
            $message='<strong>'.$postname.'</strong> alanı için yanlızca numara girilmeli.  ';
            $this->errors[$this->currentValue]['isInt'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::Error($message, "").'</label>';
        }
        return $this; 
    }  
    public function length($postname="",$min = 0, $max){
 $this->values[$this->currentValue] = str_replace("\r\n",'', $this->values[$this->currentValue]);
        if(strlen(utf8_decode($this->values[$this->currentValue])) < $min OR strlen(utf8_decode($this->values[$this->currentValue])) > $max){
            $message=' Lütfen <strong>'.$postname.'</strong> alanı için ' . $min . ' ve '. $max . ' karakter arasında bir yazı giriniz.  ';
            $this->errors[$this->currentValue]['length'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';
        }
        return $this;
    }
    public function isMail($postname="") {
        if(!filter_var($this->values[$this->currentValue], FILTER_VALIDATE_EMAIL)){
            $message='Lütfen geçerli bir mail adresi giriniz.';
            $this->errors[$this->currentValue]['mail'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';
        }
    }
        public function captcha($postname=""){
if($this->values[$this->currentValue]!==Session::get("guvenlik")){
            $message=' Lütfen <strong>'.$postname.'</strong> alanı doğru bir şekilde giriniz.';
            $this->errors[$this->currentValue]['captcha'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';
        }
        return $this;
    }
            public function issame($post1,$post2,$valu1,$valu2){
       
if ($valu1!=$valu2)
{
 
            $message='Verilen değerler farklı ! '.$post1.' alanı ile '.$post2.' aynı olmalı! <br>';
            $this->errors[$this->currentValue]['issame'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';
        }else 
 
    
        return $this;
    }
               
    
                  public function username($postname=""){
        $valu=$this->values[$this->currentValue];
if (!preg_match('/^[A-Za-z0-9_]+$/', $valu))
{
            $message=' Lütfen <strong>'.$postname.'</strong>   bölümü için verilen şartları karşıyalan değer giriniz. Kullanıcı adı türkçe karakter içermemesi ve yalnızca "_" özel karakter içerebileceğini unutmayın.';
            $this->errors[$this->currentValue]['user'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';
        }else 
 
    
        return $this;
    }  
    
    
       public function finduser($postname=""){
              $valu=$this->values[$this->currentValue];
               $data = array(
            ":user" => $valu,
        );
        $sql = "SELECT id FROM Users_VT  WHERE nick=:user";
        $count = $this->db->affectedRows($sql,$data);
        
        if($count==true){
           
             $message='Seçtiğiniz kullanıcı adı "<strong>'.$valu.'</strong>" kullanılmaktadır !';
            $this->errors[$this->currentValue]['finduser'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';

        }else{
  return $this;
        }
    }
    public function findmail($postname=""){
              $valu=$this->values[$this->currentValue];
               $data = array(
            ":email" => $valu,
        );
        $sql = "SELECT id FROM Users_VT  WHERE email=:email";
        $count = $this->db->affectedRows($sql,$data);
        
        if($count==true){
           
             $message='Seçtiğiniz e-posta adresi "<strong>'.$valu.'</strong>" kullanılmaktadır !';
            $this->errors[$this->currentValue]['findmail'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';

        }else{
  return $this;
        }
    }
    
    public function submit(){
        if(empty($this->errors)){
            return true;
        }else{
            return false;
        }
    }
}