<!DOCTYPE html>
<html>
<body>
<?php
// Filter includes:
// Validating data = Determine if the data is in proper form.
// Sanitizing data = Remove any illegal character from the data.

/*
You should always validate external data!
	Invalid submitted data can lead to security problems and break your webpage!
	By using PHP filters you can be sure your application gets the correct input!
*/

/*
PHP filter_var() Function
  . The filter_var() function both validate and sanitize data.
  . The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:
    i. The variable you want to check
    ii. The type of check to use

*/

$str = "<h1>Hello World!</h1>";

$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo "<b> Sanitize string removes all HTML tags from string: </b>". $newstr;

 ?>
 <h2> Validate an Integer </h2>

 <?php
   $int = 10;
   // if variable is integer
   if (!filter_var($int, FILTER_VALIDATE_INT) === false)
   {
     echo "Variable is integer and its value is: ".$int;
   }
   else
   {
     echo "Variable is not integer";
   }
   // check second variable
   $int2 = 3/4;
   if (!filter_var($int2, FILTER_VALIDATE_INT) === false)
   {
     echo "<br> Variable is integer and its value is: ".$int2;
   }
   else
   {
     echo "<br> Variable is not integer";
   }
  ?>

  <h2> Sanitize and Validate a URL     </h2>
  <?php
  $url = "https://www.google?.com";
  echo "<b> input url is: </b> $url <br>";
  // Remove all illegal characters from a URL
  $sanitized_url = filter_var($url,FILTER_SANITIZE_URL);
  echo " <b> Sanitized url is: </b> $sanitized_url <br>";
  // Validate Url
  if (!filter_var($sanitized_url,FILTER_VALIDATE_URL) === false)
  {
    echo "url is valid";
  }
  else
  {
    echo "url is not a valid one";
  }

   ?>

   <h2> Validate an Integer within a Range </h2>

   <?php
   $input_num = 130;
   $min = 0;
   $max = 200;
   echo "Number to be checked: $input_num <br>";
   echo "Minimum number:  $min <br>";
   echo "Maximum number: $max <br>";
   echo "<br> <b> checking range of integer using filters </b><br>";
   if (filter_var($input_num, FILTER_VALIDATE_INT, array
   ("options" => array("min_range"=>$min,"max_range"=>$max))) === false)
   {
     echo "Number is out of range";
   }
   else
   {
    echo "Number is within range: $min and $max";
   }


    ?>

</body>
</html>
