<!DOCTYPE HTML>
<html>
<head>
<h1> Validate Email, URL, and Name </h1>

<style>
.error{color:#FF0000;}
</style>

</head>
<body>
  <p> 	The preg_match() function searches a string for pattern, returning true
    if the pattern exists, and false otherwise.</p>
  <?php
  // define variables and set to empty values
  $name = $mail = $website = $msg = "";

  // This function takes data and ensure security
  function check_data($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

   ?>
   <p><span class = "error">* required field.</span></p>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
  ?>">
    <span class="error">* <?php echo $name;?></span>
    Name: <input type="text" name="name"><br><br>
    <span class="error">* <?php echo $mail;?></span>
    E-mail: <input type="text" name="email"><br><br>
    <span class="error">* <?php echo $website;?></span>
    Website: <input type="text" name="url"><br><br>
    <span class="error">* <?php echo $msg;?></span>

    Message: <br><textarea rows = "5" cols = "28" name="message"></textarea>
      <br>
      <br>
    <input type="submit">

  </form>

  <?php
  // If name is not empty
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {

  if((!empty($_POST["name"])))
  {
    $name = check_data($_POST["name"]);
    // if name does not contains only letters and whitespaces
    if(!preg_match("/^[a-zA-Z ]*$/",$name)){
        // echo "<b> Name: </b> ". $name. "<br>";
        echo "Only letters and whitespaces are allowed";
    }
    else{
      echo "<b> Name: </b> ". $name. "<br>";
    }

  }
  else
  {
    echo "<br> Please specify name <br>";
  }

  // If email address not empty
  if((!empty($_POST["email"])))

  {
    $mail = check_data($_POST["email"]);
    // if email is not valid
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid email format<br>";
    }
    else
    {
      echo "<b> Email Address is: </b> <br>". $mail. "<br>";
    }

  }

  else
  {
    echo "Please specify Email Address<br>";
  }


  // If website not empty
  if((!empty($_POST["url"])))
  {
    $website = check_data($_POST["url"]);
    // if format of website is not valid

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
    {
      echo "Please enter valid url<br>";
    }
    else
    {

      echo "<b>  Address is: </b> <br>". $website. "<br>";
    }

  }
  else
  {
    echo "Please specify website<br>";
  }

  if((!empty($_POST["message"])))
  {
    $msg = check_data($_POST["message"]);
    echo "<b> Your Message is: </b>". $msg. "<br>";
  }
  else
  {
    echo "Please specify Message <br>";
  }

  }
   ?>

</body>
</html>
