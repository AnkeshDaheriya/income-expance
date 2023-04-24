<h1>prfiole</h1>

<?php
 include('menubar.php'); 
 include('db.php');
 $email = $_SESSION['email'];

$qry = "SELECT * FROM `ansh` WHERE `email`='$email'";
 $result = mysqli_query($con,$qry);
 
  $data = $result->fetch_assoc();
 ?>

name :<?php  echo $data['name']; ?><br>
email :<?php echo $_SESSION['email'];?><br>
contact :<?php echo $data['contact'];?><br>
