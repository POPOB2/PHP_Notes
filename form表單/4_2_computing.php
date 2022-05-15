<!-- 頁數2_計算頁 : 這裡僅作為運算用 -->
<!-- 精簡後 -->

<?php
// 若表單頁的method更改為POST發送時,計算頁的GET也要改為POST接收
$height=$_GET['height'];
$weight=$_GET['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);




     // BMI結果分類 / 於 計算頁 執行

     $result='';

    if($bmi >= 27){
        $result= "肥胖";
    }else if($bmi >=24 && $bmi < 27){
        $result= "過重";
    }else if($bmi >=18.5 && $bmi < 24){
        $result= "健康";
    }else if($bmi < 18.5){
        $result= "過輕";
    }




    //在php中"雙"引號可以帶變數
    //函式header 用 location 定位到 : 4_3_result.php 的頁面去
    header("location:4_3_result.php?bmi=$bmi &result=$result");
    //在header新增 &result=$result 帶入BMI分類
    
?>
