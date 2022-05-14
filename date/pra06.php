<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆-單個月</title>
    <style>
        table{
            border-collapse: collapse;
        }

        table td{
            padding: 5px;
            text-align: center;
            border:1px solid #aaa;
        }
    </style>
</head>
<body>
<?php
$month=4;

?>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

$firstday=date("Y-").$month."-1";
$firstweekday=date("w",strtotime($firstday));
$monthdays=date("t",strtotime($firstday));
$lastday=date("Y-").$month."-".$monthdays;
$today=date("Y-m-d");

echo "月份".$month;
echo "<br>";
echo "第一天是".$firstday;
echo "<br>";
echo "第一天是星期".$firstweekday;
echo "<br>";
echo "最後一天是".$lastday;
echo "<br>";
echo "當天月數共".$monthdays;
echo "<br>";

for($i=0;$i<6;$i++){
    echo "<tr>";

    for($j=0;$j<7;$j++){
        $d=$i*7+($j+1)-$firstweekday-1;


        if($d>=0 && $d<$monthdays){
        $fs=strtotime($firstday);
        $shiftd=strtotime("+$d days",$fs);
        $date=date("d",$shiftd);
        $w=date("w",$shiftd);
        $chktoday="";
        if(date("Y-m-d",$shiftd)==$today){
            $chktoday='today';
        }
        if($w==0 || $w==6){
            echo "<td class='weekend $chktoday'>";
        }else{
            echo "<td class='workday $chktoday'>";
        }   
        echo $date;
        echo "</td>";
    }else{
        echo "<td></td>";
    }
    }
    echo "</tr>";
}

?>
</table>
</body>
</html>
