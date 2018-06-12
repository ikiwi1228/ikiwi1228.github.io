<html>
	<head>
		<title>Base Number Converter</title>

	<head/>


	<body>

		<h1>Welcome to Base Number Converter</h1>
		<p>Use the following </p>
	<?php

		$arg1 = $arg2 = $output = $retc = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
	if ($arg1== "Decimal to Binary"){
         exec("/usr/lib/cgi-bin/student4/dtb " . $arg2, $output, $retc); 
       }
	if ($arg1== "Binary to Decimal"){
         exec("/usr/lib/cgi-bin/student4/btd " . $arg2, $output, $retc); 
       }
	if ($arg1== "Decimal to Hexadecimal"){
         exec("/usr/lib/cgi-bin/student4/dth " . $arg2, $output, $retc); 
       }
	if ($arg1== "Hexadecimal to Binary"){
         exec("/usr/lib/cgi-bin/student4/htb " . $arg2, $output, $retc); 
       }
	if ($arg1== "Binary to Octal"){
         exec("/usr/lib/cgi-bin/student4/bto " . $arg2, $output, $retc); 
       }
	if ($arg1== "Octal to Binary"){
         exec("/usr/lib/cgi-bin/student4/otb " . $arg2, $output, $retc); 
       }
}

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Type: <input type="radio" name="arg1" value="Decimal to Binary">Decimal to Binary
		<input type="radio" name="arg1" value="Decimal to Hexadecimal">Decimal to Hexadecimal
                <input type="radio" name="arg1" value="Hexadecimal to Binary">Hexadecimal to Binary
                <input type="radio" name="arg1" value="Binary to Octal">Binary to Octal
                <input type="radio" name="arg1" value="Octal to Binary">Octal to Binary
		<input type="radio" name="arg1" value="Binary to Decimal">Binary to Decimal
	<p> </p>
      Input: <input type="text" name="arg2"><br>
      <input type="submit">
    </form><?php
       echo "<h2>Your Input :</h2>";
       echo $arg1;
       echo "<br>";
       echo $arg2;
       echo "<br>";

       echo "<h2>C Program Output :</h2>";
       foreach ($output as $line) {
         echo $line;
         echo "<br>";
       }

       echo "<h2>C Program Return Code:</h2>";
       echo $retc;

     ?>

  </body>
</html>
