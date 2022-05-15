<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果+BMI分類</title>
</head>
<body>
    <!-- 頁數3_結果頁 -->
    <!-- 因要接收php的資料,所以這裡用php檔 -->
    <h1 style="font-size:3rem ; text-align:center">

    
    <?php
    // **********完整的新手寫法,僅作為理解參考**********
    // 無法把後端的東西用POST(表單)傳送,所以用GET傳送
            $bmi=$_GET['bmi'];
            echo "你的BMI為:".$bmi;
            echo "<br>";
    // 把計算頁的結果用 $_GET['result'] 導回結果頁
            echo "判定結果為:".$_GET['result']
    ?>

   
    <?php
    // BMI結果分類 / 於 結果頁 執行  (為減少結果頁負擔,建議於計算頁執行)
            if($bmi >= 27){
                echo "肥胖";
            }else if($bmi >=24 && $bmi < 27){
                echo "過重";
            }else if($bmi >=18.5 && $bmi < 24){
                echo "健康";
            }else if($bmi < 18.5){
                echo "過輕";
            }
    ?>

    <!-- 回首頁 -->
    <div style="text-align:center">
    <a href="3_1_BMI.html">
        <button>回到BMI計算</button>
    </a>
    </div>

    </h1>
</body>
</html>