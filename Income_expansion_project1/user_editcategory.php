<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body>
    <?php
       include('database.php');
       require('tab.php');
    
       if($_GET['edit_category']){
       	 $id = $_GET['edit_category'];
       	}else{
       		echo 'user id is not found';
       		die();
       	}
      
       $qry = "SELECT * FROM `category` WHERE `id`='$id'";
      
        $result = mysqli_query($cont,$qry);
         $data = $result->fetch_assoc();   

    ?>
    <h2 style="background-color: #01b5ff">Edit your data income/expanse</h2>
    <form action="pro_controller.php" method="POST">
        <table>
    	</tr>
    		
    		<td><input type="hidden" name="id" value="<?php echo $data['id'];  ?>"></td>
    	</tr>
    	<tr>
    		<td>Category</td>
    		<td>
			  <select name="title">
				<option><?php echo $data['title'];  ?></option>
				<option>------</option>
        <option>bill</option>
        <option>roomrent</option>
        <option>vegetable</option>
        <option>persnol</option>
        <option>helth</option>
        <option>home</option>
        <option>other</option>
        <option>Bussnis</option>
        <option>selary</option>
				
			</select>
		 </td>
    	</tr>
    	<tr>
    		<td>income/expance:    </td>
      		<td>
        			<input type="redio" name="type" value="<?php echo $data['type'];?>">
               income :<input type="radio" name="type" value="income">
        			 expance :<input type="radio" name="type" value="expance">
  			</td>
    	</tr>
      <tr>
        <td>totle amount</td>
           <td><input type="number" name="totle_amount" value="<?php echo $data['totle_amount']; ?>"></td>
      </tr>
      <tr>
        
        <td>date</td>
        <td><input type="date" name="date" value="<?php echo $data['totle_amount']; ?>"></td>
      </tr>
    </table>
     
         <input type="submit" name="update" value="submit">
   
   </form>

</body>
</html>