<?php
$conn = new mysqli("projectmouadh.database.windows.net", "brikios","med99210046@", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nom, phone FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['nom']} (Phone: {$row['phone']})</li>";
    }
} else {
    echo "<li>No users found.</li>";
}

$conn->close();
?>

