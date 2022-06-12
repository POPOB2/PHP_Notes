<?php



    
// 不定參數 在function名稱的(框內)  使用 ...$變數  可以將外部function連續輸入值, 做為陣列內容連續填入---------------------------------------------------
        // sum(1,999,20,21);
        // function sum(...$arg){//參數會被放入一個$arg陣列中
            // echo $arg[0];
            // echo $arg[1];
            // echo $arg[2];
            // echo $arg[3];
        // }

// 將不定參數總和--------------------------------------------------------------------------------------------------------------------------------------
        sumq(1,999,20,21);
        echo "<hr>";
        sumq(1,2,3,4,5);
        echo "<hr>";
        sumq(55,99,88);
        echo "<hr>";
        sumq(1);
        echo "<hr>";
// ---------------------------------將不定參數總和 方法一. 使用foreach
// ---------------------------------差異: 使用foreach 是所有程式語言都可以使用的 稱為原生語法
        // function sum(...$arg){
        //     $sum=0;
        //     foreach($arg as $i){
        //         $sum=$sum+$i;
        //     }
        //     echo $sum;
        // }
// ---------------------------------將不定參數總和 方法二. 使用PHP內建的功能 array_sum(僅能放入陣列)
// ---------------------------------差異: 內建寫好的函式, 呼叫函式執行, 相當於在function內在呼叫function, 使用函式呼叫函式
function sumq(...$arg){
    echo array_sum($arg);
}
// ---------------------------------不定參數應用
$name="youming";
$p1=['name'=>'衣服','price'=>100];
$p2=['name'=>'鞋子','price'=>200];
$p3=['name'=>'帽子','price'=>300];
$p4=['name'=>'背包','price'=>400];

total($name,$p1,$p2,$p3,$p4);

function total($name,...$cart){
    $sum=0;// 設sum為0, 用於計算總額
    echo "<h1>$name 以下是妳的購物內容</h1>";
    echo "<ul>";
    foreach($cart as $item){
        echo "<li>";
        echo $item['name'];
        echo "==>";
        echo $item['price'];
        echo "</li>";
        $sum=$sum+$item['price'];//總金額$sum=$sum的0+$item陣列提供的值=總金額$sum
    }
    echo "<li>總計".$sum."元";//為了讓陣列可以彙整出總金額,使用了48和57行內容,將陣列內容轉換為變數後傾印
    echo "</ul>";
}
?>