<?php

// 要做帳號密碼的檢查,意味著我需要一個資料,裡面顯示我本來的帳號密碼是什麼
// 先建立一個 帳號密碼預設
$default_user='ke';
$default_pwd='1234';



$acc=$_POST['acc'];
$pwd=$_POST['pwd'];

// 用於存入相關資訊  整判斷錯誤的狀況  若正確 就不處理
$error='';
// 若不等於以下兩種其一的狀況 就執行$error=帳號密碼錯誤 把此訊息帶給前端頁面
// 即 登入不成功=error有值(帳號密碼錯誤),反之若error沒有值 即登入成功
// 兩種處理方式 1.只處理錯誤訊息  2.
if($acc!==$default_user || $pwd!==$default_pwd){
    $error="帳號密碼錯誤";

//上方處理完 用header帶到其他php頁面   
header("location:1_login.php?error=$error");//如果帳密錯誤 把USER導到login.php去,並顯示 帳號密碼錯誤 的錯誤訊息
}else{
header("location:3_memcenter.php?user=$acc");//如果帳密正確 把USER導到memcenter.php去 
}


?>