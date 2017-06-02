<form action="lab16-1.php" method="get">

    name:<input type="text" name="account"><br>
    password:<input type="password" name="password"><br>
    bithday:<input type="date" name="bithday"><br>


    <select name="select">
        <option value="401">南屯區</option>
        <option value="402">北屯區</option>
        <option value="403">西屯區</option>
        <option value="404">中區</option>
    </select>


    <input type="radio" name="gender" value="F" checked>Female
    <input type="radio" name="gender" value="M">Male

<!--    radio=單選欄位-->

    <input type="checkbox" name="like[]" value="1">1
    <input type="checkbox" name="like[]" value="2">2
    <input type="checkbox" name="like[]" value="3">3<br>

<!--    checkbox=複選欄位-->

    <textarea name="textarea"></textarea><br>
    <input type="file"><br>

<!--    textarea=文字輸入框-->
<!--    file=夾帶檔案、檔案上傳-->


    <input type="submit" value="送出">

</form>