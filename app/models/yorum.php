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

class Model_yorum extends Model {

    public $totalsearch;

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

    }

 public function haber($array = array()){

        $sql = "SELECT * FROM News_VT WHERE sefurl = :url and statu=:statu";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

$sql = "SELECT * FROM News_VT WHERE sefurl = :url and statu=:statu";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

    

            public function yorumekle($data){

return $this->db->insert("Comments_VT", $data);

}

}

