<?php

$server='127.0.0.1:3307';  //資料庫port號
$user='root';              //資料庫帳戶
$database='test';         //資料庫名稱
$dbppass='';
$account = $_POST['id'];       //表單的資料(帳號)
$passwd = $_POST['passwd'];    //表單的資料(密碼)

if(!$account || !$passwd){
    echo'<p>兩欄位必填';
    exit();
}

$db = new mysqli($server,$user,$dbppass,$database);

if(mysqli_connect_errno()){
    echo'<p>連線失敗</p>';
    exit();
}

$query = "SELECT username,password FROM guest WHERE username=? AND password=?";

$stmt = $db ->prepare($query);
$stmt->bind_param('ss',$account,$passwd);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($ac,$pw);
$stmt->fetch();

if($stmt->num_rows <1){
    
    echo'<meta http-equiv="refresh" content="0;url=login_fail.html"></br>';
    
}
elseif($ac==$account && $pw==$passwd){
    
    echo'<meta http-equiv="refresh" content="0;url=login_success.html"></br>';
    
}
else{
    echo'<p>驗證出錯，即將返回登入頁面......</p></br>';
    //echo'<meta http-equiv="refresh" content="2;url=login.html"></br>';
    //echo'<a href="login.html">不想等待，請按此</a>';
}



$stmt->free_result();
$db->close();

?>

