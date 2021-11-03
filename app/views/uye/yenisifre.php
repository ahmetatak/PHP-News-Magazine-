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

echo  $mesaj;

    if(isset($error)){



            foreach ($error as $key => $value) {

                switch($key){

                    case 'password':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                         case 'repassword':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    

                    

                      case 'key':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    case 'email':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    

                         case 'captcha':

                        foreach ($value as $val) {

                            echo "" . $val . "";

                        }

                        break;

                        

                    default:

                        break;

                }

            }

 }

                    



echo '	<div id="sifredegis" class="row">

      <div class="col-md-12">

        <div class="well ">

          <form id="form" class="form-horizontal" action="'.Session::get("adres").'/uye/yenisifre/'.Session::get("id").'/" method="post">

          <fieldset>

            <legend class="text-center">Yeni şifre </legend>

                   <!-- key input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="key">Onay kodunuz :</label>

              <div class="col-md-9">

                <input id="key" maxlength="100" name="key" value="'.$key.'" type="text" placeholder="E-posta adresinizi yazınız." class="form-control">

                           

</div>

            </div>

       <!-- email input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="email">E-posta adresiniz :</label>

              <div class="col-md-9">

                <input id="email" maxlength="100" name="email" value="'.$useremail.'" type="text" placeholder="E-posta adresinizi yazınız." class="form-control">

                <input id="key" maxlength="100" name="key" value="'.$key.'" type="hidden" >             

</div>

            </div>



            <!-- password input-->

            <div class="form-group">

              <label class="col-md-3 control-label"  for="password">Yeni şifre :</label>

              <div class="col-md-9">

                <input id="password"  name="password" maxlength="50" type="password" placeholder="Şifrenizi yazınız." class="form-control">

              </div>

            </div>

             <!-- repassword input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="repassword">Yeni şifre : (tekrar) :</label>

              <div class="col-md-9">

                <input id="repassword" maxlength="50" name="repassword" type="password" placeholder="Şifrenizi tekrar yazınız." class="form-control">

              </div>

            </div>

            

  <!-- captcha-->

            <div class="form-group">

            <label class="col-md-3 control-label" for="captcha">Güvenlik kodunuz</label>

              <div class="col-md-9">

                <div class="well">

  <img src="'.Session::get("adres").'/security/images/'.Session::get("id").'/" width=200 height=50 id="captcha_"/>



<a onClick="reload();" href="#?" id="change-image"><i title="Resmi yenile" class="vukuat-icon-cw animate-spin"></i></a>

<div class="col-md-12 pull-left">

                <input id="captcha" name="captcha" maxlength="6" type="text" placeholder="Resimde gördüğünüz güvenlik kodunu yazınız." class="form-control">

         </div>

          </div>



              </div>

            </div>



         

    





            <!-- Form actions -->

            <div class="form-group">

              <div class="col-md-12 text-right">

 

                <button type="submit" class="btn btn-primary btn-lg">Submit</button>

              </div>

            </div>

          </fieldset>

          </form>

        </div>

      </div>

	</div>

      

        ';?>



<script>$(document).ready(function(){

 

 $('#form').validate(

 {

    rules: {

         nick: {

     minlength: 4,

     maxlength: 25,

     required: true

   

    },

   name: {

     minlength: 2,

     maxlength: 100,

     required: true

   

    },

       surname: {

     minlength: 2,

     maxlength: 100,

     required: true

   

    },

    email: {

     required: true,

     email: true

    },

   subject: {

     minlength: 2,

    required: true

    },

    message: {

      minlength: 2,

      required: true

      

   }

  },

  highlight: function(element) {

    $(element).closest('.form-control').removeClass('has-success').addClass('has-error');

  },

  success: function(element) {

    element

    .text('OK!').addClass('valid')

   .closest('.form-control').removeClass('has-error').addClass('has-success');

  },messages: {

        nick: "kullanıcı adı alanı boş olamaz ! en az 4 en fazla 25 karakter içermelidir. ",

        name: "isim alanı boş olamaz ! en az 2 en fazla 100 karakter içermelidir. ",

         surname: "Soyisim alanı boş olamaz ! en az 2 en fazla 100 karakter içermelidir. ",

        lastname: "Enter your lastname",

        username: {

            required: "Enter a username",

            minlength: jQuery.format("Enter at least {0} characters"),

            remote: jQuery.format("{0} is already in use")

        }

    }

 });

}); // end document.ready

</script>



<?php

load::openjs("validation.js");

load::opencss("validation.css");

echo '<script type="text/javascript">

function reload()

{1

img = document.getElementById("captcha_");

img.src="'.Session::get("adres").'/security/images/'.Session::get("id").'/"+ Math.random();

}

</script>';

?>

