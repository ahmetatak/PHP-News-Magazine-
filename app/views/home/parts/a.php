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

?>

<!-- manset -->

<div class="manset">

    <?php

    

  if(is_array($manset)){

$class="active item";

$sayi=1;



$first="item active";

echo '<div class=" ">

            <!-- Carousel

            ================================================== -->            

            <div id="myCarousel" class="carousel slide">

                <div class="carousel-inner">';

foreach ($manset as $key => $listele) {

    if(substr($listele["img"], 0, 3)=="http")
 $haberimg=$listele["img"];
else
 $haberimg=  ADRES.$listele["img"];  




echo '   <div class="'.$first.'">

                        <div class="row">

                        

                            <div class="col-md-12 mansetperdesi">

<div class="perde"><a href="'.ADRES."/".$listele["id"]."/".$listele["sefurl"].'">

<h4>'. substr($listele["title"],0,90).'</h4></a>

                </div>         



<a href="'.ADRES."/".$listele["id"]."/".$listele["sefurl"].'"><img title="'.$listele["title"].'" class="img-responsive" src="'.$haberimg.'"></a>

                            </div>

                          

                        </div>

                    </div>';

$first='item'; 



 $sayi=$sayi+1;





 

  } echo '  </div><a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="vukuat-icon-left-open-4"></i></a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="vukuat-icon-right-open-4"></i></a>

                

                              

            </div><!-- End Carousel --> 

            <ul   class="pagination manset-pages">

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="0" class="active">1</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="1">2</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="2">3</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="3">4</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="4">5</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="5">6</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="6">7</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="7">8</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="8">9</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="9">10</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="10">11</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="11">12</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="12">13</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="13">14</a></li>

                    <li><a href="#" data-toggle="tab" data-target="#myCarousel" data-slide-to="14">15</a></li>

                    <li><a href="#">Tümü</a></li>  

                </ul> 

        </div><!-- End Well -->'; }

    

    ?>



</div>





<!-- #manset-->



<!--  Haberler -->

<style type="text/css">



 

.thumbnail {

    position:relative;

    overflow:hidden;

    min-height: 120px;

    max-height: 120px;

    margin-top: 0px;

	margin-right: -12px;

	margin-bottom: 0px;

	margin-left: -12px;

        

        

}



.thumbnail a {

    font-size: 12px;

	font-weight: bold;

	color: #FFF;



  

}

.thumbnail a:hover {



  

}

.thumbnail img {



    min-height: 120px;

}

 



.perde a { 

	font-size: 14px;

	font-weight: bold;

	color: #FFF;	

 

} 

.perde a:hover { 

	font-size: 14px;

	font-weight: bold;

	color: #FFF;	

 

} 

   

.perde {

    position:absolute;

    top:0;

    right:0;

    background-color: rgba(0,0,0,0.75);

    width:100%;

    height:20%;

    padding:2%;

    display: none;

    text-align:center;

    color:#fff !important;

    z-index:2;

}







    </style>

  

<!-- haberler -->

   <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
   <h4><i class="vukuat-icon-newspaper"></i>HABERLER <b class="text-danger">: :</b><b class="text-warning"> . . . . .</b><b class="text-info"> . . . . .</b> <b class="text-success"> . . . . .</b>
   
   </h4>

   
    <div class="row">
  
 <?php 

              

         if(is_array($sonhaber)){



  $v=0;



           foreach ($sonhaber as $key => $sonhaber) {

$tarih=  ($sonhaber["date"]);

  $sonuc=Security::sefurl($sonhaber["title"]); 

  if(substr($sonhaber["img"], 0, 3)=="http")
 $haberimg=$sonhaber["img"];
else
 $haberimg=  ADRES.$sonhaber["img"]; 

  $adres= ADRES.'/'.$sonhaber["sefurl"];
 echo '  
     <div class="col-md-3 col-xs-12 col-sm-6">
       <div class="haber-box">
    <a href="'.ADRES."/".$sonhaber["sefurl"].'" class="thumbnail">
          <img class="img-responsive" src="' .$haberimg.'" alt="'.$sonhaber["title"].'">
        </a>
       
       </div>
      </div>
 ';
 
 
 
 $v++;

if($v==12) break;





           }

         }?>
        
 </div>
  </div>

<!-- # haberler -->








<script>$( document ).ready(function() {

    $("[rel='tooltip']").tooltip();    

 

    $('.thumbnail').hover(

        function(){

            $(this).find('.perde').slideDown(250); //.fadeIn(250)

        },

        function(){

            $(this).find('.perde').slideUp(250); //.fadeOut(205)

        }

    ); 

      $('.mansetperdesi').hover(

        function(){

            $(this).find('.perde').slideDown(250); //.fadeIn(250)

        },

        function(){

            $(this).find('.perde').slideUp(250); //.fadeOut(205)

        }

    ); 

});</script>
