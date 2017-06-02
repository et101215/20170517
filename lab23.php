<?php

if(!isset($_GET['rate'])) exit(0);
//isset判斷的是 "變數"
//exit(0代表正常結束)

$rate = $_GET['rate'];

$img = imagecreate(400, 80);
//      ImageCreate --- 建立一個新的圖形(寬、高)

header('Content-Type: image/jpeg');
//  header ---  送出HTTP標頭
//      此範例為(內容-類型:image/jpeg檔)
//      此外還有可以引導瀏灠器到新的地方功能

$yellow = imagecolorallocate($img, 255, 255, 0);
$red = imagecolorallocate($img, 255, 0, 0);
//      ImageColorAllocate ---  分配圖形的顏色紅、綠、藍0-255

imagefilledrectangle($img, 0, 0, 400, 80, $yellow);
imagefilledrectangle($img, 0, 0, (int)$rate*400/100, 80, $red);
//ImageFilledRectangle ---  建立一個矩形並且填滿顏色

imagejpeg($img);
//ImageJPEG ---  輸出圖形到瀏灠器或是檔案

imagedestroy($img);
//ImageDestroy --- 結束圖形