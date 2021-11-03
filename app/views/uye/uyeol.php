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

echo '<uyeol id="uyeol">';

if (isset($mesaj))
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

                        case 'name':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                          case 'surname':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                     case 'finduser':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                      case 'user':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    case 'email':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

                        }

                        break;

                    case 'nick':

                        foreach ($value as $val) {

                            echo "" . $val . "";

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

echo '	<div  class="row">

      <div class="col-md-12">

        <div class="well ">

          <form id="form" class="form-horizontal" action="'.ADRES.'/uye/kayit/'.  session_id().'/" method="post">

          <fieldset>

            <legend class="text-center">Abonelik Formu</legend>

     

            <!-- nick input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="nick">Kullanıcı adı :</label>

              <div class="col-md-9">

                <input id="nick" maxlength="25" name="nick" type="text" placeholder="Kullanıcı adınızı yazınız." class="form-control">

              </div>

            </div>

                <!-- name input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="name">Adınız :</label>

              <div class="col-md-9">

                <input id="name" name="name" maxlength="100" type="text" placeholder="Gerçek adınızı yazınız." class="form-control">

              </div>

            </div>

                  <!-- surname input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="surname">Soyadınız :</label>

              <div class="col-md-9">

                <input maxlength="100" id="surname" name="surname" type="text" placeholder="Soyadınızo yazınız." class="form-control">

              </div>

            </div>

             <!-- Email input-->

                        <div class="form-group">

              <label class="col-md-3 control-label" for="email">E-posta adresi :</label>

              <div class="col-md-9">

                <input id="email" name="email" maxlength="100" type="text" placeholder="E-posta adresinizi yazınız lütfen" class="form-control">

              </div>

            </div>

    

            <!-- password input-->

            <div class="form-group">

              <label class="col-md-3 control-label"  for="password">Şifreniz :</label>

              <div class="col-md-9">

                <input id="password"  name="password" maxlength="50" type="password" placeholder="Şifrenizi yazınız." class="form-control">

              </div>

            </div>

             <!-- repassword input-->

            <div class="form-group">

              <label class="col-md-3 control-label" for="repassword">Şifreniz (tekrar) :</label>

              <div class="col-md-9">

                <input id="repassword" maxlength="50" name="repassword" type="password" placeholder="Şifrenizi tekrar yazınız." class="form-control">

              </div>

            </div>

            

  <!-- captcha-->

            <div class="form-group">

            <label class="col-md-3 control-label" for="captcha">Güvenlik kodunuz</label>

              <div class="col-md-9">

                <div class="well">

  <img src="'.ADRES.'/guvenlik/images/'.  session_id().'/" width=200 height=50 id="captcha_"/>



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

 

                <button type="submit" class="btn btn-primary btn-lg">Kayıt ol</button>

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

img.src="'.ADRES.'/guvenlik/images/'.  session_id().'/"+ Math.random();

}

</script>';

echo '<uyeol>'

?>

