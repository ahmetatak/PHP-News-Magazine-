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
?>

<uyegiris id="uyegiris" >

    <div class="well">

         <legend class="text-center">Üye girişi</legend>

          <?php if(isset($mesaj))echo $mesaj;?>

         <form method="post" action="<?php echo ADRES."/uye/giris/".Session::get("id")."/";?>" class="form-signin">

<input type="text" name="email" class="form-control" placeholder="E-posta adresiniz" required autofocus>

<input type="password" name="password" class="form-control" placeholder="Şifreniz" required>

    <input type="hidden" name="start" value="ok">

<?php if(Session::get("loginerror")>2)

     

 echo ' <!-- captcha-->

            <div class="form-group">

        

              <div class="col-md-12">

                <div class="well">

  <div class="col-md-12"> <img src="'.Session::get("adres").'/security/images/'.Session::get("id").'/" width=170 height=90 id="captcha_"/></div>



<a onClick="reload();" href="#?" id="change-image"><i title="Resmi yenile" class="vukuat-icon-cw "></i></a>

<div class="col-md-12 pull-left">

                <input id="captcha" name="captcha" maxlength="6" type="text" placeholder="Resimde gördüğünüz güvenlik kodunu yazınız." class="form-control">

         </div>

          </div>



              </div>

            </div>

<script type="text/javascript">

function reload()

{1

img = document.getElementById("captcha_");

img.src="'.Session::get("adres").'/security/images/'.Session::get("id").'/"+ Math.random();

}

</script>            ';   

    

    ?>

<button class="btn btn-lg btn-primary btn-block" type="submit">

Giriş yap</button>

<label class="checkbox pull-left">

<input type="checkbox" value="remember-me">

Beni hatırla

</label>

        <a href="<?php echo Session::get("adres")?>/uye/sifre/" class="pull-right need-help">Şifremi unuttum </a><span class="clearfix"></span>

<input type="hidden" name="clicked" value="ok" >

</form>

  

    </div>

    







  <style type="text/css">

.form-signin

{

max-width: 330px;

padding: 15px;

margin: 0 auto;

}

.form-signin .form-signin-heading, .form-signin .checkbox

{

margin-bottom: 10px;

}

.form-signin .checkbox

{

font-weight: normal;

}

.form-signin .form-control

{

position: relative;

font-size: 16px;

height: auto;

padding: 10px;

-webkit-box-sizing: border-box;

-moz-box-sizing: border-box;

box-sizing: border-box;

}

.form-signin .form-control:focus

{

z-index: 2;

}

.form-signin input[type="text"]

{

margin-bottom: -1px;

border-bottom-left-radius: 0;

border-bottom-right-radius: 0;

}

.form-signin input[type="password"]

{

margin-bottom: 10px;

border-top-left-radius: 0;

border-top-right-radius: 0;

}

.account-wall

{

margin-top: 20px;

padding: 40px 0px 20px 0px;

background-color: #f7f7f7;

-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.login-title

{

color: #555;

font-size: 18px;

font-weight: 400;

display: block;

}

.profile-img

{

width: 96px;

height: 96px;

margin: 0 auto 10px;

display: block;

-moz-border-radius: 50%;

-webkit-border-radius: 50%;

border-radius: 50%;

}

.need-help

{

margin-top: 10px;

}

.new-account

{

display: block;

margin-top: 10px;

}

  </style> 

</uyegiris>