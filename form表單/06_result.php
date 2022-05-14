<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <!-- 頁數3_結果頁 -->
    <!-- 因要接收php的資料,所以這裡用php檔 -->
    <h1 style="font-size:3rem ; text-align:center">

    <!-- 完整的新手寫法,僅作為理解參考 -->
    <?php
    // 無法把後端的東西用POST(表單)傳送,所以用GET傳送
        $bmi=$_GET['bmi'];
        echo "你的BMI為:".$bmi;
    ?>


    <!-- 回首頁 -->
    <div style="text-align:center">
    <a href="03_BMI.html">
        <button>回到BMI計算</button>
    </a>
    </div>

    </h1>
</body>
</html>