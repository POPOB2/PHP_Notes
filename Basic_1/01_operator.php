<h1>運算子</h1>
<h3>一元運算子</h3>
<?php
// 對一個變數結果 產生影響
$a=true;
echo !$a;
echo "<hr>";
$b=1;
//$b=$b+1  ,$b=$b-1
echo ++$b;
echo --$b;
?>
<h3>二元運算子</h3>
<?php
// 將兩個變數互相影響 產生結果
$a=111;
$b=10;
echo $a-$b;
echo "<hr>";
echo $a+$b;
echo "<hr>";
echo $a-+$b;
echo "<hr>";
echo $a*$b;
echo "<hr>";
echo $a/$b;
echo "<hr>";
echo $a%$b;
echo "<hr>";
?>
<h3>三元運算子</h3>
<h3>交換變數</h3>
<!-- 套入第三個變數 影響兩個結果 -->
<?php
$a=10;
$b=50;

$tmp=$a;
$a=$b;
$b=$tmp;
echo 'a='.$a;
echo "<br>";
echo 'b='.$b;

// $a=50;$b=10; 錯誤為$a=$b  $b=$a 
// 因為a=b意味把b的50給了a導致a變50
// 下一行的b=a等於把被覆蓋的a50又覆蓋b50
// 導致a和b都50

// 正確為$$tmp=$a 是把$a放入$tmp內作為"暫存" 
// $a=$b 是把b的50給a 覆蓋成50
// $b=$tmp 是把暫存的tmp10(原a)給b變成
// tmp10覆蓋b50把b變成10
?>