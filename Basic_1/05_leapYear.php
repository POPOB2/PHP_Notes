<h3>閏年的判斷</h3>
<h1>if...else</h1>
<?php
// ***巢狀***
//     $year=1596;
//     echo $year."<BR>";
// if($year%4!=0){
//     echo "這是平年";
// }else if($year%100!=0){
//     echo "這是閏年";
// }else if($year%400!=0){
//     echo "這是平年";
// }else{
//     echo "這是閏年";
// }

$year=1600;
echo '年=>' . $year . "<br>";

if((($year % 4 == 0) && ($year%100!=0)) || ($year%400==0)){
    echo "這是閏年";
}else{
    echo "這是平年";
}


?>
