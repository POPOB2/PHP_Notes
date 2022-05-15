


<!-- 頁數2_計算頁 : 這裡僅作為運算用 -->



<!-- $_GET 是 PHP專用的變數  系統變數 -->
<?php
// 由此得知 $_GET 陣列存在  但是沒有"值"的空陣列
// 由03_BMI.html 輸入資訊 
// computing.php接收後  顯示 Array ( [height] => 176 [weight] => 70 ) 
            print_r($_GET);
            echo "<br>";


// 使用 $height=$_GET['height'] 接收 03_BMI.html 發送的 height 資料
            $height=$_GET['height'];
// 使用 $weight=$_GET['weight'] 接收 03_BMI.html 發送的 weight 資料
            $weight=$_GET['weight'];


//也可以寫 echo "身高為".$_GET['height'];  雖然一樣的效果,但這樣比較長
            echo "身高為:".$height;
            echo "<br>";
            echo "體重為:".$weight;
            echo "<br>";


//由左到右算 避免先乘除後加減的問題 多加一個框號在最外層
//這裡會顯示小數點後12位數
            $bmi=$weight/(($height/100)*($height/100));

//加上函式round ,大框 第一個值為算式 逗號後 第二個值為顯示小數點後幾數
            $bmi=round($weight/(($height/100)*($height/100)),1);
            echo "<br>";
            echo "BMI值為:".$bmi;
 ?>





