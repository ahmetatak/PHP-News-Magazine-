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

class Model_kategoriler extends Model {

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

     }

    



     public function ekle($data){

return $this->db->insert("Categori_VT", $data);

       

       

    }



public function kategori($upcatid){

            $type="news";

     

            $sql = "SELECT * FROM Categori_VT where upcatid=$upcatid and cattype='news' ";

        return $this->db->select($sql);

        

     

       



        } 

        

         public function altcatbul ($upcatid){

     $sql = "SELECT * FROM Categori_VT where upcatid=$upcatid and cattype='news' ";

        $count = $this->db->affectedRows($sql);

        

  if($count > 0){

       return true; 

  }else {return false;}

    }

     public function checkurl ($sefurl){

     $sql = "SELECT id FROM Categori_VT where sefurl=$sefurl and cattype='news' ";

        $count = $this->db->affectedRows($sql);

        

  if($count > 0){

       return true;

  }else {return false;}

    }

        public function duzenle($upcatid){

            $type="news";

     

            $sql = "SELECT * FROM Categori_VT where id=$upcatid and cattype='news' ";

        return $this->db->select($sql);

        

     

       



        } 

         public function kaydet($update,$id){ 

  $where='id='.$id.'';

        return $this->db->update("Categori_VT",$where,$update);

    }



         public function babayial($upcatid){

            $type="news";

     

            $sql = "SELECT * FROM Categori_VT where id=$upcatid and cattype='news' and statu=1 ";

        return $this->db->select($sql);

     } 

      public function sil($data){

         

return $this->db->delete("Categori_VT", $data,$limit);

       

       

    }

     

}

