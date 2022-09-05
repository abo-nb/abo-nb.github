<?php
require_once 'sql.php';

$name = $_GET["username"];
$psw = $_GET["psw"];
$email = $_GET["email"];
$data = $_GET["date"];
$gender = $_GET["gender"];





// $sql = "INSERT INTO `user` (`username`, `paw`, `email`) VALUES ('" . $name. "', '" . md5($psw) . "', '" . $email . "')";
$sql = "INSERT INTO `user` (`username`, `paw`, `email`, `date`, `Birthday`) VALUES ('".$name."', '".md5($psw)."', '".$email."', '".$data."', '".$gender."')";

// echo INSERT($name,$psw,$email);
$result = mysqli_query($link,$sql);
mysqli_close($link); 
if($result ==1 ){
    echo "帐号建立成功";
}
else
{
    echo "失败！";
}


//email')
// function INSERT($n,$p,$e){
//     return "INSERT INTO `user` (`username`, `paw`, `email`) VALUES ('" . $n . "', '" . $p . "', '" . $e . "')";

// //    return $n + $p $e;
// }
?>