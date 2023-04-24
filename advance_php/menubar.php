<nav styly="width"= 50px>
<a href="#">contact</a>
<a href="#">About us</a>
<a href="#">services</a>
<?php
 session_start();

 if(isset($_SESSION['email'])){
    echo'<a href="profile.php">profile</a> ';
    echo'<a href="logout.php">logout</a>  ';
    echo '<a href="result.php">result</a> ';
    echo '<a href="list.php">user_list</a> ';
   
}
 else{
      
      echo'<a href="login.php">login</a>  ';
      echo '<a href="register.php">register</a>  ';

 }
?>
</nav>