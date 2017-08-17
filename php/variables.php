<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	    <p>

				<?php
				echo "<h1><b> Variables </b></h1>";
				print "In PHP, variables name are case sensitive, while names of functions, classes are <b> not case sensitve </b> <br><br>";
				$color = "red";
	      echo "<b> Color of My car is: </b>"  , $color, "<br><br>";

				$x = 10;
				$y = 20;

				/*
				concept of global variables
				# global variable can be helpful when we already have variable declared outside of function
				# and we want to perform some operation on that variable
				*/
				echo "<h2> <b> Global Variables Example </b> </h2> <br>";

				function globalvariables_test(){

				global $x, $y;
				echo "sum of x and y is: ", $x + $y;
				}

				globalvariables_test();

				echo "<h2> <b> Local Variables Example </b> </h2>";

				function localvariables_test(){
					$x = 500;
					$y = 1000;

					$x_new = $x * 10;
					$y_new = $y + $x_new;

					echo "<br> x new is: ", $x_new;
					Echo "<br> y new is: ", $y_new;

				}

				localvariables_test();

				/*
				When a function is executed all of its variables are deleted.
				However, sometimes we want a local variable NOT to be deleted.
				We need it for a further job.

				*/
				echo "<h2> <b> Static Variables Example </b> </h2>";

				function staticvariables_test(){
					static $z = 0;
					echo " <br> Value of z is: ", $z;
					$z++;
				}

				for($i = 0; $i < 3; $i++)
				{
					staticvariables_test();
				}

				## Echo: When you write echo and remaining text with double text, then value of variable is parsed
				$name = RameshKumar;

				echo "<br><br>Printing echo with double quotations $name";
				echo '<br><br>Printing echo with single quotation $name';
				echo '<br> This represents that when we use double quotation with echo, value of variable is directly parsed,while
				             in single quotation this is not case <br>';

				echo "<h1> Concetation Operator </h1>";
				echo "In PHP, Concetation operator is dot(.) or period(.) or full stop(.) <br> ";
				echo '<b> printing variable using concetation operator </b> '. $name ;
				echo '<br> It\'s a nice day';
				echo "<br> It's nice weather";

				?>
	    </p>
    </body>
</html>
