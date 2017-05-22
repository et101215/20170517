<?php

if (isset( $_GET['vx'])) {
$x = $_GET['vx'];
$y = $_GET['vy'];
$r = $x + $y;
echo "$r = $x + $y";
}
?>






<form>
    <input type ="text" name="vx" id="x" value="<?php echo $x; ?>"/>
        +
    <input type ="text" name="vy" id="y" value="<?php echo $x; ?>"/>
    <input type ="submit" value="=" />
    <?php  echo $r?>
</form>

