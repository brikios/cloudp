<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["phone"])) {
    $conn = new mysqli("projectmouadh-server", "zwowlyslug","43510T8LNY6Z3314$", "projectmouadh-database");

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
