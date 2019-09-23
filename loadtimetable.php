<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "StudenAtten";


$day = $_POST['day'];
$
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM 
    ((((enroll_detail INNER JOIN enroll ON enroll_detail.id_enroll = enroll.idenroll) 
    INNER JOIN subject ON enroll.subject_enroll = subject.id_subject)
    INNER JOIN teacher ON subject.IDtecher_subject = teacher.id_teacher)
    INNER JOIN student ON enroll.id_student_enroll = student.id_student) 
    WHERE (student.id_student='admins' AND enroll_detail.day='Monday') AND (enroll.term_enroll='1' AND enroll.year_enroll='2562')";
$result = mysqli_query($conn,$sql);
$hello = array();
echo mysqli_num_rows($result) . "Result";
if (mysqli_num_rows($result) > 0) {
   while($real = mysqli_fetch_array($result)){
      array_push($hello,array(
                  "idsubject"=>$real['id_subject'],
                  "subjectname"=>$real['name_subject'],
                   "fnameteacher"=>$real['fname_teacher'],
                   "lnameteacher"=>$real['lname_teacher'],
                   "classroom"=>$real["classroom"],
                   "time"=>$real["time"]));
 }
  echo json_encode($hello);
} else {    
    echo "0 results";
}
mysqli_close($conn);
?>

