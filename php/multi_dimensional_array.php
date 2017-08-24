<!DOCTYPE html>
<html>
	<head>
    <h1> Multi-Dimensional Array </h1>
	</head>
	<body>
    <p> A multidimensional array is an array containing one or more arrays.</p>
    <h3> Task: Create identity matrix using multi-dimensional array </h3>

	      <?php

        for($row = 0; $row<=2; $row++)
        {

          for($col = 0; $col<=2; $col++)
          {
            if($row == $col)
            {
              echo "1";
              echo "\t"; // tab is not working properly
            }
            else
            {
              echo "0"."\t";
            }
          }
          echo "<br>";

        }
        ?>

      <h3> Task: Create table  </h3>

      <?php
      $cars = array(
        array("<b>Name</b>","<b>Stock</b>","<b>Sold</b>"),
        array("Volvo","22","18"),
        array("BMW","15"," 13"),
        array("Land Rover","17","15")
      );

      for($row = 0; $row <= count($cars); $row++)
      {

        for($col = 0; $col <= count($cars); $col++)
        {
          echo "<font size=14>";
          echo $cars[$row][$col];
          echo "\t";

        }
        echo "<br>";
      }

      ?>

    </body>
</html>
