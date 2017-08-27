<!-- Setting cookies in php requires upto arguments
// cookies function setcookie(name,value, expire, path, domain, security);
// This function should be called before <html> tag
// For each cookie this function has to be called separately

/*setcookie(name,value,expire,path,domain,security)
i. name − This sets the name of the cookie and is stored in an environment
variable called HTTP_COOKIE_VARS. This variable is used while accessing cookies.
ii. value - This sets the value of the named variable and is the content that
  you actually want to store.
iii. Expiry − This specify a future time in seconds since 00:00:00 GMT on
1st Jan 1970. After this time cookie will become inaccessible. If this parameter
 is not set then cookie will automatically expire when the Web Browser is closed.
iv. Path − This specifies the directories for which the cookie is valid.
A single forward slash character permits the cookie to be valid for all directories.
v. Domain − This can be used to specify the domain name in very large domains
and must contain at least two periods to be valid. All cookies are only valid
for the host and domain which created them.
vi. Security − This can be set to 1 to specify that the cookie should only be
sent by secure transmission using HTTPS otherwise set to 0 which mean cookie
can be sent by regular HTTP.
 -->

<?php
  $cookie_name = "user";
  $cookie_value = "John";
  setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/","",0); //86400 sec = 1 day
  // single forward slash permits cookie to be valid for all directories
  setcookie("age","36",time() + (86400*30),"/","",0);
 ?>

<html>

<head>
  <h1>Setting Cookies with PHP  </h1>
</head>

<body>
  <?php
    echo "Set Cookies";
   ?>

   <h2>Accessing Cookies with PHP </h2>
   <?php
   // Cookies can be accessed using:
        //i. $_COOKIE
        //ii. $HTTP_COOKIE_VARS
    echo "<b> First Cookie is: </b> ". $_COOKIE["user"]; // name of cookie to access
    echo "<br>";
    echo "<b> Second Cookie is: </b> ". $_COOKIE["age"];
    echo "<br>";
    echo $HTTP_COOKIE_VARS["age"];
    ?>

    <p> We can also use <b>isset()</b> function to check if a cookie is set or not </p>
    <h2> Checking Cookie is set using isset function </h2>

    <?php
      // if cookie with name : "name" is created
      if (isset($_COOKIE["name"]))
      {

        echo "<b> Cookie is set and its value is: </b> ". $_COOKIE["name"];
      }
      else
      {
        echo "<b> Sorry, cookie is not recognized</b> <br> ";
      }

     ?>

    <h2> Delete a Cookie </h2>
    <p> To delete a cookie, use the setcookie() function with an expiration
      date in the past:
</p>


</body>
</html>

<!-- Removing Cookie -- >
<?php
  setcookie("user","",time()-60,"/","",0); // time() - anytime
 ?>

<!-- Checking cookie after removing-->
<html>

<body>
  <?php
    // if cookie with name : "name" is created
    if (isset($_COOKIE["user"]))
    {

      echo "<b> Cookie is set and its value is: </b> ". $_COOKIE["user"];
    }
    else
    {
      echo "<b> Sorry, cookie is not recognized; looks it is deleted or not created</b> <br> ";
    }

   ?>
</body>

 </html>
