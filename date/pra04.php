<h1>時間格式練習</h1>




<?php date_default_timezone_set("Asia/Taipei");?>

<?=date("Y/m/d");?>
<hr>

<?=date("n月j日l");?>
<hr>

<!-- 因分和秒 只有有前導零的設定 -->
<?=date("Y-n-j-l G:i:s");?>
<!-- 所以用int 顯示整數-->
<br>
<?=date("Y-n-j-l G").":".(int)date("i").":".(int)date("s");?>
<hr>

<!-- 有前導零的時間 -->
<?=date("Y-m-d-l H:i:s");?>
<hr>

<!-- 因帶入函式 不可用簡寫
     依需求選用w or N來設定
     w=0（表示星期天）到 6（表示星期六）
     N=1（表示星期一）到 7（表示星期天） -->
<?php
$workday="";
$w=date("w");
if($w==0 ||$w==6){
    $workday="假日";
}else{
    $workday="工作日";
}
echo date("今天是西元Y年n月j日是") . $workday;

?>
<hr>


時間相關參考:
https://www.php.net/manual/zh/function.date.php





