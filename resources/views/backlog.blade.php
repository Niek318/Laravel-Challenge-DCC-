
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    if(isset($_COOKIE["CurrentUser"])){
        $user = $_COOKIE["CurrentUser"];
    } else{
        echo "Not logged in";
    }

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

    $sql = "SELECT activity, created_at FROM activity WHERE name = '$user' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " - You were suggested to: " . $row["activity"]. ". On timedate: " . $row["created_at"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

  </body>
</html>
