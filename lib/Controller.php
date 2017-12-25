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

class Controller

{

   protected $load = array(); 

    function __construct()

    {

     

      $this->load = new load();

    }

    

    

 

    

    

    

 function loadModel($model)

    {

     

     $modelfile = 'app/models/M_' . strtolower($model) . '.php';



if (file_exists($modelfile )) {



        require 'app/models/M_' . strtolower($model) . '.php';

       $model="Model_".$model ;

 if (class_exists($model)) {

 $m = new $model();		

}      

       

        

}

        // return new model (and pass the database connection to the model)

       // return new $model($this->db);

    }

   

    

    

    

    

    

}