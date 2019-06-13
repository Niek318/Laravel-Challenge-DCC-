<?php
require_once  '/vendor/autoload.php';
use Illuminate\Support\Facades\Auth;
//
// $user = auth()->user();
// $user = $user['name'];
// echo $user;

$json = file_get_contents("php://input");
$parsejson = json_encode($json);

$date = json_encode(date("Y-m-d h:i:sa"));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO activity (activity, name, created_at)
VALUES ($json, 'niek', $date)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
