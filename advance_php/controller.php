<?php
      
      error_reporting();
        include('db.php');
      if (isset($_POST['login'])){
          $email = $_POST['email']; 
          $password = $_POST['password'];
            
          $qry = "SELECT * FROM `ansh` WHERE `email`='$email' and `password`='$password'";
          $result = mysqli_query($con,$qry);
             
          if($result->num_rows > 0){ 

              $data = $result->fetch_assoc();
              $type = $data['type'];
           $_SESSION['email'] = $email;

          if($type == 0){
           header('location:profile.php');
          }
        else {
          header('location:admin.php');
        }
      } else{

       $msg = "invalid credention";
       header('location:login.php?error_msg=>'.$msg);
       } 
    }   
    

        if (isset($_POST['register'])) {
          
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $name1 = $_FILES['file']['name'];
        $newname = time().$name1;
        $des     = 'ankesh'.$newname;

         move_uploaded_file($tmp_name,$des);        
        unset($_SESSION['error_ary']);

        if(empty($name) || empty($email) || empty($contact) || empty($password) || empty($newname)){
          $_SESSION['error_ary'] = $errorArry;
          $msg ='please fill requuired fieldes';
         // header('location:register.php?error_msg='.$msg);
          echo $msg;
          die();

          }
          $chkQry = "SELECT * FROM `ansh` WHERE `email`='$email'";
          $result1 = mysqli_query($con,$chkQry);
          //$data = $result1->fetch_assoc();
          //   print_r($data);
          
          $count =$result1->num_rows;
          
          
          if($count > 0){
            $msg = 'Email id already register';
            echo $msg;
            //header('location:register.php?error_msg='.$msg);
            die();
          }

        $qry = "INSERT INTO `ansh`(`name`,`email`,`contact`,`password`,`file`) values ('$name','$email','$contact','$password','$newname')";
         $insert = mysqli_query($con, $qry);
       
         if($insert){
               $msg ='insert successful';
         }else{
                $msg= 'is not insert';
         }
         
         //header('location:register.php?error_msg='.$msg);
         echo $msg;
             
    } 
    

       if(isset($_POST['submit']))
      {
      
       
        $maths = $_POST['maths'];
        $english = $_POST['english'];
        $science = $_POST['science'];
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];

        $feedback = $_POST['feedback'];

          
        $aqury ="INSERT INTO `result12`(`maths`,`english`,`science`,`physics`,`chemistry`,`feedback`) VALUES ('$maths','$english','$science','$physics','$chemistry','$feedback')";

        $bqury = mysqli_query($con, $aqury);
       
        if($bqury){
          echo 'successful';
        }else{
          echo 'not successful';
        }
         header('location:result.php');
      } 
      if(isset($_GET['user_id_delet'])){

        
        $id = $_GET['user_id_delet'];
        $qur = "delete from `ansh` where `id`='$id'";
        $delet = mysqli_query($con,$qur);
        if($delet){
          echo 'true';
         //header('location:list.php');
        }else{
          $msg = 'somthing wentrong';
          echo 'false';
        }

      }
      if(isset($_POST['user_edit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $uqry = "UPDATE `ansh` SET `name`='$name',`email`='$email',`contact`='$contact'WHERE `id`='$id'";
        $update = mysqli_query($con,$uqry);
        header('location:list.php');
      }
      if(isset($_POST['file_uplode'])){
        $title = $_POST['title'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $newname= time(). $name;
        $des  = 'ankesh'.$newname;
        $a = move_uploaded_file($tmp_name,$des);
      
      if($a){
        echo 'successful';

       
      }
      else{
        echo 'not excution';
      }
    }
    if(isset($_GET['user_search'])){

      $val = $_GET['user_search'];
      $qry = "SELECT * FROM `ansh` WHERE `name` LIKE '$val%'";
      $result = mysqli_query($con,$qry);
       $html = '<ul>';
      foreach ($result as $key => $value) {
         $html .=  '<li id >'.$value['name'].'</li>';
      }
        $html .= '</ul>';
        echo $html;
    }
?>      
