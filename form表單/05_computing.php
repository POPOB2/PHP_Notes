


<!-- 頁數2_計算頁 : 這裡僅作為運算用 -->
<!-- 精簡後 -->

<?php

$height=$_GET['height'];
$weight=$_GET['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);

//東西計算完之後傳出去 GET POST 還要人為點擊  為了讓資料自動處理完自動傳出

//函式header 用 location 定位到 : 06_result.php 的頁面去
header("location:06_result.php?bmi=$bmi");
// 在php中"雙"引號可以帶變數
?>

