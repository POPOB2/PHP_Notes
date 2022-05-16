<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
<h1>會員登入</h1>
<?php
// empty=若空值, + ! 顛倒結果後=若不空值
// 若error不是空值=帳號密碼錯誤, 就在此執行一段 echo 2_checklogin.php 的 $_GET['error']
if(!empty($_GET['error'])){
    echo "<h3 style='color:red'>{$_GET['error']}</h3>";
}



?>
<form action="2_checklogin.php" method="post">
    <table>
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="text" name="pwd"></td>
        </tr>
    </table>

    <div>
    <input type="submit" value="登入">
    <!-- reset是form表單才有用的功能,reset=input項目本來是有"值"的, 改變內容後 使用reset後會回復到"原有值"的狀態
         假設:原有值:1  更改為2  使用reset會回到1, 若是空值 reset 就回復到 空值 ,reset的重置 和 clear的清空 是不同的 -->
    <input type="reset" value="重置">
    </div>
</form>
</body>
</html>