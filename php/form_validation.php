<!DOCTYPE HTML>
<html>
<head>
<h1> PHP Form Validation and Form Required Fields </h1>
</head>
<body>
  <?php
  // define variables and set to empty values
  $name = $mail = $add = $radio_button = $msg = "";

  // This function takes data and ensure security
  function check_data($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

   ?>
   <p><span class = "error">* required field.</span></p>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <span class="error">* <?php echo $name;?></span>
    Name: <input type="text" name="name"><br><br>
    <span class="error">* <?php echo $mail;?></span>
    E-mail: <input type="text" name="email"><br><br>
    <span class="error">* <?php echo $add;?></span>
    Address: <input type="text" name="address"><br><br>
    <span class="error">* <?php echo $radio_button;?></span>
    How many fruits you eat in a day? <input type="radio" name="fruits_per_day" value = " Zero to One"> 0-1
    <input type="radio" name="fruits_per_day" value = "Two to Three"> 2-3
    <input type="radio" name="fruits_per_day" value = "Four to Five"> 4-5 <br><br>
    <span class="error">* <?php echo $msg;?></span>

    Message: <br><textarea rows = "5" cols = "25" name="message"></textarea>
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

      echo "<b> Name: </b> ". $name. "<br>";
  }

  else
  {
    echo "<br> Please specify name <br>";
  }
  // If email address not empty
  if((!empty($_POST["email"])))
  {
    $mail = check_data($_POST["email"]);

    echo "<b> Email Address is: </b> <br>". $mail. "<br>";
  }

  else
  {
    echo "Please specify Email Address<br>";
  }
  // If address not empty
  if((!empty($_POST["address"])))
  {
    $add = check_data($_POST["address"]);

    echo "<b>  Address is: </b> <br>". $add. "<br>";
  }
  else
  {
    echo "Please specify Address<br>";
  }

  // If radio button selected
  if((!empty($_POST["fruits_per_day"])))
  {
    $radio_button = check_data($_POST["fruits_per_day"]);

    echo "<b> Number of fruits you eat per day: </b> ". $radio_button. "<br>";
  }
  else
  {
    echo "Please select radio button <br>";
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
