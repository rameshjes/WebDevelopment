<!DOCTYPE html>
<html>
	<head>
    <h1> $_REQUEST Example   </h1>
	</head>
	<body>
  <p>The PHP $_REQUEST variable is used to retrieve the information sent by
    POST, GET or Cookie. This information can be assigned or saved to the
    database or can be used for any intended purposes. </p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="id_name">
      <br><br>
      <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['id_name']);
        if (empty($name))
        {
            echo "<br> field is empty";
        }
        else
        {
            echo "<br> <b> You entered: </b>". $name;
        }
    }
    ?>

  </body>
</html>
