<h1>使用程式來控制時間</h1>
<?php
$today=date("Y-m-d l");
echo $today;
echo "<br>下周一";
$todaytime=strtotime(date("Y-m-d"));

// $n=設為未來幾周

$n=5;
for($i=0;$i<=$n;$i++){
    $nexweek=strtotime("+$i week",$todaytime);
// 上面的strtotime中的week也可以換成年月日等單位
echo date("Y-m-d l",$nexweek)."<br>";
}
?>