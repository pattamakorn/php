<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "StudenAtten";

$user = $_POST['user'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM (((member INNER JOIN student ON member.user = student.id_student) INNER JOIN parent ON student.parent_id = parent.id_parent)INNER JOIN teacher ON student.adviser_id = teacher.id_teacher) WHERE member.user = 'admins'";
$result = $conn->query($sql);
$hello = array();
if ($result->num_rows > 0) {
   while($real = mysqli_fetch_array($result)){
      array_push($hello,array(
                  "fname"=>$real['fname'],
                  "lname"=>$real['lname'],
                   "class"=>$real['class'],
                   "img"=>$real["img_student"],
                   "fparent"=>$real['parent_fname'],
                   "lparent"=>$real['parent_lname'],
                   "fteacher"=>$real['fname_teacher'],
                   "lteacher"=>$real['lname_teacher'],
                   "Telteacher"=>$real['tel_teacher']));
    }
    echo json_encode($hello);
} else {    
    echo "0 results";
}
$conn->close();
?>

