<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>

    <?php
    if( isset($_GET["name_id"]) && isset($_GET["age_id"]) && isset($_GET["height_id"]) )
    {
      $name = $_GET["name_id"];
      $age = $_GET["age_id"];
      $height = $_GET["height_id"];

    }
    // if fields are not empty
    if( !empty($name) && !empty($age) && !empty($height) )
    {
      echo "<b> Client's name is: </b>" . $_GET["name_id"]. "<br>";
      echo "<b> Client's age is: </b>" .$_GET["age_id"] . "<br>";
      echo "<b> Client's height is:</b> ". $_GET["height_id"]. "<br>";
    }
    // else fields are empty
    else
    {
      echo "Please enter all fields";
    }

     ?>

    </body>
</html>
