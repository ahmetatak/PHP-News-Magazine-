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

class Adres{
    private $newurl;
    private $controller;
    private $method;
    private $id;
    private $data;
    private $filename;
    public function __construct($url) {
        $this->git($url);
    }

    public function git($url=0){

  $parca = explode("/", $url);


     $this->controller = ''.strtolower($parca[0]).'';
if(isset($parca[1]))
     $this->method   = ''.strtolower($parca[1]).'';
if(isset($parca[2]))
     $this->id    = ''.strtolower($parca[2]).'';
if(isset($parca[3]))
     $this->data = ''.strtolower($parca[3]).'';
   
  
  if (empty($this->controller)){
      $this->controller="home";
      $this->method="index";
      $this->id="";
      $this->data="";
  }
 # kon trolu çağırma işlemine başla bebek !
if (substr($this->controller, 0, 3)=="cp-"){
$this->controller =  substr($this->controller, 3); 
$filename = 'app/controllers/cpanel/C_'.$this->controller.'.php';
}else {
$filename = 'app/controllers/C_'.$this->controller.'.php';       
 }
if (file_exists($filename)) {

    require_once  $filename;



if (class_exists($this->controller)) {

$c = new $this->controller($this->controller,$this->method,$this->id,$this->data);


}else { 
#echo "kontroller bulundu fakat class adına erişilemiyor.";
               
}
if (method_exists($this->controller,$this->method)) {

//$c = new $controller($controller,$method,$id,$text);

	$method =$this->method;

	 $c->$method($this->controller,$this->method,$this->id,$this->data);

		

}else{
    #echo "method bulunamadı";
    #Error::er404(); 
}
}else {
#echo "kontroller dosyası bulunamadı !";
  $data = "haber/detay/".$_GET["url"]; 
  
 return $this->git($data);
    
}
}










}
