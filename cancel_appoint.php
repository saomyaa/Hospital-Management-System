<?php
$con = mysqli_connect('localhost', 'root', '','mini');

$loginphone = $_POST['loginphone'];
$sql = "DELETE FROM book_appoint WHERE loginphone = '$loginphone'";
$rs = mysqli_query($con,$sql);
if($rs){
    // $sql2 = "INSERT INTO patient_login (`loginName`,`loginPassword`) VALUES ('$loginName','$loginPassword')";
    // $rs2 = mysqli_query($con,$sql2);
    echo "Cancelled the booking!";
}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color: #edf7f5;">
    <br><br>
        <a href="home.html">Click here to logout</a>
    </body>
    </html>