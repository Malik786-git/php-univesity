<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpdb";
// creating connection with database
$conn = mysqli_connect($servername, $username, $password, $database);

// check we are connect or not
if(!$conn)
{                         
                             //function to return error
    die('failed to connect'. mysql_connect_error());
}
else{
    echo "connected succesfull";
}

$sql = "INSERT INTO `user` (`name`, `age`, `salary`) VALUES ('Umer', '24', '77777');";

if (mysqli_query($conn, $sql)) {
        echo "succefully data insert";
} else {
    echo "error not insert data". mysqli_error($conn);
}

// close connection
mysqli_close($conn)

?>