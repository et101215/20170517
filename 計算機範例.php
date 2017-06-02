<?php
/*
蒼鴻製造(Hung)
*/
//自訂函數
function calculate($class,$numA,$numB)
{
    switch ($class)
    {
        case 1:
            $end = $numA + $numB;
            break;
        case 2:
            $end = $numA - $numB;
            break;
        case 3:
            $end = $numA * $numB;
            break;
        default:
            $end = $numA / $numB;
    }
    return $end;
}
//判斷$_POST是否有東西 如有才執行
if(isset($_POST['numA']) and isset($_POST['numB']) and isset($_POST['class']))
{
    $numA = $_POST['numA'];
    $numB = $_POST['numB'];
    $class = $_POST['class'];
    $end = calculate($class,$numA,$numB);
}
?>


<title>計算機</title>


<form id="form1" name="form1" method="post" action="">
    <p>請輸入第一個數字:
        <label>
            <input type="text" name="numA" id="numA" />
        </label>
    </p>
    <p>請輸入第二個數字:
        <label>
            <input type="text" name="numB" id="numB" />
        </label>
    </p>
    <p>請選擇運算符號:
        <label>
            <select name="class" id="class">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select>
        </label>
    </p>
    <p>
        <label>
            <input type="submit" value="運算">
        </label>
        <label>
            <input type="reset" value="重新填寫">
        </label>
    </p>
    <p>結果:
        <label>
            <input type="text" name="textfield" id="textfield" value="<?php echo $end;?>"/>
        </label>
    </p>
</form>