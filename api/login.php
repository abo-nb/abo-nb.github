<?php
require_once 'sql.php';
$user = $_GET["name"];
$psw = md5($_GET["psw"]);
// $sql = "SELECT * FROM `user` WHERE `username` LIKE '" . $user . "' AND `email` LIKE '" . $psw . "'";
$sql = "SELECT * FROM `user` WHERE `username` LIKE '" . $user . "' AND `paw` LIKE '" . $psw . "'";
$result = mysqli_query($link,$sql);
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        echo "sign in suceesfully";
        }
        else
        {
            echo "erro:Incorrect username or password";
        }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);



?>