<!DOCTYPE html>
<html>
	<head>
    <h1> PHP Global Variables - Superglobals    </h1>
	</head>
	<body>
	    <p> Several predefined variables in PHP are "superglobals", which means
        that they are always accessible, regardless of scope - and you can
        access them from any function, class or file without having to do
        anything special. </p>
      <ul> <b> PHP superglobal variables are: </b>
      <p>    </p>

        <li>  $GLOBALS    </li>
        <li>  $_SERVER   </li>
        <li>  $_REQUEST    </li>
        <li>  $_POST    </li>
        <li>  $_GET    </li>
        <li>  $_FILES    </li>
        <li>  $_ENV    </li>
        <li>  $_COOKIE    </li>
        <li>  $_SESSION     </li>

      </ul>

			<h3> PHP $GLOBALS </h3>
			<p>$GLOBALS is a PHP super global variable which is used to access global
				variables from anywhere in the PHP script (also from within functions
				or methods). </p>
			<p> PHP stores all global variables in an array called $GLOBALS[index].
				The index holds the name of the variable.
         </p>

	      <?php
				$x = 10;
				$y = 60;
				function Product(){

					$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];

				}

				Product();
				echo "<b> The product of two numbers is </b> ". $z. "<br>";

	      ?>

			<h3> PHP $_SERVER  </h3>
			<p> $_SERVER is a PHP super global variable which holds information about
				headers, paths, and script locations.
      </p>

			<?php

			echo "<b> Server PHP Self: returns filename of currently executing script </b> ". $_SERVER['PHP_SELF']. "<br>";
			echo "<b> Server SERVER_NAME: </b> ". $_SERVER['SERVER_NAME']. "<br> ";
			echo "<b> Server HTTP_HOST: </b>". $_SERVER['HTTP_HOST']. "<br> ";
			echo "<b> Server HTTP_REFERER: </b> ". $_SERVER['HTTP_REFERER']. "<br> ";
			echo "<b> Server HTTP_USER_AGENT: </b> ". $_SERVER['HTTP_USER_AGENT']. "<br> ";
			echo "<b> Server Script name: </b>". $_SERVER['SCRIPT_NAME']. "<br> ";

			 ?>

			 <h3> PHP $_REQUEST   </h3>
			 <p> PHP $_REQUEST is used to collect data after submitting an HTML form.</p>
			 <p> When a user ubmits the data by clicking on "Submit",
				 the form data is sent to the file specified in the action attribute of
				  the <form> tag.
					we can use the super global variable $_REQUEST to collect the
					value of the input field </p>

			 <h3> PHP $_POST  </h3>
			 <p> PHP $_POST is widely used to collect form data after submitting an
				 HTML form with method="post". $_POST is also widely used to pass
				 variables.
            </p>

			 <h3> PHP $_GET </h3>
			 <p> PHP $_GET can also be used to collect form data after submitting an
				 HTML form with method="get". </p>
			 <p> $_GET can also collect data sent in the URL. </p>


    </body>
</html>
