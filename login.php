<?php



session_start();

if(isset($_POST['login'])){

   $name = $_POST['username'];
   $pass=$_POST['passwrd'];
    
   $select = " SELECT * FROM signup WHERE user_name = '$name' && password = '$pass' ";

   $result = $conn->query($select);

   if($result->num_rows > 0){

      $row = $result->fetch_assoc();

      if($row['userType'] == 'admin'){

         $_SESSION['admin_name'] = $row['firt_name'];
         header('location:admin_page.php');

      }elseif($row['userType'] == 'user'){

         $_SESSION['first_name'] = $row['first_name'];
		 $_SESSION['nic'] = $row['NIC'];
		 $_SESSION['pno'] = $row['pNO'];
		 $_SESSION['email'] = $row['email_id'];
		 
         header('location:index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
}
?>