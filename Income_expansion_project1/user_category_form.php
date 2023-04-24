<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
    <style type="text/css">
    	.error{
    		color: red;
    	}
    </style>
</head>
<body>
	  <?php 
       include('tab.php');

             

      ?>
      <h2 style="background-color: #01b5ff">form fill </h2>
      <?php
            error_reporting(0);
              if($_GET['error_Ary']){

              	   echo '<span class="error">'. $_GET['error_Ary'].'</span>';
              	}?>
	<form action="pro_controller.php" method="POST">
		<?phpo
              if($_GET['error_Ary']){

              	   echo $_GET['error_Ary'];
              	         


          }

		?>
		<table>
          
		   <tr>
		   	<td>
			<label>Category</label>
		   </td>
		   <td>
			<select name="titel">
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
		  	<td>
			  <label>TYPE</label>
		    </td>
		    <td>
			 income :<input type="radio" name="type" value="income">
			 expance :<input type="radio" name="type" value="expance" checked>
			</td>
		  </tr>
		   <tr>
		   	<td>Totel amount</td>
		   	<td>
		   		<input type="number" name="totle_amount">
		   		

		   	</td>
		   </tr>
		   <tr>
		   	<td>
		   		date
		   	</td>
		   	<td>
		   		<input type="date" name="date">
		   	</td>
		   </tr>
		</table>
			<input type="submit" name="save" value="submit">
		
	</from>

</body>
</html>