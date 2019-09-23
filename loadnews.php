<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "StudenAtten";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM message 
INNER JOIN teacher ON message.teacherOfPost = teacher.id_teacher 
ORDER BY message.time_post DESC";
$result = $conn->query($sql);
$hello = array();
if ($result->num_rows > 0) {
   while($real = mysqli_fetch_array($result)){
      array_push($hello,array(
                  "ptfname"=>$real['fname_teacher'],
                  "ptlname"=>$real['lname_teacher'],
                   "topic"=>$real['topic'],
                   "textnews"=>$real['NEWSmessage'],
                   "img"=>$real["img_teacher"],
                   "Tpost"=>$real["time_post"]));
 }
    echo json_encode($hello);
} else {    
    echo "0 results";
}
$conn->close();
?>


