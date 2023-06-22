<?php
$con = mysqli_connect('localhost', 'root', '','mini');
$loginName = $_POST['loginName'];
$loginPassword = $_POST['loginPassword'];
$loginmail = $_POST['loginmail'];
$loginphone = $_POST['loginphone'];

// $sql = 'SELECT * FROM doctor_login';
   
// $retval = mysqli_query($con, $sql);
$sql = "INSERT INTO patient_register (`loginName`, `loginmail`, `loginphone`, `loginPassword`) VALUES ('$loginName', '$loginmail', '$loginphone', '$loginPassword')";
$rs = mysqli_query($con, $sql);
if($rs){
    $sql2 = "INSERT INTO patient_login (`loginName`,`loginPassword`) VALUES ('$loginName','$loginPassword')";
    $rs2 = mysqli_query($con,$sql2);
    echo "Successful Registration!";
    header('location:patient_login.html');
}

?>