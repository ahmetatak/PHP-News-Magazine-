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

  if(Session::get("userlogin")==true){

echo '<!-- Nav tabs -->

<ul class="nav nav-tabs" >

  <li class="active"><a href="#home">Uyelik</a></li>



  <li class="active"><a rel="ajaxload" data-type="profil" data-into="ajaxpage" href="/uye/profil/'.Session::get("username").'">Profil</a></li>

  <li class="active"><a rel="ajaxload" data-type="ayarlar" data-into="ajaxpage" href="/uye/ayarlar/">Ayarlar</a></li>

    <li class="active"><a rel="ajaxload" data-type="abonelik" data-into="ajaxpage" href="/uye/abone/">Abonelik</a></li>

      <li class="active"><a rel="ajaxload" data-type="gizlilik" data-into="ajaxpage" href="/uye/gizlilik/">Gizlilik</a></li>



</ul>





<div class="tab-content">

  <div id="ajaxpage">.<a class="vukuat-icon-logout-3 vt-2x" href="cikis"></a></div>



</div>

';

}