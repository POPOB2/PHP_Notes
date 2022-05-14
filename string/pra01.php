<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="index.html">回目錄</a>
    </div>
    <h1>字串取代</h1>
<article>
<h3>字串取代</h3>
<div>將”aaddw1123”改成”*********”</div>

</article>
<?php
$password="aaddw1123";
//str_replace() 
//$password=str_replace(["a","d","w","1","2","3"],"*",$password);
$strlen=mb_strlen($password);
$password=str_repeat("*",$strlen);
echo $password;
?>
</body>
</html>