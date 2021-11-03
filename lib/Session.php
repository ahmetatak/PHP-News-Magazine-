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
class Session {



    public static function init() {
        if (session_status() == PHP_SESSION_NONE) {
session_start();

        ob_start();
}


    }



    public static function set($key, $val) {

        $_SESSION[$key] = $val;

        

    }



    public static function get($key) {

        if (isset($_SESSION[$key])) {

            return $_SESSION[$key];

        } else {

            return false;

        }

    }



    public static function checkSession() {

        self::init();

        if (self::get("login") == false) {

            self::destroy();

            header("Location: " . SITE_URL . "/admin/login");

        }

    }



    public static function destroy() {

        session_destroy();

    }



}

