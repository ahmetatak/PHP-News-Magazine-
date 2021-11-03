<?php
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
class url 
{
 public static function sefurl($s){ 

 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?','"');

 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','');

 $s = str_replace($tr,$eng,stripslashes($s));
 preg_match('/[^a-zA-z0-9şğüçıöÖÇŞĞÜİ. \-]/', $s);
$s=str_replace(
		array(
			"'", '\"'
			),
		array(
			"-", "-"
		),
		$s
	);
 $s = strtolower($s);

 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);

 $s = preg_replace('/\s+/', '-', $s);

 $s = preg_replace('|-+|', '-', $s);

 $s = preg_replace('/#/', '', $s);

 $s = str_replace('.', '.', $s);

 $s = trim($s, '-');

 $s = htmlspecialchars(strip_tags(urldecode(addslashes(stripslashes(stripslashes(trim(htmlspecialchars_decode($s))))))));
 $s= preg_replace("/\\\/",'', $s);
 return $s;

    }

    
function __construct($controller,$method,$id,$text){

echo $this->cut_the_url(strtolower($controller),strtolower($method),$id,$text);
}

///
private function cut_the_url($controller,$method,$id,$text) { 

$filename = 'app/controllers/C_'.$controller.'.php';

if (file_exists($filename)) {
require 'app/controllers/C_'.$controller.'.php';

if (class_exists($controller)) {
$c = new $controller();
	
	
		
}else {return false;}
if (method_exists($controller,$method)) {
//$c = new $controller($controller,$method,$id,$text);
	
	echo $c->$method();
		
}else {return false;}

} else {// if file is not exists
    return false;
	
}






 }
///



}