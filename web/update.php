<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdb";

$con = mysqli_connect($servername, $username, $password,    $database);

if (!$con) {
    die('failed'. mysqli_connect_error());
}else{
    echo "connection built";
}

// getting data from html form

$s_new_name = $_GET['new_name'];
$s_u_name = $_GET['u_name'];
// $s_age = $_POST['age'];
// $s_depart = $_POST['depart'];




$sql = "UPDATE student SET name = '$s_new_name', age= '22', depart='AI' WHERE name='$s_u_name'";


if (mysqli_query($con, $sql)) {
    echo "succefully data update";
} else {
echo "error not insert data". mysqli_error($con);
}

// close connection
mysqli_close($con)

?>