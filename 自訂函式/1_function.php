<?php


// 這裡的$sum如果function沒有return出來 讓$sum接住結果 會沒有值 是null
$sum=sum(22,10);// sum(22,10)指定給$sum
echo $sum*0.85;// function未return在沒有值的情況下=null=0,  0*0.85=0,  echo出0
sum(22,10);// 直接執行function名稱sum() 結果32 該值雖然有執行有存在, 是否顯示取決於function有無echo指令



// 方法一. 通常避免function太長,所以設定名稱較短的變數將其function指定給該變數
$sum1=sum(22,10); //return給sum,再把sum賦值給$sum1,再由外側echo執行$sum1內的sum結果
echo $sum1;
// 方法二. 這意味著function可以成為被直接使用的變數
echo sum(22,10)*0.85;//將結果32 retrun給function的名稱sum,直接把帶值32的sum乘0.85並echo出來



// function執行"計算"的結果 建議使用return接收, 而不是用echo 真要echo的話 通常function的執行內容是用於讓網頁看的 如table等 就可以用echo
function sum($num1,$num2){
    // echo $num1+$num2; //若沒在function寫上這段echo 外側的sum(22,10)算出為32的值雖然存在,但不會顯示於畫面上,因為外面的sum只接收到執行計算,沒接收到印出
    echo "<br>";
    return $num1+$num2;//$num1+$num2;計算完的結果使用return將結果指定給function的名稱sum 而不是變數的$sum
    
}
// 若function產生的結果是要再利用 會用return , 若執行結果有特定目的 不做return也可以 可以使其執行完就結束 尤其是用於"顯示"



// 可以用function把引導頁面縮寫成to------------------------------------------------
// function to($url){
function to($url='index.php'){//預設function的to預設為index.php, 當使用to時未輸入導引目的地, 會導引到預設的index.php
    header('location:'.$url);
}
function connect(){
    $dsn="SADASD";
}
// to('index.php');



// 使用function直接顯印出陣列------------------------------------------------
dd(['a'=>11,'b'=>12,'count'=>['G'=>"a man","T"=>"asdqwezxc"]]);
// dd=>direct dump 直接頃印
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


?>