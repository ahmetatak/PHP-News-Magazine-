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



class Model_form{

    public $currentValue;

    public $values = array();

    public $errors = array();

    

    public function __construct() {}

    public function post($key){

        $this->values[$key]     = trim($_POST[$key]);

        $this->currentValue    = $key;

        return $this;

    }

    public function isEmpty(){

        if(empty($this->values[$this->currentValue])){

            $message='Lütfen bu alanı boş bırakmayınız.';

            $this->errors[$this->currentValue]['empty'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';

        }

        return $this;

    }

    public function length($min = 0, $max){

        if(strlen($this->values[$this->currentValue]) < $min OR strlen($this->values[$this->currentValue]) > $max){

            $message=' Lütfen ' . $min . ' ve '. $max . ' karakter arasında bir yazı giriniz.';

            $this->errors[$this->currentValue]['length'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';

        }

        return $this;

    }

    public function isMail() {

        if(!filter_var($this->values[$this->currentValue], FILTER_VALIDATE_EMAIL)){

            $message='Lütfen geçerli bir mail adresi giriniz.';

            $this->errors[$this->currentValue]['mail'] ='<label class="col-md-12 control-label" for="'.$this->currentValue.'"> '.Response::error($message, "").'</label>';

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