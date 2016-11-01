<?php
$palvelin="mysql:host=localhost; dbname=esim2";
try {
	$db=new PDO($palvelin,"phpuser","phppass");
	//echo "Yhteys OK";
} catch (Exception $e) {
	echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitoon";
	
}
?>


#$palvelin="mysql:host=localhost; dbname=esim2";

#{
#	$db=new PDO($palvelin,"phpuser","phppass");

	#echo "Yhteys OK");
#	$testi=true;
#} catch (Exception $e) 
#{
	#echo "ERROR " .$e->getMessage
#	$testi=false
#}
#return testi;

#$servername = "localhost";
#$username = "phpuser";
#$password = "phppass";

// Create connection
$conn = new mysqli($localhost, $phpuser, $phppass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


?>
