<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
  <style type="text/css">
      
      span{
        margin-left: 30px
      }
  </style>
</head>
<body>
       
  <?php 
    include('tab.php');
  ?>
  <h2 style="background-color: #01b5ff"> your profile</h2>

<?php 
        session_start();
       include('database.php');
       $email = $_SESSION['email'];
       $qry = "SELECT * FROM `users` WHERE `email`='$email'";
       
        $result = mysqli_query($cont,$qry);
        $data = $result->fetch_assoc();

?>  

     <span> Name : <?php echo $data['name'];?><br></span>
     <span>  Contact: <?php echo $data['contact'];?><br></span>
     <span>  Email : <?php echo $data['email'];?><br></span>
     <span>  Address : <?php echo $data['address'];?><br></span>
  


</body>
</html>
