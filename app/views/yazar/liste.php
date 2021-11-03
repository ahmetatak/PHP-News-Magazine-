<yazarlist id="yazarlist"><?phpinfo@ahmetatak.netinfo@ahmetatak.net

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


  if(is_array($yazarlar)){

foreach ($yazarlar as $key => $yazarlist) {

    



   echo '





<div class="row">

<div class="col-md-2"><div class="pull-left">

<img class="profile-img" src="http://vukuat.com/upload/images/news/11-06-2014/11-06-2014_vukuat.com_a_c4dadbb1.jpg?sz=60"

alt=""></div></div>

<div class="col-md-8"> <div class="yazbas">

                <strong>'.$yazarlist["name"].'</strong> <strong>'.$yazarlist["surname"].'</strong><br>

                <span class="">'.$yazarlist["article"].'</span>

            </div></div>

</div>



  

'; 

 

}



}

?>

 <style type="text/css">

.profile-img

{

width: 60px;

height:60px;



display: block;

-moz-border-radius: 10%;

-webkit-border-radius: 10%;

border-radius: 10%;

}

.yazbas

{

margin-top: -10px;

margin-left: 10px;



}



  </style> 



</yazarlist>