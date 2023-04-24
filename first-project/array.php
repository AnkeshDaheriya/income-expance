<h1>simple Array</h1>

<?php 
echo '<pre>';
  $nameArray = ['vikash','raj','sidhu','ansh','sidharth'];
    $name = 'ankesh';
    $name2 = [2,3,'ankesh','sidharth'];
 
    print_r($nameArray);
    
    var_dump($name2);
    array_push($nameArray,'bhjhbhb');
    print_r( $nameArray);
    

     $nameArray[2]='ankesh';
     print_r($nameArray);
     echo count($nameArray);
     print_r(array_merge($nameArray,$name2))

?>
<h2>Array ($key & values)</h2>
<?php
  $studentArray = [101=>'aaa',102=>'bbb',103=>'ccc',104=>'ddd'];
  print_r($studentArray);
  echo '<br>';
  print_r($studentArray[103]);
?>
 <h1>multiople Array</h1>
<?php
   $nameArray = ['ram','syam','radhe','krishn'];
   $classArray =['BE','Btech','cs','BA',];
   $subjectArray = ['php','java'];

   $resultArray = [

        'name_array' => $nameArray,
        'class_array' => $classArray,
         'subject_array' => $subjectArray,
   ];

   print_r($resultArray);
?>
