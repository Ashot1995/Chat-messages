<?php

$uname = $_REQUEST["uname"];
$msg = $_REQUEST["msg"];
$date = date("Y-m-d H:i:s");


$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "chatbox") or die(mysqli_error());


$uname = strip_tags($uname);
$msg = strip_tags($msg);
$date = strip_tags($date);

mysqli_query($con, "INSERT INTO `chatbox`.`logs` (`username` , `msg`,`time`) VALUES ('$uname','$msg','$date')");
$result1 = mysqli_query($con, "SELECT * FROM `logs` ORDER by id DESC LIMIT 5") or die(mysqli_error());

while ($extract = mysqli_fetch_assoc($result1)) {
    ?><h5><?php echo $extract["username"]; ?></h5><?php echo $extract["msg"] . " : " . $extract["time"] . "<br>";

}
