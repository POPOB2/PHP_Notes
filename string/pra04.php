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
    <h1>子字串的應用</h1>
    <article>
        <h3>子字串取用</h3>
        <div>
            將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</article>
        </div>

<?php
//$str="The reason why a great man is great is that he resolves to be a great man";
$str="有12志3者事竟成";
echo $str;
echo "<br>";
//$newStr=substr($str,0,3);
$newStr=mb_substr($str,0,3);
//$newStr=mb_substr($str,0,10);

echo $newStr . "...";


?>
    </body>

</html>