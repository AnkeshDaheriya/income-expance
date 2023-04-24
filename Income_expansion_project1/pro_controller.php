
  <?php
        session_start();
        require('database.php');
        if(isset($_POST['register'])){ //register page se aaya
        	$name = $_POST['name'];
        	$number = $_POST['number'];
        	$email = $_POST['email'];
        	$password = $_POST['password'];
        	$address = $_POST['address'];

            unset($_SESSION['error_Ary']);

            if(empty($name) || empty($number) || empty($email) || empty($password) || empty($address))
            {
                $_SESSION['error_Ary'] = $empty;
                $msg = 'plesse fill required filleds';
                header('location:user_register.php?error_Ary='.$msg);
                die();
            }



        	$Qry = "INSERT INTO `users`(`name`,`contact`,`email`,`password`,`address`) VALUES ('$name','$number','$email','$password','$address')";
        	
             $data = mysqli_query($cont,$Qry);

            
             header('location:user_register.php');
         }

         if(isset($_POST['login'])){ //login page se aaya he 
         	$email = $_POST['email'];
         	$password = $_POST['password'];

         	$Qry = "SELECT * from `users` WHERE `email`='$email' and `password`='$password'";
         	$data = mysqli_query($cont,$Qry);
         
            if($data->num_rows > 0){
             	$result = $data->fetch_assoc();
                $_SESSION['email'] = $email; //prpofile page me start ho ho rha
                $_SESSION['user_id'] = $result['id']; //category page me start ho ho rha
                header('location:user_profile.php');//is page me gya
            }else{

                   $msg = "Invelide...Plese enter your velide. Email...? password";
                   header('location:user_login.php?error_msg='.$msg);
                  
                
            }
         }

        if(isset($_GET['user_id_delete'])){  //list show se get massgre aay he
            $id = $_GET['user_id_delete'];
            $qur = "DELETE FROM `users` WHERE `id`='$id'";
            $delete = mysqli_query($cont,$qur);
            header('location:user_list_show.php');//is page me gya
        } 
            
        if(isset($_POST['user_edit'])) //list show page se get massage aaya he
        {
             $id = $_POST['id'];
             $name = $_POST['name']; 
             $contact = $_POST['contact'];
             $email = $_POST['email']; 
             $password = $_POST['password'];
             $address = $_POST['address'] ;
             
             $qry = "UPDATE `users` SET `name`='$name',`contact`='$contact',`email`='$email',`password`='$password',`address`='$address' WHERE `id`='$id'";
            
             
          $result = mysqli_query($cont,$qry);
          header('location:user_list_show.php');  //is page me gya 

        }
        if(isset($_POST['save'])){ //user category page se aaya he
            $user_id = $_SESSION['user_id'];
            $titel = $_POST['titel'];
            $type = $_POST['type'];
            $amount = $_POST['totle_amount'];
            $date   = $_POST['date'];
           
           unset( $_SESSION['error']);
           if(empty($user_id) || empty($titel) || empty($type) || empty($amount) || empty($date)){

             $_SESSION['error'] = $error_Ary;
             $msg = 'plese fill required fileds';
             header('location:user_category_form.php?error_Ary='.$msg);
             die();
            }

            $qry = "INSERT INTO `category`(`user_id`,`title`,`type`,`totle_amount`,`date`) VALUES ('$user_id','$titel','$type','$amount','$date')";
              $data  = mysqli_query($cont,$qry);
              header('location:user_category_form.php');// is page me gya
            
        }
        if(isset($_GET['delete_category'])){ //category show list se aay
             
             $id = $_GET['delete_category'];
           
           $qry = "DELETE FROM `category` WHERE `id`='$id'";
           $data = mysqli_query($cont,$qry);
           header('location:user_categorylist_show.php');

       } 
       if(isset($_POST['update'])){ //user editcategory from se aya
        
         $id  = $_POST['id'];
         $title = $_POST['title'];
         $type = $_POST['type'];
        $amount = $_POST['totle_amount'];
        $date = $_POST['date'];

         
        $qry = "UPDATE `category` SET `title`='$title',`type`='$type',`totle_amount`='$amount',`date`='$date' WHERE `id`='$id'";
        
             $data = mysqli_query($cont,$qry);
           header('location:user_categorylist_show.php');

       }
  ?>

