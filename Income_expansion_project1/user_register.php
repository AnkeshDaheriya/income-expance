<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
	<style type="text/css">
	    
	    form{
             background:#0003ff1f;
             padding-top: 20px;
             
             border-radius: 5px;
	    }
	    h2{
              font-weight: 600px;
              background-color:Lavender;
              padding-left: 5px;
              border-radius: 5px;
	      	}
	     .labelTD{
	     	float: left;
	     	margin-left: 20px;
	     }
	     .inputTD{
	     		margin-left: 50px;
	     }
	     .input{
	     	 margin-left:432px;

	     }
         .tab{
            margin-left: 10px;
         }
         .error{
            color: red;
         }
         span{
            color: red;
         }

	</style>

</head>
<body>
      
	<div class="container" style="width: 50%">
        <ul class="nav nav-tab" style="background-color: white; justify-content: end">
      <li class="tab"><a href="user_login.php">Log In</a></li>
      <li class="tab"><a href="user_register.php">First_register</a></li>
    </ul>
		<h2><i>REGISTER FORM</i></h2>
        <?php 
        error_reporting(0);

          if($_GET['error_Ary']){
            echo '<span class="error">'.$_GET['error_Ary'].'</span>';
          }
        ?>

    <form action="pro_controller.php" method="POST">
    	<table style="text-align: center; width: 432px;">
    		<ul>
    		<tr>
    			<td class="labelTD">
    				<label>Enter your name:<span>*</span></label>
    			</td>
    			<td class="inputTD">
    				<input type="text" name="name" placeholder="Enter your name">
    			</td>
    		</tr>
    		<tr>
    			<td class="labelTD">
    				<label>Enter your number:<span>*</span></label>
    			</td>
    			<td class="inputTD">
    				<input type="number" name="number" placeholder="Enter your number">
    			</td>
    		</tr>
    		<tr>
    			<td class="labelTD">
    				<label>Enter your email: <span>*</span></label>
    			</td>
    			<td class="inputTD">
    				<input type="email" name="email" placeholder="Enter your emil">
    			</td>
    		</tr>
    		<tr>
    			<td class="labelTD">
    				<label>Enter your password: <span>*</span></label>
    			</td>
    			<td class="inputTD"> 
    				<input type="password" name="password" placeholder="Enter your password">
    			</td>
    		</tr>
    		<tr>
    			<td class="labelTD">
    				<label>Enter your address: <span>*</span></label>
    			</td>
    			<td class="inputTD">
    				<input type="text" name="address" placeholder="Enter your address">
    			</td>
    		</tr>
          </ul>
    	</table>
    	<input class="input" style="" type="submit" name="register" value="submit">
    	<!-- <label>Enter your name:</label>
    	<input type="text" name="name" placeholder="Enter your name"><br>
    	<label>Enter your number:</label>
    	<input type="number" name="number" placeholder="Enter your number"><br>
    	<label>Enter your email:</label>
    	<input type="email" name="email" placeholder="Enter your emil"><br>
    	<label>Enter your password:</label>
    	<input type="password" name="password" placeholder="Enter your enail"><br>
    	<label>Enter your address:</label>
    	<input type="password" name="address" placeholder="Enter your address"><br>
 -->
    </form>
</div>
</body>
</html>