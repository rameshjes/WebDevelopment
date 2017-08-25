<!DOCTYPE html>
<html>
	<head>
    <h1> PHP File Handling</h1>
	</head>
	<body>
    <p> File handling is an important part of any web application. You often
      need to open and process a file for different tasks.
    </p>
    <h2> PHP Manipulating Files </h2>
    <p>PHP has several functions for creating, reading, uploading, and editing files. </p>
    <p> The readfile() function reads a file and writes it to the output buffer. </p>
	      <?php
        echo readfile("web_technologies.txt");
        // number in the end of echo(print in browser) denotes number of bytes
	      ?>
    <p><b> The readfile() function is useful if all you want to do is open up a
      file and read its contents.</b></p>

    </body>
</html>
