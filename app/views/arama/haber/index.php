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

echo $mesaj;





 if(is_array($sonuc)){

     echo ' <div class="row">';

foreach ($sonuc as $key => $rsl) {



echo '

    

<style type="text/css">

.glyphicon { margin-right:5px;}

.section-box h2 { margin-top:0px;}

.section-box h2 a { font-size:15px; }

.glyphicon-heart { color:#e74c3c;}

.glyphicon-comment { color:#27ae60;}

.separator { padding-right:5px;padding-left:5px; }

.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}

.searchimg {

	min-height:100px;

	min-width:300px;

}

</style>



        <div class="col-md-6">

            <div class="well well-sm">

                <div class="row">

                    <div class="col-xs-3 col-md-3 text-center">

                        <img src="'.$rsl["img"].'" class="searchimg img-rounded img-responsive" />

                    </div>

                    <div class="col-xs-9 col-md-9 section-box">

                        <h4>

<a href="'.Session::get("adres").'/'.$rsl["sefurl"].'">'.$rsl["title"].'</a>

                        </h4>

                        <p>

                            '.$rsl["summary"].'

                        <hr />

                        <div class="row rating-desc">

                         

                        </div>

                    </div>

                </div>

            </div>

        </div> 

         ';

 }

 echo '</div>';

 

}