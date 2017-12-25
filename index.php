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
session_start();
ob_start();
header('Content-Type:text/html; charset=UTF-8');
 
define('DS', DIRECTORY_SEPARATOR);
define( 'ROOT', dirname(__FILE__));
error_reporting(E_ALL);
ini_set('display_errors','on');
ini_set('log_errors', 'On');
ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
ini_set('session.save_path', ROOT.DS.'tmp/sessions');
require_once 'config.php';

if(isset($_GET["url"]))
$adres=  new Adres($_GET["url"]);
else{
$url="home/index";
$adres= new Adres($url);
}

  
