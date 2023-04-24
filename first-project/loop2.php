<a href="index.php">Index</a>
<a href="basics.php">Basic</a>

<h1>Basic</h1>

<?php
 echo '<pre>';
	echo "Hello...";
	echo "<br>";
	echo "How are you?";
	echo "<h4>Welcome</h4>";
?>

<h2>PHP Mathametics Function</h2>
<h2>Arthmetics +,-,/,*</h2>
<?php
	$a = 10; // int
	$b = 10.5; // float
	$c = '5'; // string

	$sum = $a + $b;
	$minus = $a- $b;
	$div = $a / $b;
	$multi = $a * $b;


	echo "Output of sum=> ".$sum;
	echo "<br>";
	echo "Output of minus=> ".$minus;
	echo "<br>";
	echo "Output of div=> ".$div;
	echo "<br>";
	echo "Output of multi=> ".$multi;
	echo "<br>";

	$firstName = "Ram";
	$lastNAme = "Kumar";
	echo "Full name is=> ".$firstName.' '.$lastNAme;
?>

<h2>Logical operator ( And &&, OR ||, Not !)</h2>

<h2> Relational Operator</h2>
<, >, <=, >=, === , ==, 

<h3> Assignment Operator</h3>
++, --, =, +=, -=

<h3>Conditional Statement</h3>
IF, Else, 

<?php

if(true){
	echo "<br>1.Yes condition is true<br>";
}

if(1){
	echo "<br>1.Yes condition is true<br>";
}
if(false){
	echo "<br>2.Yes condition is true<br>";
}
if(0){
	echo "<br>2.Yes condition is true<br>";
}

$a = 5;
$b = 3;

echo "<h3>Simple If</h3>";
if($a < $b){
	echo "A is less then b";
}


echo "<h3>If Else</h3>";
if($a < $b){
	echo "A is less then b";
}else{
	echo "B is less then a";
}



?>

<h3>If else If</h3>
<?php
	$a = 6;
	if($a == 5){
		echo "A value is 5";
	}else if($a == 6){
		echo "A value is 6";
	}else if($a == 10){
		echo "A value is 10";
	}else{
		echo "none of the above";
	}
?>


<h3> == && ===</h3>
<?php 
	$a = 10;   //int
	$b = 10;
	$c = '10'; // string
	if($a == $b){
		echo  "<br> a is equal to b";
	}

	if($a == $c){
		echo  "<br> a is equal to c";
	}

	if($a === $c){
		echo "<br>a is equal to c";
	}else{
		echo "<br>a is not equal to c";
	}

?>


<h3>Logical Operator</h3>
&&, OR, !,  
<?php 
	$minAge = 18;
	$gender = 'Male';
	$education = 'graduate';

	$anikeshAge = 20;
	$anikeshGender = 'Female';
	$anikeshEdu = 'graduate';

	if( ($anikeshAge > $minAge) && ($gender == $anikeshGender) ){
		echo "<br>Yes you are eligible...";
	}else{
		echo "<br>No, You are not eligible";
	}

	if($education == 'graduate'){
		echo "<br>Yes you are graduate";
	}else{
		echo "No not graduate";
	}

	if($education != 'graduate'){
		echo "No your are not graduate";
	}
?>


<h3>Increment/Decrement operator</h3>

<?php 
	$a = 10;
	$b = 15;
	$c = 20;
	$d = 20;
	echo "<br>a value=> ".$a;  		// 10
	echo "<br>a++ value=> ". $a++;  // 10
	echo "<br>a value=> ". $a;  //  11
	echo "<br>++b value=> ". ++$b;  //  16

	echo "<br>--c value is=>". --$c; //19
	echo "<br>d-- value is=>". $d--; //20
?>


<h3>Ternary/ Single Line Statement ? :</h3>
 

<?php 
	$a = 10;

	if($a==10){
		echo "a is equal to 10<br>";
	}else{
		echo "a is not equal to 10<br>";
	}

	echo ($a == 10) ? 'a is equal<br>' : 'a is not equal<br>'; 

?>