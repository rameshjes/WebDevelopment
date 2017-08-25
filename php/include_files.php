<!DOCTYPE html>
<html>
	<head>
    <h1> PHP Include Files using include and return statements </h1>
	</head>

	<body>
    <p> The include (or require) statement takes all the text/code/markup that
      exists in the specified file and copies it into the file that uses the
      include statement.
       </p>
    <p> Including files is very useful when you want to include the same PHP,
      HTML, or text on multiple pages of a website.
     </p>
     <h1> PHP include and require Statements     </h1>
     <p> It is possible to insert the content of one PHP file into another PHP
       file (before the server executes it), with the include or require
       statement.
     </p>
     <ul>The include and require statements are identical, except upon failure:
       <li> require will produce a fatal error (E_COMPILE_ERROR) and stop the
         script
        </li>
       <li> include will only produce a warning (E_WARNING) and the script will
         continue
           </li>
 </ul>
      <h2> Example using include statement </h2>
      <p> Include file fruits.php   </p>

	      <?php

	      include 'fruits.php';

	      echo "<b> Fruit is: </b>". $fruit. " <b> and its color is: </b>".$color;

        ?>

      <h2> Including within functions       </h2>
      <p> Include file vehicle.php      </p>
      <p> If you call include file inside function, then variable scope is only
        valid inside function.
           </p>
      <p> If you want to use same variable outside the function also, then
        declare variable as global     </p>
      <?php

        function include_file(){

          include 'vehicle.php';
          echo "Inside function scope <br>";
          echo "My favorite vehicle is <b> $vehicle </b> in <b> $color</b>  color";
        }

        include_file();
        /* If we want to use vehicle vriable outside function
        then declara global $vehicle inside function also. */
        // echo $vehicle;
      ?>

      <h2> PHP include vs require    </h2>
      <p> The require statement is also used to include a file into the PHP
         code.</p>
      <p> When include statement cannot find file, php script still continues,
        while if require statement cannot find file, echo statement won't get
        executed because the script execution dies after the require statement.
        </p>
      <ul>
        <li> Use require when the file is required by the application. </li>
        <li> Use include when the file is not required and application should
          continue when file is not found.     </li>
      </ul>

     <h2> Example using require statement </h2>
     <?php

      echo " <b> if file name is correct, then echo statement gets executed </b> <br>";
      require 'vehicle.php';
      echo "Vehicle $vehicle";

      echo "<br> <b> if file name is incorrect, echo statement does not gets executed </b> <br>";

      require 'vch.php';
      echo "vehicle $vehicle"

      ?>

    </body>
</html>
