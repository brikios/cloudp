<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["phone"])) {
    $conn = new mysqli("projectc.database.windows.net", "projectc-admin","HB51BC1T0OAYZ032$", "projectc");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $phone = $_POST["phone"];

    $sql = "DELETE FROM users WHERE phone = '$phone'";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
        echo "<br /><a href='index.html'>return</>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
