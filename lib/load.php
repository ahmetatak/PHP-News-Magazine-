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
class load extends Adres{

    public function __construct() {

   

   

     

    }

    

  public static function view($method,$title, $data = false,$layout){
 
          
      
           Session::set("title", FALSE);      
Session::set("title", "$title | ". BASLIK);   

    if($data == true){

            extract($data);

        }

        if($method==false)

{

$method =  $controller;       

}

 $views = 'app/views/'.strtolower($method).'.php';

if (file_exists($views)) {

    

   

    require_once  'app/views/content/'.$layout.'.php';

  }else

      

      { return "view can not open";}

        

  }/// view 

    

    

    

    

    

  public static function model($model){

        

        

   $modelfile = 'app/models/' . strtolower($model) . '.php';



if (file_exists($modelfile )) {



    require_once  $modelfile;

        if (strpos($model, '/')) 

        {$parca = explode("/", $model);

        $model=strtolower($parca[1]);



        }

        

      $modalname   ='Model_' . strtolower($model) . '';

   return     $models = new $modalname();

        

      

}

    }

    

  public static function otherClasses($fileName){

        include "app/otherClasses/" . $fileName . ".php";

        return new $fileName();

    }

    

    

    //// main layout

  public function Layout($layoutname, $data = false){

      

 

     if($data == true){

  extract($data);

        }

        require_once  'apps/views/$layoutname.php';  

       

      

       

    }

    /////////

    

  public static function css ($url){

        

echo '



<title>'.Session::get("baslik").'</title>

<link rel="stylesheet" href="'.ADRES.'/template/basic/css/bootstrap.min.css">

<link rel="stylesheet" href="'.ADRES.'/template/basic/css/design.css"> 

<link rel="stylesheet" href="'.ADRES.'/template/basic/vukuat-font/css/vukuat.css">

<link rel="stylesheet" href="'.ADRES.'/template/basic/vukuat-font/css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="'.ADRES.'/template/basic/vukuat-font/css/vukuat-ie7.css"><![endif]-->

<script src="'.ADRES.'/template/basic/js/jquery.min.js" type="text/javascript"></script>    



     <script src="'.ADRES.'/template/basic/js/bootstrap.min.js" type="text/javascript"></script>

<script>$(document).ready(function() {

     

    $(\'a[rel="ajaxload"]\').click(function() {

 var $datainto = $(this).attr(\'data-into\') 

   var $magic ="#";

var $datainto=$magic+$datainto;

        $($datainto).empty().append("<center><div id=\'loading\'><i class=\'vukuat-icon-spin4 animate-spin vt-2x\'></i></div></center>");



           

         

          

          var $verial = $(this).attr(\'data-type\')

        $.ajax({ url: this.href, success: function(html) {

                var datatitle = $(html).filter(\'title\').text();

              var $data = $(html).find($verial);

             

            $($datainto).empty().append($data);

           

            }

    });

    return false;

    });

 

    $("#tabcontent").empty().append("<center><div id=\'loading\'><i class=\'vukuat-icon-spin4 animate-spin vt-2x\'></i></div></center>");

 var $verial = $("#load li a").attr(\'data-type\')

    $.ajax({ url: \'/yazar/liste/\', success: function(html) {

            var $data = $(html).find($verial);

           $("#tabcontent").empty().append($data);

          

    }

    });

});</script>

';

        

    

        

    }

    

   public static function editor ($url){

  

echo '  '

        . '

    <link rel="stylesheet" href="'.ADRES.'/inc/editor/css/summernote.css">  

    <script src="'.ADRES.'/inc/editor/js/summernote.js" type="text/javascript"></script>



';

        

        

        

    }

    

    

    

   public static function opencss($file){

           

   echo '<link rel="stylesheet" href="'.ADRES.'/template/basic/css/'.$file.'">';     

        

    }

    

  public static function openjs($file){

            

 echo '<script src="'.ADRES.'/template/basic/js/'.$file.'" type="text/javascript"></script>';           

            

        }

    

        

    public static function head(){

            

           echo $this->css($url) ;

            

            

        }

        

  public static function modal($file,$title,$footer){

   if ($footer==true)  {

   $mfooter=' <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-primary">Save changes</button>

      </div>';

   }  

   if ($title==true){

       $mtitle=' <h4 class="modal-title" id="myModalLabel">'.$title.'</h4>';

   }

   echo '

       

<!-- Modal -->

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   '. $mtitle.'

      </div>

      <div id="modal-body" class="modal-body">

    <center><i class="vukuat-icon-spin3 animate-spin vt-3x"></i></center>

      </div>

     '.$mfooter.'

    </div>

  </div>

</div>



';     

        

    }

}

