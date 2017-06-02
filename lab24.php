<?php



$img = imagecreatefromjpeg("./img/AAA.jpg");
//      ImageCreateFromJPEG ---  從檔案或URL建立一個新的圖形

$blue = imagecolorallocate($img,0,0,255);
//      ImageColorAllocate ---  分配圖形的顏色紅、綠、藍0-255

imagefttext($img , 24 , 90 , 100 , 100 , $blue , "./fonts/fireflysung.ttf" ,
"Hello, world");
//      imagefttext(圖形檔案,文字大小,旋轉角度,位置x、y,文字顏色,字型檔位置)

header('Content-Type: image/jpeg');
//  header ---  送出HTTP標頭
//      此範例為(內容-類型:image/jpeg檔)
//      此外還有可以引導瀏灠器到新的地方功能

imagejpeg($img);
//  ImageJPEG --- 輸出圖形到瀏灠器或是檔案

imagedestroy($img);
//  ImageDestroy --- 結束圖形