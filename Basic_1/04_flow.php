<h1>流程結構</h1>
<h3>if....else</h3>
<?php
// ***基礎結構***
// $score=80;
// echo "成績".$score;
// echo "<br>";
// if($score>=60){
//     echo "及格";
// }else{
//     echo "不及格";
// }



// ***連續結構-巢狀***
// 把結果往下一個傳一個,效率較差
// 把不達標的數字向下引導其他結果
$score = 25;
echo "成績=" . $score;
echo "<br>";
if ($score >= 60) {

    if ($score >= 85) {
        echo "及格，而且很棒";
    } else {
        echo "及格，還可以再更進步";
    }
} else {
    if ($score >= 30) {

        echo "不及格,再多加油";
    } else {
        echo "不及格,重新開始";
    }
}

if ($score >= 85) {

    echo "及格，而且很棒";
} else if ($score >= 60) {

    echo "及格，還可以再更進步";
} else if ($score >= 30) {

    echo "不及格,再多加油";
} else {

    echo "不及格,重新開始";
}

?>

<h3>switch...case</h3>
<?php
// 如果大於100或小於0,觸發level=5的結果
// if($score>100 || $score<0){
//     $level=5;
// }else{
// $level=floor($score/25);
// }
$score = 500;
$level = ($score > 100 || $score < 0) ? 5 : floor($score / 25);

/* if($score>100 || $score<0){
    $level=5;
}else{
    $level=floor($score/25);
} */
echo $level;
/* if($score >= 85){
    $level='A';
}else if($score>=60){
    $level='B';
}else if($score>=30){
    $level='C';
}else{
    $level='D';
} */

switch ($level) {
    case 4: //100~
    case 3: //75~99
        echo "表現優良，請繼續保持";
        break;
    case 2: //50~74
        echo "值得肯定，還有進步空間";
        break;
    case 1: //25~49
        echo "需要更多的練習";
        break;
    case 0:  //0~24
        echo "需要加強基本功";
        break;
    default://不符合以上條件,0以下,負數
        echo "成績不合理(0~100)，請重新輸入";
}

