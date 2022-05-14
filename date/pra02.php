<h1>給定兩個日期,計算中間間隔天數</h1>
<?php
$day1="2022-4-10";
$day2="2022-4-20";
echo "日期一=>".$day1."<br>";
echo "日期二=>".$day2."<br>";
// starttotime 從1970/1/1的000000開始算, 轉換成秒數 
$time1=strtotime($day1);
$time2=strtotime($day2);
echo $time1."<br>";
echo $time2."<hr>";
// 1650405600秒(20天) - 1649541600秒(10天) = 864000秒(10天) - 86400秒(1天) =777600(9天)
$gap=($time2-$time1-(24*60*60));
// 此時gap是用strtotime的$time以秒數呈現,即777600所以用一天的秒數(60*60*24) 去除出天數 得出9
$gap=$gap/(60*60*24);

$duration=($time2-$time1+(24*60*60));
$duration=$duration/(60*60*24);

$diff=($time2-$time1);
$diff=$diff/(60*60*24);

echo "中間間隔" . $gap. "天<br>";
echo "經過了" . $duration. "天<br>";
echo "相差了" . $diff. "天<br>";


?>

