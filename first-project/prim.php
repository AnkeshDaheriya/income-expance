<?php
  echo 'Time=>'.time();
 
  echo '<br>2002/08/19<br>';
  $date = '2002/08/19';
  echo "sorttotime => ".date('d m Y', strtotime($date));


?>
<h1>time function</h1>
<?php
   date_default_timezone_set('Asia/Calculate');
   echo'Time => '. time();
   echo'<br>Time =>'.date('H:i:s');
   echo'<br>Time =>'.date('H:i:s A');
   
?>