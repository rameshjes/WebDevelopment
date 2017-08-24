<!DOCTYPE HTML>
<html>
<head>
<h1> PHP Form Handling   </h1>
</head>
<body>
  <p> PHP superglobals $_GET and $_POST are used to collect form-data. </p>
  <p> Here we collect form-data from simple_HTML_form.html       </p>

  Welcome <?php echo $_POST["name"]; ?>
  <?php echo "<br> <b> Your details are: <br> </b>"; ?>
  Name: <?php echo $_POST["name"]. "<br>"; ?>
  Email: <?php echo $_POST["email"]. "<br>" ; ?>


</body>
</html>
