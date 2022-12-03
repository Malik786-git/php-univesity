<?php 

// $dbuser = array('ashar', 'owais', 'malik', 'umer');
// $dbpassword = array('111', '222', '333', '444');

// $uname =  $_POST['uname'];
// $password = $_POST['password'];


// $find = false;

// for ($i=0; $i < 4; $i++) { 
//   echo 'Welcome '.$uname.'<br/>';
//          if ($dbuser[$i] == $uname && $dbpassword[$i] == $password) {
//           $find == true; 
//           break;
//         }  
// }
 
// if ($find) {
// }else {
//   echo 'Give correct user name or password';
// }


//////////////////////////////////////

// session_start();
// $_SESSION['name'] = 'malik';
// echo $_SESSION['name'];

// session_unset();
// session_destroy();

// $uname = $_POST['uname'];
// $password = $_POST['password'];

// echo "your name ". $uname. " and password ". $password;

////////////////////////////////////////////////////////////////////////////////////
    //   get data from index.html and save in database through php mysqli
///////////////////////////////////////////////////////////////////////////////////


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

$s_name = $_POST['name'];
$s_age = $_POST['age'];
$s_depart = $_POST['depart'];




$sql = "INSERT INTO `student` (`name`, `age`, `depart`) VALUES ('$s_name', '$s_age', '$s_depart')";


if (mysqli_query($con, $sql)) {
    echo "succefully data insert";
} else {
echo "error not insert data". mysqli_error($con);
}

// close connection
mysqli_close($con)

?> 
