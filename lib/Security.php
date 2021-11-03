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

class Security{

public static function is_ssl() {
   if ( isset($_SERVER['HTTPS']) ) {
       if ( 'on' == strtolower($_SERVER['HTTPS']) )
           return true;
       if ( '1' == $_SERVER['HTTPS'] )
           return true;
   } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' ==
$_SERVER['SERVER_PORT'] ) ) {
       return true;
   }
   return false;
}
public static function detectBot($USER_AGENT) {
$crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
$crawlers = explode("|", $crawlers_agents);
if(is_array($crawlers)) {
foreach($crawlers as $crawler) {
if (strpos(strtolower($USER_AGENT), trim($crawler)) !== false) {
return true;
}
}
}
return false;
} 


  public static function code(){



    $img= include( dirname(__FILE__) . DIRECTORY_SEPARATOR . '../inc/captcha/contact.php'); 

  

    echo "güvenlik kodumuz =".Session::get("random_code");

   

    }

  public static function passid($length = 24) {



    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789";

    $validCharNumber = strlen($validCharacters);

    $result = "";



   for ($i = 0; $i < $length; $i++) {



     $index = mt_rand(0, $validCharNumber - 1);



        $result .= $validCharacters[$index];



   }



   Session::set("passid", $result);



return $result;



}

 



    


  public static function Userip(){

        

         if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {

        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {

            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);

            return trim($addr[0]);

        } else {

            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        }

    }

    else {

        return $_SERVER['REMOTE_ADDR'];

    }

        

    }

    

public static function Browser()
    
{
     $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
   $platform = 'Unknown';
    $version= "";
  //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {

        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
       $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
// Next get the name of the useragent yes seperately and for good reason

    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
       $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
   } 

    elseif(preg_match('/Chrome/i',$u_agent)) 

    { 

        $bname = 'Google Chrome'; 

        $ub = "Chrome"; 

    } 

    elseif(preg_match('/Safari/i',$u_agent)) 

    { 

        $bname = 'Apple Safari'; 

        $ub = "Safari"; 

    } 

    elseif(preg_match('/Opera/i',$u_agent)) 

    { 

        $bname = 'Opera'; 

        $ub = "Opera"; 

    } 

    elseif(preg_match('/Netscape/i',$u_agent)) 

    { 

        $bname = 'Netscape'; 

        $ub = "Netscape"; 

    } 

    

    // finally get the correct version number

    $known = array('Version', $ub, 'other');

    $pattern = '#(?<browser>' . join('|', $known) .

    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

    if (!preg_match_all($pattern, $u_agent, $matches)) {

        // we have no matching number just continue

    }

    

    // see how many we have

    $i = count($matches['browser']);

    if ($i != 1) {

        //we will have two since we are not using 'other' argument yet

        //see if version is before or after the name

        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){

            $version= $matches['version'][0];

        }

        else {

            $version= $matches['version'][1];

        }

    }

    else {

        $version= $matches['version'][0];

    }

    

    // check if we have a number

    if ($version==null || $version=="") {$version="?";}

    

    return array(

        'userAgent' => $u_agent,

        'tarayici'      => $bname,

        'versiyon'   => $version,

        'platform'  => $platform,

        'pattern'    => $pattern

    );



}

    

  public static function sefurl($s){ 

 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');

 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');

 $s = str_replace($tr,$eng,$s);

 $s = strtolower($s);

 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);

 $s = preg_replace('/\s+/', '-', $s);

 $s = preg_replace('|-+|', '-', $s);

 $s = preg_replace('/#/', '', $s);

 $s = str_replace('.', '.', $s);

 $s = trim($s, '-');

 $s = htmlspecialchars(strip_tags(urldecode(addslashes(stripslashes(stripslashes(trim(htmlspecialchars_decode($s))))))));

 return $s;

    }

    

    

  public static function search(){

        Session::set("searchdt", Time::today());

                



    }

    

  public static function maketag($aranan){

          $aranan= trim($aranan);

       $aranan = preg_replace('/\s+/',' ',$aranan);

       $bul=array(' '); 

    $degis=array(','); 

    $aranan=str_replace($bul,$degis,$aranan);

     

    return $tag = explode(',',$aranan);



    }

    

  public static function abc123tr($text){

         $text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]- / ", "", $text);

         return$text;

    }

    

    

  public static function convertsize($size)

  {

     $unit=array('B','K','M','G','T','P');

     return @round($size/pow(1024,($i=floor(log($size,1024)))),2).''.$unit[$i];

  }

    

  public static function checkmemory($size){

     

  

     $type=substr($size , -1);

     if ($type=="M"){

         echo "boyut megabite cinsinden ";

         

         die;

     }else {

         echo "megabite değil !";

     }

      

  }

  

  public static function images($url,$type)

{

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);

    // don't download content

    curl_setopt($ch, CURLOPT_NOBODY, 1);

    curl_setopt($ch, CURLOPT_FAILONERROR, 1);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    if(curl_exec($ch)!==FALSE)

    {

         return   $url;

    }

    else

    {

       

        return ADRES.'/content/images/noimg.png';

    }

}

  public static function clearsqlinj($mVar){

    if(is_array($mVar)){

        foreach($mVar as $gVal => $gVar){

            if(!is_array($gVar)){

                    $mVar[$gVal] = htmlspecialchars(strip_tags(urldecode(addslashes(stripslashes(stripslashes(trim(htmlspecialchars_decode($gVar))))))));  // -> Dizi olmadığını fark edip temizledik.

            }else{

                    $mVar[$gVal] = clearMethod($gVar);

            }

        }

    }else{

        $mVar = htmlspecialchars(strip_tags(urldecode(addslashes(stripslashes(stripslashes(trim(htmlspecialchars_decode($mVar)))))))); // -> Dizi olmadığını fark edip temizledik.

    }

    return $mVar;

   



}

 



  public static function loginfailed($email){ 

    $mesaj=  Response::loginerror($email);

 $mailer= new Mailer('no-reply@vukuat.com','Vukuat.Com',$email,$name='',$subject='Hatalı şifre.',$mesaj);    

}

public function forgot($email,$key){ 

    $mesaj=  Response::forgot($email,$key);

 $mailer= new Mailer('no-reply@vukuat.com','Vukuat.Com',$email,$name='',$subject='Şifremi unuttum',$mesaj);    

}

    

}



