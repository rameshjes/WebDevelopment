<!DOCTYPE html>
<html>
	<head>
    <h1> PHP Connect to MySQL </h1>
	</head>
	<body>
    <h2> Add Student Information in MySQL database</h2>

		<form method="POST" action="">

		First Name:	<input type="text" name="first_name"><br><br>
		Last Name:	<input type="text" name="last_name"><br><br>
		ID: <input type="text" name="Id"><br><br>
		Email: <input type="text" name="email"><br><br>
		Contact: <input type="number" name="contact"><br><br>
		<input type="Submit">

		</form>

	      <?php


          $servername = "localhost";
          $username = "root";
          $password = "student.12";

					// Get data when form is submitted
					$id = $_POST['Id'];
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$email = $_POST['email'];
					$contact = $_POST['contact'];


					echo "$first_name <br>";
					echo "$last_name <br>";
					echo "$email <br>";
					echo "$contact <br>";
					echo "$id <br>";
					// create object of database
          $mysqli = new mysqli($servername,$username,$password, "students_information");

					// Verify if database is not accessed

					if (mysqli_connect_errno())
					{
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					else
					{
							echo "<br>database is accessed correctly<br>";
					}

					// attempt insert query execution

					$sql = "INSERT INTO students (id, FirstName, LastName, Email, Contact)
								VALUES ('$id','$first_name','$last_name','$email','$contact')";

					if(mysqli_query($mysqli, $sql))
					{
						echo "Records added successfully.";
					}
					else
					{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);

					}

				 // sql to delete a record
				/*$sql = "DELETE FROM employee	WHERE name='$var_form'";

				if (mysqli_query($mysqli, $sql))
				{
		    echo "<br>Record deleted successfully";
				}
				else
				{
		    echo "<br>Error deleting record: " . mysqli_error($mysqli);
			}*/

				// Get ID of The Last Inserted Record
				/*If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT
				field, we can get the ID of the last inserted/updated record immediately.*/

				/*
				if (mysqli_query($conn, $sql))
				{
			    $last_id = mysqli_insert_id($conn);
			    echo "New record created successfully. Last inserted ID is: " . $last_id;
			  }
				else
				{
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				*/
				// We can also do multiple queries(using mysqli_multi_query())



				// we can also update data in MySQL Table
				/*

				UPDATE table_name
				SET column1=value, column2=value2,...
				WHERE some_column=some_value

				*/

				// Delete Table
				/*$drop_table = "DROP TABLE employee";
				if (mysqli_query($mysqli, $drop_table))
				{
		    echo "<br> TABLE deleted successfully";
				}
				else
				{
		    echo "<br> Error deleting record: " . mysqli_error($mysqli);
				}
				*/

	      ?>

    </body>
</html>
