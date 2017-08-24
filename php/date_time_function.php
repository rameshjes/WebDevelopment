<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
    <p> The PHP date() function is used to format a date and/or a time.  </p>
    <h1> PHP Date( ) Function   </h1>
    <p> The PHP date() function formats a timestamp to a more readable date and
      time.</p>
    <ul>
      <li> d - Represents the day of the month (01 to 31)  </li>
      <li>  m - Represents a month (01 to 12)    </li>
      <li>  Y - Represents a year (in four digits)       </li>
      <li>  l (lowercase 'L') - Represents the day of the week   </li>
    </ul>

	      <?php

	      echo "<b> Today is: </b>". date("Y/m/d"). "<br>";
        echo "<b> Today is: </b>".date("Y.m.d")."<br>";
        echo "<b> Today is: </b>".date("Y-m-d")."<br>";
        echo "<b> Today is: </b>". date("l");

        ?>
			 <h1> Get a simple Time  </h1>
			 <ul> Here are some characters that are commonly used for times:
				 <li> h - 12-hour format of an hour with leading zeros (01 to 12)
            </li>
					<li> i - Minutes with leading zeros (00 to 59)       </li>
					<li> s - Seconds with leading zeros (00 to 59)           </li>
					<li> a - Lowercase Ante meridiem and Post meridiem (am or pm)   </li>
			 </ul>

			 <?php

			 	echo "<b> current time is: </b> ". date("h:i:sa");

			  ?>
			<h1> Get your Time Zone      </h1>
			<p>  If the time you got back from the code is not the right time,
				it's probably because your server is in another country or set up for
				a different timezone.
      </p>
			<p>So, if you need the time to be correct according to a specific location,
				you can set a timezone to use.
     </p>
		 <?php
		 date_default_timezone_set("Europe/Berlin	");
		 echo "The time is " . date("h:i:sa");
		  ?>




    </body>

</html>
