<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "wellpharma";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$Medicinename = "Pravek Tablets";
$price = "200";

// Sql query to be executed
$sql = "INSERT INTO `women_care` (`Medicine name`, `price`) VALUES ('$Medicinename', '$price')";

$result = mysqli_query($conn, $sql);

// Add a new record to the table in the database
if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
