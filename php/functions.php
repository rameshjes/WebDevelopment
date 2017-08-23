<!DOCTYPE html>
<html>
	<head>
    <h1> PHP Functions </h1>
	</head>
	<body>
		<p> Functions in PHP can be user-defined as well as built-in. </p>
		<p> A function is a block of statements that can be used repeatedly
			in a program. A function will not execute immediately when a page loads.
			A function will be executed by a call to the function.
     </p>
		 <p> Function name can start with a letter or underscore(not a number).
			 Function names are not <b> case-sensitive </b>
		 </p>
		 <h3> Built-in Functions </h3>

		 <?php

		 echo " Built-in function for date() <br>";
		 echo "More formats can be find from ";
		 echo '<a href= "http://php.net/manual/en/function.date.php">PHP.net</a>';


		 // Day month year
		 $date = date('D-m-Y');
		 echo " <br> Today date is: $date <br>";
		 // Hours-minutes-secs
		 $time = date('H:i:s');
		 echo  "Current time is: $time <br> ";


		  ?>
		 <h3> Function without arguments       </h3>
	    <!-- <p> -->
	      <?php
	      $myName = "Ramesh";

				function printMsg(){
					global $myName;
					echo "My name is ". $myName;
				}

				printMsg();

	      ?>
	    <!-- </p> -->
			<h3> Function with arguments </h3>
			<?php

			function printName($name){
				echo "argument passed: $name";
				echo "<br>";
			}

			printName(Robert);
			printName("Ahmed");
			printName("Ricky");
			 ?>

			<h3> PHP Default Argument Value </h3>

			<?php

			function computeArea($height ='50', $width = '25')

			{
				# code...
				echo "<br> Height =  $height <br> ";
				echo "Width = $width <br> ";
				echo "<b> Area is = </b> ". $height * $width. "<br>";

			}
			computeArea();
			computeArea(100,200);
			computeArea(300);
			 ?>

			<h3> PHP Functions- Returning Values  </h3>
			<?php

			function getProduct($x= 13, $y = 10)
			{
				echo "<br> x =  $x <br> ";
				echo "y = $y <br> ";
				echo "<b> Product is = </b> ". $x * $y. "<br>";
				$z  = $x * $y;
				return $z;

			}
			getProduct(10,40);

			 ?>

    </body>
</html>
