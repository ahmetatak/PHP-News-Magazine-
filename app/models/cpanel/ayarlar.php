<?php info@ahmetatak.netinfo@ahmetatak.net
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

class Model_ayarlar extends Model {

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

    }

 

   



    

    

    public function ayarver(){

 

$sql = "SELECT * FROM  Setting_VT ";

        return $this->db->select($sql);

    }



 public function kaydet($update,$id){ 

  $where='id='.$id.'';

        return $this->db->update("Setting_VT",$where,$update);

    }
      public function setip($data){

return $this->db->insert("vt_istatistik", $data);

       

       

    }
           public function kontrol($array = array()){

        $sql = "SELECT id FROM vt_istatistik WHERE ip=:ip AND gun=:gun and ay=:ay and yil=:yil";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){
return TRUE;

        }else{

            return false;

        }

    } 
    
               public function toplamhit(){

        $sql = "SELECT id FROM vt_istatistik";

        $count = $this->db->affectedRows($sql);

        

        if($count > 0){
return $count;

        }else{

            return false;

        }

    }

    
    
        public function toplambugun($array = array()){

        $sql = "SELECT id FROM vt_istatistik WHERE gun=:gun and ay=:ay and yil=:yil";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){
return $count;

        }else{

            return false;

        }

    }
}

