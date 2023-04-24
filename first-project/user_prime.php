<?php    
 function primeNumber($a){
    
    for($i=2; $i<$a; $i++){
    	if($a%$i==0){

    		return 0;
    	}
    
   }
   return 1;
   
  }
  $a =  primeNumber(13);
  if($a==0){
  	echo' its not prime number <br>';

  }else{
  	echo 'its prime number <br>';
  }

  function squre($a){
  	$a = $a*$a;
  	echo $a;
  	$a = $a*$a*$a;
  }
  squre(8);


?>