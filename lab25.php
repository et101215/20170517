<?php
$imgSrc = imagecreatefromgif (
    "./img/imgw400.gif" );
//    ImageCreateFromGIF( )傳回一個圖形 identifier，表示從給予的檔名中獲得圖形。
//    ImageCreateFromGIF( )失敗時則傳回一個空字串，它也會傳回一個錯誤訊息，
//      這個錯誤訊息不幸地顯示出像是瀏灠器中一個斷裂的連結

$imgDst = imagecreate(200, 200);
//      ImageCreate( )傳回一個圖形的identifier，
//                      表示大小為 x_size、y_size的一個空白的圖形。
$imgSW = imagesx($imgSrc);
//      ImageSX( )傳回圖形 im的寬度。
$imgSH = imagesy($imgSrc);
//      ImageSY( )傳回圖形 im的高度。
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
}
imagecopyresized (
    $imgDst , $imgSrc,
    0 , 0,
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
//  ImageCopyResized( )複製圖形的一個矩形部份到另一個圖形。
//      $imgDst是目的地的圖形，$imgSrc是來源的圖形，如果來源和目的地的寬和高相異的話，
//      則將會執行圖形的延伸或是縮短，此函式可以複製在相同的圖形中(如果$imgDst和$imgSrc是相同的話)，
//      但是如果複製的範圍重疊時，其結果將會無法預料。

header('Content-Type: image/jpeg');
imagejpeg($imgDst);
//      ImageJPEG ---  輸出圖形到瀏灠器或是檔案


imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );
//      ImageDestroy ---  結束圖形