<?php
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

class Hava {

/*
havadurumu.php Türkiye illerinin güncel havadurumu bilgilerini
Meteoroloji Genel Müdürlüğünden elde edebilmeniz için yazılmış
ufak bir kütüphanedir.
*/
public static function durum($sehir , $istek=false){
$sehiradi = $sehir;
if(file_get_contents('http://www.mgm.gov.tr/mobile/tahmin-il-ve-ilceler.aspx?m='.$sehir))
$strhtml = file_get_contents('http://www.mgm.gov.tr/mobile/tahmin-il-ve-ilceler.aspx?m='.$sehir);
else return false;
$dochtml = new DOMDocument();
$dochtml->loadHTML($strhtml);
 $enaz = $dochtml->getElementById('cpContent_thmMin1'); 
 $enaz = '<font class="text-primary">'.$enaz->nodeValue.'</font>';
 $encok = $dochtml->getElementById('cpContent_thmMax1');
 $encok = '<font class="text-danger">'.$encok->nodeValue.'</font>'; 
if($sehir==true and $istek==false){
$id1 = $dochtml->getElementById('cpContent_thmMin1');
$icerik1 = $id1->nodeValue;
return $icerik1;
}
// En düşük hava sıcaklığı
if($istek == "enaz" ){
$id1 = $dochtml->getElementById('cpContent_thmMin1');
$icerik1 = $id1->nodeValue;
return $icerik1;
}
// En yüksek hava sıcaklığı
if($istek == "encok"){
$id2 = $dochtml->getElementById('cpContent_thmMax1');
$icerik2 = $id2->nodeValue;
return $icerik2;
}
// Havanın ve gökyüzünün durumu
if($istek == "hava"){
$id3 = $dochtml->getElementById('cpContent_imgHadise1');
$icerik3 = $id3->getAttribute('src');
switch ($icerik3) {
 	case "../FILES/imgIcon/99/a1-25x25-gif/-23.gif": $havadurum = "Çok Bulutlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/-25.gif": $havadurum = "Parçalı Bulutlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/-28.gif": $havadurum = "Az Bulutlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/-29.gif": $havadurum = "Açık"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/45.gif": $havadurum = "Sisli"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/61.gif": $havadurum = "Hafif Yağmurlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/63.gif": $havadurum = "Yağmurlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/65.gif": $havadurum = "Kuvvetli Yağmurlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/68.gif": $havadurum = "Karla Karışık Yağmurlu"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/71.gif": $havadurum = "Hafif Kar Yağışlı"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/73.gif": $havadurum = "Kar Yağışlı"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/-81.gif": $havadurum = "Sağnak Yağışlı"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/82.gif": $havadurum = "Kuvvetli Sağnak Yağışlı"; break;
case "../FILES/imgIcon/99/a1-25x25-gif/75.gif": $havadurum = "Yoğun Kar Yağışlı"; break;   
    

}

//$istanbul=Hava::degerlendir('istanbul',$havadurum);
//$izmir=Hava::degerlendir('izmir',$havadurum);
//$ankara=Hava::degerlendir('Ankara',$havadurum);
//$adana=Hava::degerlendir('Adana',$havadurum);
//$konya=Hava::degerlendir('Konya',$havadurum);

 $derece='<h6>'.$enaz.'-'.$encok.'°C</h6>';
return Hava::degerlendir(Filter::chk($sehir),  Filter::chk($havadurum),  Filter::chk($derece));

}
}
public static function degerlendir($sehir='',$yorum='',$derece=''){
     
 switch ($yorum) {   
case 'Çok Bulutlu': $img = '/content/img/havadurumu/bulutlu.png'; break;
case 'Parçalı Bulutlu': $img = '/content/img/havadurumu/parcalibulutlu.png'; break;
case 'Az Bulutlu': $img ='/content/img/havadurumu/azbulutlu.png'; break;
case 'Açık': $img = '/content/content/img/havadurumu/gunesli.png'; break;
case 'Sisli': $img = '/content/content/img/havadurumu/sisli.png'; break;
case 'Hafif Yağmurlu': $img = '/content/img/havadurumu/hafifyagmur.png'; break;
case 'Yağmurlu': $img = '/content/img/havadurumu/yagmurlu.png'; break;
case 'Kuvvetli Yağmurlu': $img = '/content/img/havadurumu/kuvvetliyagis.png'; break;
case 'Karla Karışık Yağmurlu': $img = '/content/img/havadurumu/karyagmur.png'; break;
case 'Hafif Kar Yağışlı': $img = '/content/img/havadurumu/hafifkarli.png'; break;
case 'Kar Yağışlı': $img = '/content/img/havadurumu/karli.png'; break;
case 'Sağnak Yağışlı': $img = '/content/img/havadurumu/sagnakyagis.png'; break;
case 'Kuvvetli Sağnak Yağışlı': $img = '/content/img/havadurumu/kuvvetlisagnakyagis.png'; break;
case 'Yoğun Kar Yağışlı': $img = '/content/img/havadurumu/yogunkar.png'; break;

 }
 
 $durum='
<div> 
 <h4>'.Filter::chk($sehir).' '.Filter::chk($derece).'</h4>
<h6 class="text-danger"><font class="text-primary">'.Filter::chk($yorum).'</font></h6>
</div>
';
  return $durum;      
 
}
}