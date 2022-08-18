<?php
$servername="localhost";
$username="root";
$password="";
$db="shristi";
$conn=mysqli_connect($servername,$username,$password,$db);
$pname =  $_REQUEST['pname'];
// $pid = $_REQUEST['pid'];
$age = $_REQUEST['age'];
$pgender = $_REQUEST['pgender'];
$pdiag = "Healthy"; 
$pdid = $_REQUEST['pdid'];
$sql = "INSERT INTO patientinfo (pname,age,pgender,pdiag,pdid)  VALUES ('$pname','$age','$pgender','$pdiag','$pdid')";
if(mysqli_query($conn,$sql)){
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">)
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    <script>alert("Your information has been successfully registered...")
    window.location = "http://localhost/hackathonProject/index.html";

</script>
    
    </html>
<?php
}

?>