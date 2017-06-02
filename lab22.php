<?php

$fp = file("lab-lab01.csv");
//file() 函数把整个文件读入一个数组中

?>

<form>
    <!--    fm=表格-->
    <table border="1" width="100%">
        <!--        width=控制表格長度，可用數字或百分比-->
        <!--        cellspaing=控制儲存格的分隔距離，內定為-->
        <!--        background=背景圖檔-->
        <!--        border=控制外框粗細，不外框便設成0-->
        <tr>
            <th>name</th>
            <th>name</th>
            <th>name</th>
            <th>name</th>
            <th>name</th>
        </tr>
        <!--            若想跳到下一行，加上<tr>即可 :-->
        <!--            <table border=1>-->
        <!--                <td>儲存格1</td>-->
        <!--                <td>儲存格2</td>-->
        <!--                <tr>-->
        <!--                <td>儲存格3</td>-->
        <!--                <td>儲存格4</td>-->
        <!--            </table>-->

        <?php
        foreach ($fp as $line) {
            $files = explode(',', $line);
//            explode ---  切開字串
            echo "<tr>";
            foreach ($files as $filedd) {
                echo "<td>{$filedd}</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
</form>









