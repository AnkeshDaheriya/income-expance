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
       $user_id = $_SESSION['user_id'];
     
       $qry = "SELECT * FROM `category` WHERE `user_id` ='$user_id'";
       $result = mysqli_query($cont,$qry);

       ?>
       <h2 style="background-color: #01b5ff">Add your daily income and expansce</h2>
       <table border ="1">

         <thead>
           <th>ID</th>
           
           <th>category</th>
           <th>income/expance</th>
           <th>totel amount</th>
           <th>date</th>
           <th>CREATED</th>
          
           <th>DELETE</th>
           <th>EDIT</th>
         </thead>
         <tbody>
           <?php 
           foreach ($result as $value) { ?>
             <tr>
             <td><?php echo $value['id']; ?></td>
            
             <td><?php echo $value['title']; ?></td>
             <td><?php echo $value['type']; ?></td>
             <td><?php echo $value['totle_amount'];?></td>
             <td><?php echo $value['date'];?></td>
             
             <td><?php echo $value['created_at']; ?></td>
             
             <td><a onclick="if(confirm('Are you sure????...')){return true}else{return false}"href="pro_controller.php?delete_category=<?php echo $value['id'];?>">delete</a> </td>
             <td><a href="user_editcategory.php?edit_category=<?php echo $value['id'];?>">edit</a></td>
            </tr>
             
           <?php } ?>
         </tbody>
       </table>
</body>
</html>
 