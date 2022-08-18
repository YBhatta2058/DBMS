<?php

session_start();


$DUNAME = $_POST['uname'];
$DWORD=$_POST['pword'];


// Database connection
$conn= new mysqli ('localhost','root','','shristi');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);

}
else{
    // $stmt =$conn->prepare("insert into patient(PID,PNAME,PAGE,PDIAGNOSED,PDID,PSTATUS) values(?,?,?,?,?,?)");
    // $stmt->bind_param("isssis",$PID,$PNAME,$PAGE,$PDIGNOSED,$PDID,$PSTATUS);

$checker = "Select * from doctorlogin where dname = '$DUNAME' && dpass = '$DWORD'";

$result = mysqli_query($conn,$checker);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:doctor.php');
}else{
    header('location:index.html');
}

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
};
?>