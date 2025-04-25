<?php
$host = "php-db.c94scyqg8dxv.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "szY-giB9dKoi8mD)gQFDjT|9>lEW";
$database = "devops";

// Connect
$conn = new mysqli($host, $username, $password, $database);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM attendance");

echo "<h2>Attendance Table</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Age</th><th>Attendance</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['attendance_status']}</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>
