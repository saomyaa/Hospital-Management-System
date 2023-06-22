<?php  
$con = mysqli_connect('localhost', 'root', '','mini');

$loginName = $_POST['loginName'];
$loginPassword = $_POST['loginPassword'];
// $sql = "INSERT INTO doctor_login (`loginName`, `loginPassword`) VALUES ('$loginName', '$loginPassword')";

// $rs = mysqli_query($con, $sql);

$sql = 'SELECT * FROM doctor_login';
   
   $retval = mysqli_query($con, $sql);
   
   
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      
      if($loginName == "{$row['loginName']}" && $loginPassword == "{$row['loginPassword']}"){
         echo "success";
         header('location:doc_view.php');
      }
      else{
         echo "kal";
      }
      // echo "Customer name :{$row['loginName']}  <br> ".
      //    "Email : {$row['loginPassword']} <br> ".
         
      //    "--------------------------------<br>";
   }

?>