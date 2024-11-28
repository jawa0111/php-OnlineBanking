<?php
require 'config.php';
?>

<?php
$firstname=$_POST['firstName'];
$secondname=$_POST['secondName'];
$nic=$_POST['nicNO'];
$pNO=$_POST['phoneNo'];
$email=$_POST['email'];
$uname=$_POST['userName'];
$psw=$_POST['password'];
$gender=$_POST['Gender'];
$utype=$_POST['usertype'];

 $select = " SELECT * FROM account";

   $result = $conn->query($select);

   if($result->num_rows > 0){

      $row = $result->fetch_assoc();

      if($row['username'] == $uname){


$sql="insert into signup(id,NIC,first_name,second_name,pNO,email_id,user_name,password,gender,userType) values('','$nic','$firstname','$secondname','$pNO','$email','$uname','$psw','$gender','$utype')";



if(mysqli_query($conn,$sql)){
    echo "success";
    header('location:loginform.html');
}
else{
    echo "error";
}

mysqli_close($conn);
	  }
   }
?>