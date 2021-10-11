<?php
   session_start();

   //create random number
   $rand_num = rand(1111,9999);
   $_SESSION['CODE'] = $rand_num;

   //create captcha image
   $layer = imagecreatetruecolor(60,30);
   $captch_bg = imagecolorallocate($layer, 255,160,120);

   //$image,$x,$y,$color
   imagefill($layer,0,0,$captch_bg);

   $captch_text_color = imagecolorallocate($layer,0,0,0);
   imagestring($layer, 5, 5, 5, $rand_num, $captch_text_color);
   header('Content-Type:image/jpeg');
   imagejpeg($layer);

?>