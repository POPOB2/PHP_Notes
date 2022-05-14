<h1>計算生日倒數</h1>
<?php
$birthday="03-02";
echo "你的生日是".$birthday."<br>";
// 放'now'會顯示當下時間
// $now=strtotime('now');
$today=strtotime(date("Y-m-d"));
$mybirth=strtotime(date("Y-").$birthday);

// 把年月日以秒數拆成至小時 時,如果無法被24小時除以整數時會以小數點顯示
echo "<hr>";
echo "today 秒數" . $today."<br>";
echo "mybirth 秒數" . $mybirth."<br>";
echo $today-$mybirth;
$diff2=$today-$mybirth;
echo "<br>";
echo $diff2/60;
echo "<br>";
echo $diff2/(60*60);
echo "<br>";
echo $diff2/(60*60*24);
echo "<hr>";
// 碰到跨年產生的小數點問題 ,可以用floor或ceil改善

$diff=0;
$result="";
// >0生日未過 =0生日到了  <0生日已經過了
if($mybirth-$today>0){
    $diff=floor(($mybirth-$today)/(24*40*60));

    $result="還想吃蛋糕,噎屎啦你,在等".$diff."天吧";
}else if ($mybirth-$today<0){
    $mybirth=strtotime("+1 year",$mybirth);
    $diff=floor(($mybirth-$today)/(24*60*60));

    $result="還想吃蛋糕,噎屎啦你,在等".$diff."天吧";

}else{

    $result= "祝你福壽與天齊";
}
echo $result;



?>