<!DOCTYPE html>
<html>
	<head>
    <h1> PHP 5 File Create/Write</h1>
	</head>
	<body>
    <h2>PHP Create File - fopen()  </h2>
    <p> The fopen() function is also used to create a file. Maybe a little
      confusing, but in PHP, a file is created using the same function used to
      open files.
</p>
  <p>Before creating file,
If you are having errors when trying to get this code to run, check that you
have granted your PHP file access to write information to the hard drive. </p>

   <h3> Create file using fopen() </h3>

    <?php
    $create_file = 'demofile.txt';
    $handle = fopen($create_file, 'w') or die('Cannot open file: '. $create_file);

    ?>

    <p> File with name "demofile.txt" is created </p>

    <h3> PHP Write to File - fwrite()</h3>
    <p> The fwrite() function is used to write to a file. </p>
    <p>The first parameter of fwrite() contains the name of the file to write
      to and the second parameter is the string to be written. </p>

     <?php

     $open_file = fopen("demofile.txt","w") or die("File does not exist!");
     $txt = "This is first line \n";
     fwrite($open_file,$txt);
     $txt = "Writing file using php \n";
     fwrite($open_file,$txt);
     fclose($open_file);

      ?>

    </body>
</html>
