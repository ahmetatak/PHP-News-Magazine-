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



  if(is_array($mail)){

foreach ($mail as $key => $ayar) {

    

/////////////////////////////////////statu

    if($ayar["statu"]=="0")

    $statu="Kapalı";

    elseif($ayar["statu"]=="1")

    $statu="Açık";

    elseif($ayar["statu"]=="2")

    $statu="Bakımda";



    

echo '   

    







<form method="post" class="form-horizontal" action="'.ADRES.'/cp-setting/mail/'.session_id().'" role="form">



  <legend class="text-center">Mail Sunucu Ayarları</legend>

   <div class="form-group">

    <label for="host" class="col-sm-3 control-label">Sunucu (host) adresi :</label>

    <div class="col-sm-8">

      <input type="text" name="host"  class="form-control" value="'.$ayar["mailhost"].'" id="host" placeholder="Mail sunucu adresi">

    </div>

  </div>

     <div class="form-group">

    <label for="port" class="col-sm-3 control-label">Port :</label>

    <div class="col-sm-3">

      <input type="text" name="port"  class="form-control" value="'.$ayar["mailport"].'" id="port" placeholder="Port adresi">

    </div>

  </div>

    <div class="form-group">

    <label for="username" class="col-sm-3 control-label">Kullanıcı adı :</label>

    <div class="col-sm-3">

      <input type="text" name="username"  class="form-control" value="'.$ayar["mailuser"].'" id="username" placeholder="Hesap ismi">

    </div>

  </div>

      <div class="form-group">

    <label for="password" class="col-sm-3 control-label">Şifre :</label>

    <div class="col-sm-3">

      <input type="password" name="password"  class="form-control" value="'.$ayar["mailpassword"].'" id="password" placeholder="Hesap şifresi">

    </div>

  </div>

   <div class="form-group">

    <label for="mail" class="col-sm-3 control-label">E-posta adresi :</label>

    <div class="col-sm-3">

      <input type="text" name="mail"  class="form-control" value="'.$ayar["repmail"].'" id="mail" placeholder="Cevap verilecek e-posta adresi">

    </div>

  </div>

   <input type="hidden" name="update" value="start">

    <button class="btn" type="submit" >Kaydet</button>







</form>



   

';}

}

