<?php 

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'insedu');

	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	if (!$conn) {
		echo "Connection Problem";
	}

?>