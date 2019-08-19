
<?php
$host = "ec2-174-129-227-80.compute-1.amazonaws.com";
$user = "hqolsipojtnecl";
$password = "64306f4dd68d73a8a477652e710ede2520086af42fc9e2dca049f2eb1debfab6";
$dbname = "de4bcai2dahkqm";
$port = "5432";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select FirstName from contact.contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
