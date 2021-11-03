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

class Model_haberler extends Model {

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

    }

 

  

 public function tumhabersay (){

        $sql = "SELECT id FROM News_VT";

        $count = $this->db->affectedRows($sql);

         

  if($count > 0){

       return $count;

  }else {return false;}

    }

   public function tumhaber ($baslangic,$limit){

        $sql = "SELECT * FROM News_VT order by id desc LIMIT $baslangic,$limit ";

        $count = $this->db->affectedRows($sql);

        



        if($count > 0){

         $sql = "SELECT * FROM News_VT order by id desc LIMIT $baslangic,$limit";

            return $this->db->select($sql);

        }else{

            return $count;

        }

    }

      public function ekle($data){

return $this->db->insert("News_VT", $data);

       

       

    }

   

    

    

    public function duzenle($id){

 

$sql = "SELECT * FROM  News_VT where id=$id";

        return $this->db->select($sql);

    }



    public function kaydet($data,$id){

      $where='id='.$id.'';

        return $this->db->update("News_VT",$where,$data);

    }

    

  public function ara($array = array()){

        $sql = "SELECT * FROM News_VT WHERE sefurl = :url";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

          $sql = "SELECT * FROM News_VT WHERE sefurl = :url";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

      public function sil($data=0){
 
 
return $this->db->delete("News_VT", $data);

       

       

    } 

}

