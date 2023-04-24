<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
	<style type="text/css">
		
		a{
			margin-left: 10px;
			
		}
		h1{
			font-weight: 700;
		}
		#log{
			    margin-left: 600px;
		}
		
		.bg {
			  /* The image used */
			  background-image: url("images.jpg");

			  /* Full height */
			  height: 100%;
			 
			  margin-bottom: 0px;
			  padding-bottom: 0px

			  /* Center and scale the image nicely */
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
			}


	</style>
</head>
<body class="bg">

	
	<div>
	<div style="background-color: lightgray">
	<h1 style="background-color: #1097ce;"> Your Wellcome to profile----!</h1>
    <ul class="nav nav-tabs">

          <li class="active">
             <a data-toggle="tab" href="user_profile.php">Profile</a>
          </li>

          <li> <a data-toggle="tab" href="user_list_show.php">Show_user_list</a></li>
          <li> <a data-toggle="tab" href="user_category_form.php">user_category_form</a></li>
          <li> <a data-toggle="tab" href="user_categorylist_show.php">Show_your_categorylist</a></li>
          <li id="log"><a href="user_login.php">logout</a></li>
      </ul>
      </div>
    </div>



</body>
</html>