<!DOCTYPE html>
<html>
	<head>
    <h1> PHP Open, Read, and Close File</h1>
	</head>
	<body>

    <h2> PHP Open File - fopen() </h2>
    <p>A better method to open files is with the fopen() function. This function
       gives you more options than the readfile() function.
    </p>
    <p> Read "web_technologies.txt" file </p>
    <p> fopen command: The first parameter of fopen() contains the name of the
      file to be opened and the second parameter specifies in which mode the
      file should be opened.  </p>

	   <?php
        // If file does not exist, it also generates message
        $open_file = fopen("web_technologies.txt","r") or die("Unable to open file!");
        echo fread($open_file, filesize("web_technologies.txt"));
        // It's a good programming practice to close all files after you have
        //finished with them. You don't want an open file running around on
        //your server taking up resources!

        fclose($open_file);

     ?>

    <p><b> The readfile() function is useful if all you want to do is open up a
      file and read its contents.</b></p>

    <h2> PHP Read Single Line - fgets() </h2>
    <p> The fgets() function is used to read a single line from a file. </p>

    <?php

    $open_file = fopen("web_technologies.txt","r") or die("Unable to open file!");
    echo fgets($open_file); // read single line from file
    fclose($open_file);
     ?>

     <p> <b> Note: </b> After a call to the fgets() function, the file pointer
       has moved to the next line. </p>

    <h2> PHP Check End-Of-File - feof() </h2>
    <p> The feof() function checks if the "end-of-file" (EOF) has been reached. </p>
    <p> The feof() function is useful for looping through data of unknown length.   </p>
    <h3> Example </h3>

    <?php

    $open_file = fopen("web_technologies.txt","r") or die("Unable to open file!");

    // Loop continues until last line
    while (!feof($open_file)) {

      echo fgets($open_file). "<br> ";

    }

    fclose($open_file);
     ?>

    </body>
</html>
