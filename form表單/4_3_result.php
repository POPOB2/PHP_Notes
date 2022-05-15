<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果+BMI分類(進階)</title>
</head>
<body>
    <!-- 頁數3_結果頁 -->
    
    <h1 style="font-size:3rem ; text-align:center">
    你的BMI值為:<?=$_GET['bmi']?>
    </h1>
    <h2 style="text-align:center ;">判定結果為:<?=$_GET['result']?></h2>

   

    <!-- 回首頁 -->
    <div style="text-align:center">
    <a href="4_1_BMI.html">
        <button>回到BMI計算</button>
    </a>
    </div>

    
</body>
</html>