<?phpinfo@ahmetatak.netinfo@ahmetatak.net
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

class Database{

    private $host ="127.0.0.1";

    private $datebase ="vuku";

    private $user ="root";

    private $password ="";



    public function __construct(){ //açılışta çalıştır

        $this->dbBaglantiKur();

    }

 

    public function dbBaglantiKur(){ //veritabanı bağlantısı kurma

        try{

            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->datebase",  $this->user, $this->password);

            $this->conn->query("SET NAMES 'utf8'");

            $this->conn->query('set character set utf8');

        }catch(PDOException $e){

             die("hata var");

        } 

    }

     

    

    

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){

        $sth =$this->conn->prepare($sql);

        foreach ($array as $key => $value) {

            $sth->bindValue($key, $value);

        }

        $sth->execute();

        return $sth->fetchAll($fetchMode);

    }

    

   public function search($sql,$aranan){ //kayıtlarda arama yapma

    

      $bul = $this->conn->prepare($sql);

        foreach ($aranan as $key => $taglist) {



   

    $bul->execute(array('%'.$taglist.'%'));

   

}

    

$totalsearch = $bul->rowCount();

 





        return $bul->fetchAll(PDO::FETCH_ASSOC);

    }





        public function affectedRows($sql, $array = array()){

        $sth =$this->conn->prepare($sql);

        foreach ($array as $key => $value) {

            $sth->bindValue($key, $value);

        }

        $sth->execute();

        return $sth->rowCount();

    }

    

    public function insert($tableName, $data){

        $fieldKeys = implode(",", array_keys($data));

        $fieldValues = ":" . implode(", :", array_keys($data));



        $sql = "INSERT INTO $tableName($fieldKeys) VALUES($fieldValues)";

        $sth = $this->conn->prepare($sql);

        foreach ($data as $key => $value) {

            $sth->bindValue(":$key", $value);

        }

        return $sth->execute();

    }

    

    public function update($tableName,$where,$data ){

        $updateKeys = null;

        foreach ($data as $key => $value) {

            $updateKeys .= "$key=:$key,";

        }

        $updateKeys = rtrim($updateKeys, ",");

        $sql = "UPDATE $tableName SET $updateKeys WHERE $where";

        

        $sth =$this->conn->prepare($sql);

        foreach ($data as $key => $value) {

            $sth->bindValue(":$key", $value);

        }

        return $sth->execute();

    }

    

    public function delete($table, $id, $limit = 1){

          $sil = $this->conn->prepare('DELETE FROM '.$table.' WHERE id=?');

        return $sil->execute(array($id));

    }

   

}



