<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>

    <p> This example controls the form in information.php     </p>
    <?php
    if( ($_POST["username"] == "ramesh") && ($_POST["password"] == "1234") )
    {
      echo "Login successfully" ;

    }
    else
    {
     echo "Invalid user name or password" ;
    }
    // if fields are not empty

     ?>

    </body>
</html>
