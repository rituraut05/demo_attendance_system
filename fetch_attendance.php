<?php
$servername = "172.31.10.136";
$username = "root";
$password = "rrrrrrrr";
$dbname = "sds-attendance";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

$showData = "SELECT * FROM attendance";
$data = array();
$result = mysqli_query($conn, $showData);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
} else {
	echo "0 results";
};
//print json_encode($data);
$response = json_encode($data);
mysqli_close($conn);
echo($response);
?>