


<h1>Edit_user</h1>
<?php 
 
 include('db.php');
 

 if(isset($_GET['id'])){

 	$id = $_GET['id'];

   }else {
       echo 'user not found';    
    }
     $sqry ="SELECT * FROM `ansh` WHERE `id`= $id";
     $record = mysqli_query($con,$sqry);
   
     $data = $record->fetch_assoc();
 ?>
	   <form action="controller.php" method="POST">
	   	  id : <input type="hidden" name="id" value="<?php echo $data['id'];?>"><br>
	      Name: <input type="name" name="name" value="<?php echo $data['name'];?>"><br>
	     email: <input type="email" name="email" value="<?php echo $data['email'];?>"><br>
contact: <input type="number" name="contact" value="<?php echo $data['contact'];?>"><br>
password: <input type="password" name="password" value="<?php echo $data['password'];?>"><br>
	      
	      	<input type="submit" name="user_edit" value="submit">
      </form>