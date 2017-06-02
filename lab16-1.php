<?php


$account = $_REQUEST['account'];
$password = $_REQUEST['password'];
$bithday = $_REQUEST['bithday'];
$select = $_REQUEST['select'];
$like = $_REQUEST['like'];


echo $account.'<br>';
echo $password.'<br>';
echo $bithday.'<br>';
echo $select.'<br>';

foreach ($like as $n)
        {echo $n;}


//    foreac陣列指令 ( 帶入$like as=輸出為陣列 陣列命名$n )
//          {echo顯示 $n陣列 ;}

