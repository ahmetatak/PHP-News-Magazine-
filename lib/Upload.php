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

class Upload {

    

    public function __construct() {



    }



    







    public static function images($start){

    

 if(Session::get("login")==true) {  

        

if(isset($start)) {

    

    $today=  Zaman::gunayyil();

    $kind="news";

$filename=$_FILES['dosya']['name'];

 $filetype=$_FILES['dosya']['type'];

 $filename = strtolower($filename);

 $filetype = strtolower($filetype);



 //check if contain php and kill it 

 $pos = strpos($filename,'php');

 if(!($pos === false)) {

  die('error');

 }









 //get the file ext



 $file_ext = strrchr($filename, '.');





 //check if its allowed or not

 $whitelist = array(".jpg",".jpeg",".gif",".png"); 

 if (!(in_array($file_ext, $whitelist))) {

    die('not allowed extension,please upload images only');

 }





 //check upload type

 $pos = strpos($filetype,'image');

 if($pos === false) {

  die('error 1');

 }

 $imageinfo = getimagesize($_FILES['dosya']['tmp_name']);

 if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg'&& $imageinfo['mime']      != 'image/jpg'&& $imageinfo['mime'] != 'image/png') {

   die('error 2');

 }

//check double file type (image with comment)

if(substr_count($filetype, '/')>1){

die('error 3');

}



 // upload to upload direcory 

 $uploaddir ='upload/images/'.$kind.'/'.$today.'/' ;



if (file_exists($uploaddir)) {  

} else {  

    mkdir( $uploaddir, 0777);  

}  
$f=url::sefurl($_FILES['dosya']['name']);
  //change the image name
 
 $uploadfile = $uploaddir . basename($today."_".$f);

if(!function_exists('ImageCreate'))

    fatal_error('Error: Server does not support PHP image generation') ;
 

  if (move_uploaded_file($_FILES['dosya']['tmp_name'], $uploadfile)) {

 echo "<img style=\"max-height:150px; max-width:150px;\" id=\"upload_id\" src=\" ".ADRES."/".$uploadfile."\"><br />";

  

 echo "adres: <input type=\"text\" value=\"/".$uploadfile."\"> ";



 

  } else {

   echo "Resim yüklenemedi !";

  }

}

}else{

echo "giriş yapılmamış !";

}//session

         

    }

    

    public function fonts($fontname){

        

$fontDirs = dirname(__FILE__) . DIRECTORY_SEPARATOR . '../inc/fonts/'.$fontname.'';   

return $fontDirs;

    }

    

    

    

}