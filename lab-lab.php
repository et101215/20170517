<?php

if(isset($_GET['twid'])) {
    $twid = $_GET['twid'];


    if (preg_match('/^[A-Z][12][1-9]{8}$/', $twid) > 0) {
        //preg_match = 過濾字串
        //preg_match( 正則表達式 , 要比對的字串 , 比對結果)

        $n12s = substr($twid, 0, 1);


        //substr() 函數取得部分字串，可設定字串長度
        //例:substr( $x , $y , $z )
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letters, $n12s) + 10;
    }
}
?>



<form>
    <input type="text" name="twid" />
    <input type="submit" value="check" />
</form>