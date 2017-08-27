<?php
  // Start the session
  session_start();
  // following example starts a session then register a variable called counter
  //that is incremented each time the page is visited during the session.
  if (isset($_SESSION['counter']))
  {
    $_SESSION['counter'] += 1;
  }
  else
  {
    $_SESSION['counter'] = 1;
  }
  $message = "<b> Number of times page is visitied: </b>".$_SESSION['counter']." in this session";
 ?>

 <html>
 <head>
   <h1> Setting up a PHP session</h1>
</head>

<body>
  <?php
  echo $message;
   ?>
</body>
</html>

<!-- Destroying a php session
PHP session can be destroyed by session_destroy() function
This function does not need any argument and a single call can destroy all session variables
If we want to destory single variable, we can use unset() func. to unset a session variable
-->

<?php
  // if we want to destroy single variable
  unset($_SESSION['counter']);
  // to destroy all variables
  // session_destroy();
  echo " <br> Session variables are destroyed";
 ?>

 <!-- checking variable after destroying -->

 <html>
 <head>
   <h1> Check Sesssion Variable After destorying       </h1>
 </head>
 <body>
   <?php
   // if session variable is not set
    if (!isset($_SESSION['counter']))
    {
      echo "session variables are destroyed successfully";
    }
    else
    {
        echo "Session variable is not destoryed";
    }

    ?>

 </body>

 </html>
