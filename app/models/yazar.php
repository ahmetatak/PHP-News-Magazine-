<?php info@ahmetatak.netinfo@ahmetatak.net
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

class Model_yazar extends Model {

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

    }

     public function liste(){

        $sql = "SELECT id,name,surname,hit FROM Author_VT where statu=1 order by hit DESC";

        return $this->db->select($sql);

    }

    public function sonmakale($yazarid){

        $sql = "SELECT * FROM Articles_VT where  authorid=1 order by id DESC";

        return $this->db->select($sql);

    }

   

    

    

   

    

}

