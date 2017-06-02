
<!--    //isset判斷的是 "變數"-->
<!--    //$_GET 必須使用大寫來表示-->

<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    $plus = ['plus'];

    $r = "$x $plus $y";
}
?>
<form>
    <input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>
    <select>
        <option value="+" name="plus">+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
    </select>

    <input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="="/>
    <?php
    echo $r;
    ?>
</form>