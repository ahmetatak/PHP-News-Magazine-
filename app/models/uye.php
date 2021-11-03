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



class Model_uye extends Model {

    public function __construct() {

        parent::__construct();

         

       //   echo "burasi model sayfasi ";

        

     

    }

       public function girisyap($array = array()){

        $sql = "SELECT id,name,surname,email,nick,statu,regkeystatu FROM Users_VT WHERE email=:eposta AND pass= :sifre";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

         $sql = "SELECT id,name,surname,email,nick,statu,regkeystatu FROM Users_VT WHERE email=:eposta AND pass= :sifre";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

           public function sifrebul($array = array()){

        $sql = "SELECT id  FROM Users_VT WHERE email=:email AND forgotpass=:key";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

         $sql = "SELECT id,email,forgotpass,forgotpassdt FROM Users_VT WHERE email=:email AND forgotpass=:key";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

     public function kayitol(){

        $sql = "SELECT id,name,surname,hit FROM Author_VT where statu=1 order by hit DESC";

        return $this->db->select($sql);

    }

         public function uyeayari(){

        $sql = "SELECT reg,login,regtype FROM  Setting_VT";

        return $this->db->select($sql);

    }

    public function findkey($array = array()){

        $sql = "SELECT id FROM Users_VT  WHERE regkey=:key";

        $count = $this->db->affectedRows($sql,$array);

        if($count > 0){

return true;

        }else{

            return false;

        }

    }

        public function uyeekle($data){

return $this->db->insert("Users_VT", $data);

}

public function setlog($data,$id){

$where='id='.$id.'';

return $this->db->update("Users_VT",$where,$data);

    }

           public function uye($array = array()){

        $sql = "SELECT id FROM Users_VT WHERE nick=:username";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

         $sql = "SELECT id,name,surname,email,nick,statu,regkeystatu, FROM Users_VT WHERE nick=:username";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

    public function  aktivasyon($array = array()){

            $sql = "SELECT id FROM Users_VT WHERE regkey=:key";

        $count = $this->db->affectedRows($sql, $array);

        

        if($count > 0){

         $sql = "SELECT id,nick,email,statu,regkeystatu,regkey FROM Users_VT WHERE regkey=:key";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }    

    }

    public function aktifet($data,$id){

$where='id='.$id.'';

return $this->db->update("Users_VT",$where,$data);

    }

    

    public function findmail($array = array()){

 

     

        $sql = "SELECT id FROM Users_VT  WHERE email=:email";

        $count = $this->db->affectedRows($sql,$array);

        

        if($count==true){

  return true;

        }else{

  return false;

        }

    }

    

        public function lookformail($email){

    $data = array(

              ":email" =>$email,



              );

     

        $sql = "SELECT id FROM Users_VT  WHERE email=:email";

        $count = $this->db->affectedRows($sql,$data);

        

        if($count==true){

  return true;

        }else{

  return false;

        }

    }

    

    

    

        public function forgot($array = array()){

 

     

        $sql = "SELECT id FROM Users_VT  WHERE email=:email and forgotpass=:key";

        $count = $this->db->affectedRows($sql,$array);

        

        if($count==true){

  return true;

        }else{

  return false;

        }

    }

    

public function uyedegis($data,$id){

$where='id='.$id.'';

return $this->db->update("Users_VT",$where,$data);

    }

 public function getuser($array = array()){

        $sql = "SELECT *  FROM Users_VT WHERE email=:email ";

        $count = $this->db->affectedRows($sql, $array);

 if($count > 0){

        $sql = "SELECT id,name,surname,email,nick,statu,regkeystatu FROM Users_VT WHERE email=:email ";

            return $this->db->select($sql, $array);

        }else{

            return false;

        }

    }

}

