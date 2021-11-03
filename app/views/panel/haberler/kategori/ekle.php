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

function kategoriler($upcatid=0, $satir=0){

            $categori =  load::model("cpanel/kategoriler"); 

$data["sonuclar"]= $categori->kategori($upcatid);







foreach ($data["sonuclar"] as $key => $kategorim) {

$altkatdurum=$categori->altcatbul($kategorim["id"]);



 

        

  if($katid=false and $kategorim["upcatid"]==false) 

  {

      $disable ='disabled="disabled"';

  }

     if(!isset($disable))
         $disable='';
if(!isset($kategorim["id"]))
    $kategorim["id"];
if(!isset($bosluk))
    $bosluk;
if(!isset($satir))
    $satir;
echo '<option '.Filter::chk($disable).' value="'.$kategorim["id"].'"  >'.str_repeat("-", Filter::chk($satir)).">".Filter::chk($bosluk)." ".$kategorim["catname"].'</option>';

       



     

    

    kategoriler($kategorim["id"], $satir+1); 

}



 



}

echo '<div id="kategoriekle"><h4> Haber kategorisi ekle</h4>';
if(isset($mesaj))
echo $mesaj;

         

         echo ' <form  method="post" class="form-horizontal" action="?" role="form">

  <div class="wall">



    <input type="hidden" id="sesid" name="sesid" value="'.Session::get("id").'"/>

<div class="form-group">

  

    <label for="name" class="col-sm-3 control-label">Kategori adı</label>

    <div class="col-sm-8">

      <input type="text" name="name"  value="" class="form-control" id="name" placeholder="Kategori adı">

    </div>

  </div>

 <div class="form-group">

    <label for="img" class="col-sm-3 control-label">Kategori resmi</label>

    <div class="col-sm-3">

      <input type="text" name="img"  value="" class="form-control" id="img" placeholder="Kategori resmi">

    

</div><div class="col-sm-1 col-lg-1"><img class="img-responsive img-circle" src="'.isset($catedit["catimg"]).'"></div>

  </div>

  

   <div class="form-group ">

    <label for="detay" class="col-sm-3 control-label">Kategori açıklaması</label>

    <div class="col-sm-3">

      <textarea id="detay" name="detay" class="form-control"></textarea>

        </div><div class="col-md-6 col-sm-0">'.Response::warning('<p class="text-danger"> Eğer kategoriniz bir üst kategori ise lütfen alt kategorisine kayıt etmeyiniz ! Aksi halde sistemde gözükmeyecektir.<p>','').'</div>

  </div>

   

  </div>







  

<div class="form-group">

    <label for="durum" class="col-sm-3 control-label">Kategori durumu : </label>

    <div class="col-sm-2">

<select name="durum" id="durum" class="form-control">

 

      <option  selected value="0">Kapalı</option>

  <option  value="1">Açık</option>

</select>

    </div>

  </div>

  <div class="form-group">

    <label for="kategori" class="col-sm-3 control-label">Kategori </label>

    <div class="col-sm-2">

<select name="kategori" id="kategori" class="form-control">

<option selected value="">Kategori Seçiniz</option>

<option  value="0">Üst kategoridir</option>';      
if(!isset($catedit["upcatid"]))
    $catedit["upcatid"]='';
echo kategoriler($upcatid=0, $satir=0, $catedit["upcatid"]); 

echo '  

</select>



  </div>

</div>

<input type="hidden" id="insert" name="insert" value="start"/>

    <button class="btn" type="submit" >Ekle</button>

</form>

</div>

';

  

 

