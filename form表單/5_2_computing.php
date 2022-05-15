<!-- 頁數2_計算頁 : 這裡僅作為運算用 -->

<!-- 若要觀看結果 : 把4_1BMI.html的action改為5_2_computing.php-->

<!-- 新增API -->

<?php
// 這裡用於檢視陣列內容
echo "POST陣列內容";
print_r($_POST);
echo "<br>";
echo "GET陣列內容";
print_r($_GET);



// empty被用於判斷陣列是否是空值
// 如果GET是空的 意味傳過來的資料是POST 就用POST的資料接收
// 如果GET不是空的 意味傳過來的資料是GET 就用GET的資料接收
  
  if (empty($_GET)){ //判斷$_GET是否為空,如果為空表示為POST的方式傳送
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        
        
    }else{ //判斷$_GET 有值,用GET的方式把變數內容傳送給height/weight
        $height=$_GET['height'];
        $weight=$_GET['weight'];
    };



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



    //函式header 用 location 定位到 : 4_3_result.php 的頁面去
    header("location:4_3_result.php?bmi=$bmi &result=$result");
    //在header新增 &result=$result 帶入BMI分類
    
?>
