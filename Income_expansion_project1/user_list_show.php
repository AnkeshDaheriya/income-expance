<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body>
  <?php

    include('tab.php');
     session_start();
      include('database.php');
      $email = $_SESSION['email'];
      $qry = "SELECT * FROM `users`  WHERE `email`='$email'";
      $result = mysqli_query($cont,$qry);

  ?>
  <h2 style="background-color: #01b5ff">your data</h2>
   <table border="1">

       <thead>
         <th>id</th>
         <th>name</th>
         <th>contact</th>
         <th>email</th>
      
         <th>Address</th>
         <th>created_at</th>
         <th>updated_date</th>
         <th>delete</th>
         <th>Edit</th>
       </thead>
       <tbody>
          
            <?php foreach ($result as $key => $value) { ?>
            <tr>
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['contact']; ?></td>
              <td><?php echo $value['email']; ?></td>
              
              <td><?php echo $value['address']; ?></td>
              <td><?php echo $value['created_at']; ?></td>
              <td><?php echo $value['updated_at']; ?></td>
             
              <td>
                <a onclick="if(confirm('Are you sure???')){return true}else{return false}" href="pro_controller.php?user_id_delete=<?php echo $value['id'] ?>">delete</a>
              </td>
               <td>
                <a href="user_edit_from.php?user_id_update=<?php echo $value['id'];?>">edit</a>
              </td>
              <?php }?>
          </tr>   
      </tbody>
    
</table>
</body>
</html>