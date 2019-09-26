<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "puklaidee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$user = $_POST['user'];

$sql = "SELECT * FROM tree WHERE treeid = 48";
$result = $conn->query($sql);
$hello = array();
if ($result->num_rows > 0) {
   while($real = mysqli_fetch_array($result)){
      array_push($hello,array(
                  "nametree"=>$real['nametree'],
                  "price"=>$real['price'],
                  "img"=>$real['img_path']));
 }
    echo json_encode($hello);
} else {    
    echo "0 results";
}
$conn->close();
?>



