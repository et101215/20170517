<?php
$poker = range(0,51);
shuffle($poker);
//foreach ($poker as $card){
//echo $card . '<br>';}

echo '<hr>';

foreach ($poker as $i=> $value){
    $playaer[$i%4][(int)($i/4)]=$value;
}

?>


<table border="1" width="100%">
    <?php

    foreach ($playaer as $sb){
        echo '<tr>';
        foreach ($sb as $card) {
            echo "<td>{$card}</td>";
        }
        echo '</tr>';
    }


    ?>

</table>

