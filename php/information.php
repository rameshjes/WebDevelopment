<!DOCTYPE html>
<html>
	<head>
    <h1> Information about Clients   </h1>
	</head>
  <p> This form is controlled using $_Get_example.php file    </p>
	<body>
    <form method="get" action="$_Get_example.php">
      <b> Name: <b> <input type="text" name="name_id">
      <br> <br>
      <b> Age: <b> <input type="text" name="age_id">
      <br> <br>
      <b> Height: <b> <input type="text" name="height_id">
      <br> <br>
      <input type="Submit">
      <br><br><br>

    </form>

   <p> This form is controlled using post method from $_post_example.php </p>
   <p> user name is "ramesh" and password is "1234" </p>
   <p> If user name and password matches then login successfully else Invalid
           </p>

   <form method="post" action="$_Post_example.php">
     <b> User Name: <b> <input type="text" name="username">
     <br> <br>
     <b> Password: <b> <input type="password" name="password">
     <br> <br>
     <input type="Submit">

   </form>


    </body>
</html>
