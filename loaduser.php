<?php
$servername = "localhost";
$username = "KornPattamakorn";
$password = "Korn2540#Server";
$dbname = "StudenAtten";

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'utf8');
$day = $_POST["day"];
$user = $_POST["username"];
$term = $_POST["term"];
$year = $_POST["year"];
if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}


$sql = "SELECT * FROM
((((enroll_detail INNER JOIN enroll ON enroll_detail.id_enroll = enroll.idenroll)
INNER JOIN subject ON enroll.subject_enroll = subject.id_subject)
INNER JOIN teacher ON subject.IDtecher_subject = teacher.id_teacher)
INNER JOIN student ON enroll.id_student_enroll = student.id_student)
WHERE (student.id_student='$user' AND enroll_detail.day='$day') AND (enroll.term_enroll='$term' AND
enroll.year_enroll='$year')";


$result = mysqli_query($conn,$sql);

$hello = array();

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

?>
