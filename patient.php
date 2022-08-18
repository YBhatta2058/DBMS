<?php
echo "Patient Connection successful...";
$PEMAIL = $_POST['email'];
$PNAME=$_POST['Name'];
$PPASSWORD=$_POST['password'];


// Database connection
$conn= new mysqli ('localhost','root','','shristi');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);

}
else{
    // $stmt =$conn->prepare("insert into patient(PID,PNAME,PAGE,PDIAGNOSED,PDID,PSTATUS) values(?,?,?,?,?,?)");
    // $stmt->bind_param("isssis",$PID,$PNAME,$PAGE,$PDIGNOSED,$PDID,$PSTATUS);
    $sql = "INSERT INTO patientregister (pname,pemail,ppassword)
VALUES ('$PNAME','$PEMAIL','$PPASSWORD')";



if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
};
?>