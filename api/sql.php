<?php
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'user';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES uff8');
    // echo "正確連接資料庫";
}
else {
    echo "erro:无法连接到资料库！</br>" . mysqli_connect_error();
}
?>

