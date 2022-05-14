<h1>迴圈</h1>
<?php
// 20的倍數
for($i=0;$i<10;$i=$i+2){
    echo 'i='.$i.'====> i*10 ='.($i*10)."<br>";
}
echo "<hr>";



// 顯示1~100中的奇數
for($i=1;$i<=100;$i++){
    // echo "第".$i."次迴圈 => ";
    if($i%2==1){
        echo $i.",";
    }
}



echo "<br>";
// 顯示1~100中的奇數
for($i=1;$i<=100;$i=$i+2){
    echo $i.",";
}



// 顯示1*2+1並小於100的結果
echo "<br>";
for($i=1;$i<=100;$i=$i*2+1){
    echo $i.",";   
}
 

?>



<h1>while  / do...while</h1>
<hr>
<?php
// 先While條件 直接執行 / 若未設置結束語句 則 無窮迴圈
$i=200;
while($i<100){

    echo $i;
    $i=$i+1;
}

echo "<hr>";
// 先do執行 在看while條件停止
$i=200;

do{

    echo $i;
    $i=$i+1;

}while($i<100);

?>