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
class Model_haber extends Model {

    public $totalsearch;

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

    }

  

       
     public function haberoku($array = array(),$id=FALSE){
   if($id==TRUE)
       $request='where statu=1 and id=:sefurl';
   else $request='where statu=1 and sefurl=:sefurl';
      $sql = "SELECT id FROM  News_VT $request";
 $count = $this->db->affectedRows($sql, $array);

 
        if($count > 0){
 
      $sql = "SELECT id,title,summary,news,hits,img,comment,catid,date,statu,sefurl,tags FROM  News_VT $request";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }


    }




     public function yorumlar($id){

         

    

     //commtype 1 ise haber yorumudur. 

         //2 ise makale vs diğer verilerin yorumudur.

        $sql = "SELECT id,nick,email,hideemail,comment,date, positive, negative FROM  Comments_VT where statu=1 and commtype='news' and dataid=$id order by id desc";

        return $this->db->select($sql);

        

       

    } 

    

    

      public function sonhaberlistele(){

     

        $sql = "SELECT id,img,title,summary FROM  News_VT where statu=1  and headline=0 and flash=0 order by date desc";

        return $this->db->select($sql);

        

       

    }

    

     public function benzerhaber($text){

          

          $text = Security::abc123tr($text);

           $text= Security::maketag($text);

          

      

         $sql = 'SELECT id,sefurl,title,img FROM News_VT WHERE statu=1 and title LIKE ?';

            return $this->db->search($sql, $text);

            

        

    }

   

    

    

    public function hits($hit,$id){

 $where="id='$id'";



  

      $this->db->update("News_VT",$where,$hit);

    }

    

   public function kategori($sefurl,$baslangic,$limit){

      

  $sql = "SELECT * FROM Categori_VT where sefurl=$sefurl and cattype='news' and statu=1 ";

   $count = $this->db->affectedRows($sql);

   if($count==false){

       return false;

   }else{

       return true;

   

   }     

        

    }

    

    

}

