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

$s_d_name = $_GET['d_name'];
// $s_age = $_POST['age'];
// $s_depart = $_POST['depart'];




$sql = "DELETE FROM student WHERE name='$s_d_name'";


if (mysqli_query($con, $sql)) {
    echo "succefully data delete";
} else {
echo "error not insert data". mysqli_error($con);
}

// close connection
mysqli_close($con)

?>