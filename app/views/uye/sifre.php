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

if(isset($error)){



            foreach ($error as $key => $value) {

                switch($key){

                    

                    case 'email':

                        

                        foreach ($value as $val) {

                            echo '' . $val . '';

                       

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

          <form id="form" class="form-horizontal" action="'.ADRES.'/uye/sifre/'.  session_id().'/" method="post">

          <fieldset>
'.isset($mesaj).'
            <legend class="text-center">Şifremi unuttum</legend>

     


                <!-- email input-->
            <div class="form-group">

              <label class="col-md-3 control-label" for="email">E-posta adresi :</label>

              <div class="col-md-6">

                <input  id="email" name="email" maxlength="1000" type="text" placeholder="E-posta adresiniz." class="form-control">

              </div>
 
            </div>


  <!-- captcha-->

            <div class="form-group">

            <label class="col-md-3 control-label" for="captcha">Güvenlik kodunuz</label>

              <div class="col-md-4">

                <div class="well">

  <img src="'.ADRES.'/security/images/'.session_id().'/" width=200 height=50 id="captcha_"/>



<a onClick="reload();" href="#?" id="change-image"><i title="Resmi yenile" class="vukuat-icon-cw"></i></a>

<div class="col-md-12 pull-left">

                <input id="captcha" name="captcha" maxlength="6" type="text" placeholder="Resimde gördüğünüz güvenlik kodunu yazınız." class="form-control">

         </div>

          </div>



              </div>

            </div>
              

            <!-- Form actions -->

            <div class="form-group">

              <div class="col-md-12 text-right">

 <input type="hidden" name="start" value="ok">

                <button type="submit" class="btn btn-primary  ">Gönder</button>

              </div>

            </div>

          </fieldset>

          </form>

        </div>

      </div>

	</div>

      

        ';
echo '  
<script type="text/javascript">

function reload()

{1

img = document.getElementById("captcha_");

img.src="'.ADRES.'/security/images/'.session_id().'/"+ Math.random();

}

</script>

';