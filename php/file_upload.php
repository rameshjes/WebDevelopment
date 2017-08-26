<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>

	  <?php
			// first thing we check is that whether file is there or not
			if ($_FILES['file']) {
				$file = $_FILES['file'];
				print_r($file); // information about file(name, type, error and size)
				// we can use properties of File

				//File properties
				$file_name = $_FILES['file']['name'];
				// echo "<br> $file_name";
				$file_tmp = $_FILES['file']['tmp_name'];
				// echo "<br> $file_tmp";
				$file_size = $_FILES['file']['size'];
				// echo "<br> $file_size";
				$file_error = $_FILES['file']['error'];
				// echo "<br> $file_error";
				// Extract file extension
				// syntax: explode(separator, string, limit)
				$file_ext = explode('.',$file_name); // exlode breaks string into array
				// echo "<br> $file_ext";
				// alternative way for extension is:
				$file_ext = strtolower(end($file_ext));
				// echo "<br> lowercase $file_ext";
				// In order to allow to upload specified file extension we can do:
				$allowed_extension = array('jpg' ,'png', 'txt','gif' );

				// Apply if statement
				// in_array is function to check whether string is in array or not
				// in_array('array', string_array_to_be_checked)

				if (in_array($file_ext,$allowed_extension))
				{
					// echo "<br> inside if statement";
					// check if file has error or not
					if ($file_error == 0)
					{
						// echo "<br> Keine Fehler";
						// check file size and allow files within 2MB
						if($file_size <= 3097152)
						{

							// Now we will generate unique name of uploaded file
							// if files have same name then they can be overwritten
							// uniqid() func. generates unique ID based on microtime
							// uniqid(prefex, more_entropy)
							// if user uploads same file again, each file gets different name and it
							// may be uploaded multiple times

							// $file_new_name = md5(uniqid('',true)) . '.' . $file_ext;

							// echo "<br> new file name $file_new_name";
							// After file name, lets define destination
							// $file_destination = 'uploads/'.$file_new_name;
							 $file_destination = 'uploads/'.$file_name;

							// move_uploaded_file func. moves an uploaded file to a new location
							// This func. only works on file uploaded via HTTP post
							// If the desitnation file already exists, it will be overwritten
						if (!file_exists($file_destination))
						{


							if (move_uploaded_file($file_tmp, $file_destination) )
							{

								echo "<br> Successfully uploaded";

							}
							else
							{
								echo "<br> not uploaded";
							}

						}
						else
						{
							echo "<br> file already exists";
						}


						}
						else
						{
						 echo "file size is too large";
						}

					}
					else
					{
					 echo "file has error";
					}

				}

			}

	   ?>

    </body>
</html>
