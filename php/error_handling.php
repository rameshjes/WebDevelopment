<?php
// This script enables to display error in browser

ini_set('display_errors', 1);
error_reporting(~0);
/*
Error Handling in PHP ::
  Default error in php is simple as browser displays line number in which error has occured

Professional way to check errors:
  i. Simple die() statements
  ii. Custom errors and error triggers
  iii. Error reporting

*/
echo "<b> Error Handling using die statement </b> <br><br>";
// if "welcome.txt" does not exists
if (!file_exists("welcome.txt"))
{
  echo "<b> You search for file name: welcome.txt <b><br>";
  die("File not found");
}
else
{
  $file = fopen("welcome.txt","r");
}

 ?>
