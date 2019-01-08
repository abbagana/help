<?php
include '../config.php';

$myschool =   ucwords(mysqli_real_escape_string($conn, $_POST['school']));
$myydept = ucwords(mysqli_real_escape_string($conn, $_POST['dept']));
$myystaff = ucwords(mysqli_real_escape_string($conn, $_POST['staff']));
$myyzone = ucwords(mysqli_real_escape_string($conn, $_POST['zone']));
$myypsschool = ucwords(mysqli_real_escape_string($conn, $_POST['psschool']));
$myygroup = ucwords(mysqli_real_escape_string($conn, $_POST['group']));

$sql = "INSERT INTO tbl_staff_outing (stSchool, Department, Supervisor, Zone, PsSchool, stGroup)
VALUES ('$myschool', '$myydept', '$myystaff', '$myyzone', '$myypsschool','$myygroup')";

if ($conn->query($sql) === TRUE) {
    header("location:../data.php");
} else {
    header("location:../data.php?rp=1298");
}


}
$conn->close();
?>


