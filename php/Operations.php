<!DOCTYPE html>
<html>
<head>
  <h1>Operators in PHP</h1>
</head>
<body>
  <h3> PHP Operators </h3>
  <ul>
    <li>Arithmetic operation </li>
    <li>Assignment operation </li>
    <li>Comparison operation </li>
    <li>Increment/Decrement operation </li>
    <li>Logical operation </li>
    <li>String operation </li>
    <li>Array operation </li>

  </ul>
  <p>

  <?php

    $n1 = 15;
    $n2 = 35;

    echo " number1  = 15 <br> ";
    echo " number2  = 35 <br> ";
    echo "<h2> Arithmetic Operations in PHP <h2>";
    echo " <h3> Addition of two numbers is: </h3>";
    echo  $n1 + $n2;

    echo " <h3> Subtraction of two numbers is: </h3>";
    echo  $n1 - $n2;

    echo " <h3> Multiplication of two numbers is: </h3>";
    echo  $n1 * $n2;

    echo " <h3> Division of two numbers is: </h3>";
    echo  $n1 / $n2;

    echo " <h3> Modulus of two numbers is: </h3>";
    echo  $n1 % $n2;
    echo "<br><br>";
    echo "=======================================";
    $n3 = 2;
    $n4 = 3;
    echo "<br> number 1 = 2";
    echo " <br> number 2 = 3";
    echo " <h3> Exponentiation of two numbers is: </h3>";
    echo pow($n3,$n4) ;

   ?>
 </p>
<h1>  Arrays </h1>
 <p>An array is a special variable, that can hold more than one value at a time. </p>
 <ul> In PHP, there are three types of arrays:
   <li> Indexed arrays: Arrays with a numerical index, index starts from 0 </li>
   <li>Associative arrays: Arrays with named keys  </li>
   <li> Multidimensional arrays: Arrays containing one or more arrays</li>
 </ul>

 <h2> Indexed arrays  </h2>
 <?php
 $colors  = array("Red","Black","White","Blue","Green");
 $lenofArray = count($colors);
 echo "<h4>Example </h4>";
 echo "array is :(Red,Black,White,Blue,Green) <br><br> ";
 echo "My favorite colors are ".$colors[0].", ".$colors[1]. ", " . $colors[2]. ", " . $colors[3]."<br>";
 echo "<h4>Length of array function using count() function <br></h4> ";
 echo "Length of array is: " . count($colors). "<br>";
 echo "Loop through Array using for loop <br>";

 for($i = 0; $i < $lenofArray; $i++ ){
   echo $colors[$i];
   echo "<br>";
 }
 ?>

 <h2> Array Operators </h2>
 <p>The PHP array operators are used to compare arrays. </p>
 <ul>
   <li> Union (array1 + array2)</li>
   <li> Equality( == returns true if array1 and array2 have same key/value pairs) </li>
   <li> Identity(=== returns true if array1 and array2 have same key/value
     pairs in same order and of same types) </li>
   <li>  Inequality (!= returns true if array1 is not equal to array2) </li>
   <li>  Non-Identity (returns true if array1 is not identical to array2) </li>
</ul>

<h2> Associative Arrays </h2>
<p>Associative arrays are arrays that use named keys that you assign to them. </p>
<?php
$x = array('car' => Toyota,'animal' => Tiger, 'Bird' => Pigeon );
echo "<br>";
$y = array('vehicle' => Alto ,'Tier' => Lion, 'Birde' => Eagle );
echo "array with its key is accessed as ". $y['Birde'];
echo "<br>";
print_r($x + $y);
 ?>

<h3> Loop through associate arrays </h3>

<p> To loop through and print all the values of an associative array,
  you could use a foreach loop, like this: </p>

<?php
$age = array("Ali"=> 35, "Ben" => 40, "Joe" => 10);

foreach ($age as $y => $y_new) {
  # code...
  echo "Key= ". $y . ", Value= ". $y_new;
  echo "<br>";
}
 ?>

<h3> Sorting Functions for Arrays </h3>
<p>The elements in an array can be sorted in alphabetical or numerical order,
  descending or ascending.
 </p>
<ul>
<li> sort() - sort arrays in ascending order </li>
<li> rsort() - sort arrays in descending order </li>
<li> asort() - sort associative arrays in ascending order,
  according to the value </li>
<li> ksort() - sort associative arrays in ascending order,
  according to the key </li>
<li> arsort() - sort associative arrays in descending order,
  according to the value </li>
<li> krsort() - sort associative arrays in descending order, according to the key </li>
</ul>
<?php
$numbers = array(4, 16, 21, 22, 11);

sort($numbers);

$arrlength = count($numbers);

for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
 ?>

</body>

</html>
