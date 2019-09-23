<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "StudenAtten";

$nameteach = $_POST["nameteachpost"];
$ptopic = $_POST["topic"];
$news = $_POST["pnews"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (id_message,teacherOfPost,topic,NEWSmessage)
VALUES (NULL,'$nameteach','$ptopic','$news')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
