<!DOCTYPE html>
<html>
	<head>
    <h1>Loops in PHP </h1>
	</head>
	<body>
    <ul>In PHP, we have following looping statements:
      <li> <b> while </b> - loops through a block of code as long as the
				specified condition is true </li>
      <li> <b> do...while </b> - loops through a block of code once,
				and then repeats the loop as
        long as the specified condition is true   </li>
      <li> <b>for </b> -  loops through a block of code a specified
				number of times </li>
      <li> <b> foreach </b> -  loops through a block of code for each
				element in an array </li>

    </ul>
		<h2> While Loop	</h2>
		<p> The while loop executes a block of code as long as the
			specified condition is true.
            </p>
	    <p>
	      <?php
	     	$x = 1;
				while ($x <= 10) {
					# code...
					echo " value of variable is: ". $x;
					echo "<br>";
					$x++;
				}
	      ?>
	    </p>

			<h2> Do-While Loop </h2>
			<p>	The do...while loop will always execute the block of code once,
				it will then check the condition, and repeat the loop while the
				specified condition is true.</p>
			<?php

			$y = 5;

			do {
				# code...
				echo "value of variable is: ". $y;
				echo "<br>";
				$y += 5;
			}
			while ($y <= 20);

			 ?>
			 <h2>  For Loop      </h2>
			 <p> The for loop is used when you know in advance how many times the
				 script should run.  </p>

			 <?php

			 for ($i=0 ; $i < 10; $i++ ) {
			 	# code...
				echo "The number is: $i";
				echo "<br>";
			 }

			  ?>

				 <h2>  Foreach Loop  </h2>
				 <p>  The "for each" loop works only on arrays, and is used to
				 loop through each key/value pair in an array.
	             </p>

				 <?php

				 $colors = array("red","green","blue","black","yellow");

				 foreach ($colors as $value) {
				 	# code...
					echo "$value <br>";

				 }

				  ?>

    </body>
</html>
