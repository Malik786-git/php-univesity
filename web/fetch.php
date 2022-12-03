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

$sql  = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
         echo "<br/>"."Name".$row['name']." "."Age".$row['age']." "."Department".$row['depart']."\n";
     }
}


// close connection
mysqli_close($conn)

?>