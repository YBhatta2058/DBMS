<?php
$patientid = $_POST['patientid'];
$pdiagnosed=$_POST['pdiag'];

// Database connection
$conn= new mysqli ('localhost','root','','shristi');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);

}
else{
    $sql = "UPDATE patientinfo SET patientinfo.pdiag='$pdiagnosed' WHERE pid=$patientid";



if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
};
?>