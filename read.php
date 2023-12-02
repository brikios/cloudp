<?php
$conn = new mysqli("mouadhserver.database.windows.net", "brikios","Med99210046@", "project");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nom, phone FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['nom']} 
              <form action='delete.php' method='post' style='display:inline;'>
                  <input type='hidden' name='phone' value='{$row['phone']}'>
                  <button type='submit'>Delete</button>
              </form>
              </li>";
    }
} else {
    echo "No users found.";
}

$conn->close();
?>
