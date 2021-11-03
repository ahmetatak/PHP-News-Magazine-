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


class captcha

{



    public $length=4;

    public $width=150;

    public $height=50;

    public $allowedChar='1234569ACEFGHJKMNPQRSTXZ';

    public $font='Arcade.ttf';

    public $fontSize=25;

    public $fontRed=0;

    public $fontGreen=0;

    public $fontBlue=104;

    public $backgroundRed=204;

    public $backgroundGreen=204;

    public $backgroundBlue=255;

    public $noiseRed=0;

    public $noiseGreen=0;

    public $noiseBlue=104;

    public $noisePercent=5;



    /*

    ** @RETURN IMAGE raw image of captcha

    */

    public function create($name)

            

        

    {

        

        Session::init();

        //string

        for ($i=0;$i<$this->length;$i++) 

        {$captcha.= $this->allowedChar[mt_rand(0, strlen($this->allowedChar))];}



        //image

        $img=imagecreatetruecolor($this->width, $this->height);

        //colors

        $bgColor=imagecolorallocate($img, $this->backgroundRed, $this->backgroundGreen, $this->backgroundBlue);

        $fontColor=imagecolorallocate($img, $this->fontRed, $this->fontGreen, $this->fontBlue);

        $noiseColor=imagecolorallocate($img, $this->noiseRed, $this->noiseGreen, $this->noiseBlue);

        imagefilledrectangle($img,0,0,$this->width+1,$this->height+1,$bgColor);

        //text

        for($i=0;$i<strlen($captcha);$i++)

        {

            $rotate=rand(0, 80)-40;

            $offX=$i*$this->fontSize+rand($this->fontSize, $this->fontSize*1.2);

            $offY=$this->fontSize+rand($this->fontSize/2, $this->fontSize);;

            $letter=$captcha[$i];

            imagettftext($img, $this->fontSize, $rotate, $offX, $offY, $fontColor, $this->font, $letter);

        }

        //add noise

        for($i=0;$i<$this->height*$this->width*($this->noisePercent/100);$i++)

        {

            //noise

            $x=rand(0, $this->width);

            $y=rand(0, $this->height);

            imagesetpixel($img, $x, $y, $noiseColor);

        }

        $_SESSION[$name]=md5($captcha);

        return $img;

    }

}