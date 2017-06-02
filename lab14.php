<?php

if(isset($_GET['twid'])){
$twid = $_GET['twid'];

if (preg_match('/^[A-Z][12][1-9]{8}$/', $twid)>0){
   //preg_match = 過濾字串
   //preg_match( 正則表達式 , 要比對的字串 , 非必需:比對結果 )

    $n12s = substr($twid , 0,1);
    //substr() 函數取得部分字串，可設定字串長度
    //例:substr ( 讀取字串 , 字串長度 , 第幾個字元 )
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    $n12 = strpos($letters, $n12s) + 10;
    //strpos() 函數返回字符串在另一個字符串中第一次出現的位置。
    // 如果沒有找到該字符串，則返回 false。
    //例:strpos( 規定被搜索的字符串 , 規定要查找的字符 , 非必需:規定開始搜索的位置 )

    $n1 = (int)($n12 / 10);
    //int =取整數

    $n2 = $n12 % 10;
    $n3 = substr($twid, 1, 1);
    $n4 = substr($twid, 2, 1);
    $n5 = substr($twid, 3, 1);
    $n6 = substr($twid, 4, 1);
    $n7 = substr($twid, 5, 1);
    $n8 = substr($twid, 6, 1);
    $n9 = substr($twid, 7, 1);
    $n10 = substr($twid, 8, 1);
    $n11 = substr($twid, 9, 1);
    $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
        $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;



    if ($sum %10 == 0){
        echo 'OK';
    }else{
        echo 'XX';
    }
}else{
    echo 'XX';

}
}
?>



<form>
    <input type="text" name="twid" />
    <input type="submit" value="check" />
</form>