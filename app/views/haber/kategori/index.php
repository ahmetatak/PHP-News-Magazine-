<?phpinfo@ahmetatak.netinfo@ahmetatak.net

/* 
 * |||||| TURKISH ||||||||
 * Copyright © 2015 vukuat.com her hakkı saklıdır.
 * Projenin izinsiz kullanılması, dosyaların koplayanlaması
 * veya kodların paylaşılması kesinlikle yasaktır.
 * Tesbit edildiği taktirde kişi hakkında yasal işlem başlatılacaktır.
 * Bu proje NetBeans IDE 8.0 tarafından lisanslanmıştır.
 * Yazılım & Tasarım By : Vancat.ORG  | Vancat Sofware | Vancat yazılım & Tasarım
 * Iletişim   : info@ahmetatak.net, ahmet_atak@msn.com
 * |||||| ENGLISH ||||||||
 * Copyright © 2015 vukuat.com all rights reserved.
 * This project is private Only,the project owner can use this software.
 * Please do not share or change any file on this project.
 * This project was licensed by NetBeans IDE 8.0.
 * Powered By : Vancat.ORG  | Vancat Sofware | Vancat yazılım & Tasarım
 * Contact    : info@ahmetatak.net, ahmet_atak@msn.com
 */



if(isset($mesaj))
echo $mesaj;
if(isset($listele)){
if(is_array($listele)){

 foreach ($listele as $key => $list){

   echo $list["title"]."<br>";  

 }

}}