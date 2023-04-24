<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
	<style type="text/css">
            .labelTD{
                  margin-left: 20px;
            }
            .inputID{
                  padding-left: 30%;
              
            
            }
            h2{
              background-color: #0003ff1f;
            }
            .input{
              margin-left: 44%
            }
            form{
              background-color: Lavender;
            }
            .tab{
              margin-left: 10px;
            }
            
           
           .nav {
            background-color:;
            color: #ffffff;
           }


      </style>
      
</head>
<body>
 
 
 <div class="container" style="width: 50%">
   <ul class="nav nav-tab" style=" justify-content: end">
      <li class="tab"><a href="user_login.php">Log In</a></li>
      <li class="tab"><a href="user_register.php">First_register</a></li>
      <li class="tab"><a href="user_login.php">logout</a></li>
    </ul>
  <h2>LOG IN </h2>
         <?php 
            error_reporting(0);
          if($_GET['error_msg']){
            echo '<span class=" btn-danger">'.$_GET['error_msg'].'</span>';
          }

        ?>
       <form action="pro_controller.php" method="POST">
        <table style="text-align: center; width: 432px;">
              <tr>
                    <td class="labelTD">
                        <label>Enter your email:<span>*</span></label>
                  </td>
                    <td class="inputID">
                        <input type="email" name="email" placeholder="Enter your email">
                    </td>
              </tr>
               <tr>
                    <td class="labelTD">
                        <label>Enter your password: <span>*</span></label>
                  </td>
                    <td class="inputID">
                        <input type="password" name="password" placeholder="Enter your password">
                  </td>
              </tr>
        </table>
        <input class="input" type="submit" name="login" value="submit">
     </form>
 </div>
</body>
</html>