<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
    <style type="text/css">
      #input{
        margin-left: 15%;
      }
    </style>
</head>
<body>
 <?php

    include('tab.php');
  
       include('database.php');
        if($_GET['user_id_update']){
          $id = $_GET['user_id_update'];
      }else{
        echo 'user id is not found ';
      }
          $qry = "SELECT * FROM `users` WHERE `id`='$id'";
          $result = mysqli_query($cont,$qry);
          $data = $result->fetch_assoc();
       ?>
       <h2 style="background-color: #01b5ff">Edit your personl data</h2>
       
       <form action="pro_controller.php" method="POST">
        <table>
          <tr>
            <td>ID :</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </td>
          </tr>
          <tr>
            <td>Name : </td>
            <td>
              <input type="name" name="name" value="<?php echo $data['name'] ?>"> 
            </td>
          </tr>
          <tr>
            <td>Contact</td>
            <td>
              <input type="contact" name="contact" value="<?php echo $data['contact'] ?>">
            </td>
          </tr>
          <tr>
            <td>Email :</td>
            <td>
              <input type="email" name="email" value="<?php echo $data['email'] ?>"readonly> 
            </td>
          </tr>
         
          <tr>
            <td>Address :</td>
            <td>
              <input type="address" name="address" value="<?php echo $data['address'] ?>"> 
            </td>
          </tr>
           <td>
           <input id="input" type="submit" name="user_edit" value="submit">
         </td>
      </form>
        
    
</body>
</html>