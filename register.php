<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "puklaidee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $fname = $_POST['fname'];

    $pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO member (id,user,password,fname,lname,tel_user,year_old,area_user,address,imgUser)
VALUES (NULL, '$user', '$pass','$fname','test','123','50','123','K','https://firebasestorage.googleapis.com/v0/b/pookraidee-553b4.appspot.com/o/image%2F1554501801988.jpg?alt=media&token=bd54ffbf-9295-4f06-99b2-482b375e1ef9')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
