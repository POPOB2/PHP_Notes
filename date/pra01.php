<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間練習</title>
</head>
<body>
    <h1>日期/時間練習</h1>


    <?php
    // 格林威治時間
    // echo date("Y-m-d H:i:s");

    // 設定所在地區時間
    date_default_timezone_set("Asia/Taipei");
    echo "<br>";
    echo date("Y-n-d H:i:s");
    echo "<br>";
    // 把時間格式化(format)
    echo date("Y 年 n 月 d 日 H 點 i 分 s 秒");
    echo "<br>";
    // 
    
    
    
    ?>
    <h2>strtotime()</h2>
    <?php
    // 時間日期字串格式 yyyy-mm-dd hh:mm:ss
    $time="2021-10-01 10:12:30";
    $s=strtotime($time);
    echo $s;
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l ",$s);
    echo "<br>";
    $splus=strtotime("+2 days",$s);
    echo date("西元 Y 年 m 月 d 日 l ",$splus);
    ?>
    

</body>
</html>