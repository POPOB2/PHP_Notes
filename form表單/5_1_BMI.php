



<!-- 一般來說現在不會碰到有人把資料型態全寫在同一個頁面
     但預防碰到年數已久的舊資料寫法,寫在同一頁面
     因此用此範例參考,一般不建議這樣寫 -->



<!-- ------------------------------把計算頁 放到 表單頁------------------------------  -->
<!-- 一般建議像PHP這類處理純參數的程式, 放在最前面,置於html碼的前面 -->

<?php
// 這裡用於檢視陣列內容
// echo "POST陣列內容";
// print_r($_POST);
// echo "<br>";
// echo "GET陣列內容";
// print_r($_GET);


//新增一個if !empty 判斷GET/POST計算程式 是否"不"為空(即沒有表單資料)
//如果是 不為空 則整個程式不運算,使其正常進入html的表單頁面
    if (!empty($_GET) || !empty($_POST)){

    if (empty($_GET)){ //判斷$_GET是否為空,如果為空表示為POST的方式傳送
        $height=$_POST['height'];
        $weight=$_POST['weight'];
         
    }else{ //判斷$_GET 有值,用GET的方式把變數內容傳送給height/weight
        $height=$_GET['height'];
        $weight=$_GET['weight'];
    };




$bmi=round($weight/(($height/100)*($height/100)),1);


     // BMI結果分類 

     $result='';

    if($bmi >= 27){
        $result= "肥胖";
    }else if($bmi >=24 && $bmi < 27){
        $result= "過重";
    }else if($bmi >=18.5 && $bmi < 24){
        $result= "健康";
    }else if($bmi < 18.5){
        $result= "過輕";
    }

    // 已在同一頁把表單結果傳給5_1_BMI.php自身, 不需header做導向,這裡註解掉header
    // header("location:4_3_result.php?bmi=$bmi &result=$result");


  //if !empty 的結尾前因為沒有else所以不會有要執行的事情,什麼事情都不執行,繼續向下跑html的表單頁部分      
} //if !empty 的結尾需下在這裡包括整個計算式

    
?>
    <!-- -------------------------------------表單頁------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算---更改為php</title>
</head>
    <!-- -------------------------------------表單頁------------------------------------->
<body>

    <?php // GET跟POST都為空值  表示沒有送出資料  就會顯式表單.  < 將執行的句尾框 } 放到下面 >
    if (empty($_GET) && empty($_POST)){
    ?>

    <h1>BMI計算</h1>
    <!-- 把表單結果傳給5_1_BMI.php自身,如何判斷收到哪些值,見上方計算頁-->
    <form action="5_1_BMI.php" method="POST">
        
        <div>
            <label for="">身高(cm):</label><input type="number" name="height" id="">
        </div>
        <div>
            <label for="">體重(kg):</label><input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="計算BMI">
        </div>

    </form>
     
    <?php
        //  ( 上面框下來的執行區域 在PHP中 會把裡面的這些內容以echo執行 )
        //  < 上面的if empty句尾框下在這裡接else再把 } 向下到下一區域 >
    }else{
    ?>

    <!-- ------------------------------把結果頁 放到 表單頁------------------------------ -->
    <h1 style="font-size:3rem ; text-align:center">

    <!-- 因為計算頁在同一頁,所以不需要用GET接收$bmi  -->
    <!-- < ?=$_GET['bmi']?>更改為下列 -->
    你的BMI值為:<?=$bmi;?>
    </h1>

    <!-- 因為計算頁在同一頁,所以不需要用GET接收$result  -->
    <!-- < ?=$_GET['result']?>更改為下列 -->
    <h2 style="text-align:center ;">判定結果為:<?=$result;?></h2>

    <!-- 回首頁 -->
    <div style="text-align:center">
    <!-- 更改為5_1_BMI.php回到自己的頁面,回到自己這個頁面是不帶參數的,所以會把結果清除 -->
    <a href="5_1_BMI.php">
        <button>回到BMI計算</button>
    </a>
    </div>

    <?php
    }
    ?>
</body>

</html>