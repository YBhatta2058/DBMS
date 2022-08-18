<?php

session_start();


$PEMAIL = $_POST['email'];
$PPASSWORD=$_POST['password'];


// Database connection
$conn= new mysqli ('localhost','root','','shristi');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    // $stmt =$conn->prepare("insert into patient(PID,PNAME,PAGE,PDIAGNOSED,PDID,PSTATUS) values(?,?,?,?,?,?)");
    // $stmt->bind_param("isssis",$PID,$PNAME,$PAGE,$PDIGNOSED,$PDID,$PSTATUS);

$checker = "Select * from patientregister where pemail = '$PEMAIL' && ppassword = '$PPASSWORD'";

$result = mysqli_query($conn,$checker);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:appointment.php');
}else{
    header('location:index.html');
}

mysqli_close($conn);
};
?>
