<!DOCTYPE html>
<html>
	<head>
    <h1> Conditional Statements </h1>
	</head>
	<body>

	    <p> Conditional statements are used to perform different actions based on different conditions. </p>

      <p> Very often when you write code, you want to perform different actions for different conditions.
        You can use conditional statements in your code to do this. </p>
      <p>In PHP we have the following conditional statements:
        <ul>

          <li>  if statement - executes some code if one condition is true  </li>
          <li> if...else statement - executes some code if a condition is true and another code if that condition is false </li>
          <li> if...elseif....else statement - executes different codes for more than two conditions </li>
          <li> switch statement - selects one of many blocks of code to be executed </li>

        </ul>

       </p>

      <p>
        <?php
        $number1 = 35;
        $number2 = 40;

        echo "number1 = 35". "<br>". "number2 = 40";
        echo "<br>";

        if($number1 == $number2){
          echo " Two numbers are equal";
        }

        else if($number1 > $number2){
          echo " number1 is greater than number2";
        }
        else {
          echo "number2 is greater than number1";
        }
	      ?>

        <h1> Switch Statement </h1>
        <p> The switch statement is used to perform different actions based on different conditions.</p>
        <p> Use the switch statement to select one of many blocks of code to be executed. </p>

        <?php
        $favcolor = "red";

        switch ($favcolor) {
          case 'blue':
            # code...
            echo "Your favorite color is blue";
            break;

          case 'green':
            # code...
            echo "Your favorite color is green";
            break;

          case 'red':
            # code..
            echo "Your favorite color is red";
            break;

          default:
            # code...
            echo "Your favorite color is neither red, green, nor blue";
        }
         ?>

	    </p>
    </body>
</html>
