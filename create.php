<?php
$conn = new mysqli("projectmouadh-server", "zwowlyslug","43510T8LNY6Z3314$", "projectmouadh-database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    $sql = "INSERT INTO users (nom,prenom,email,phone) VALUES ('$nom','$prenom', '$email',$tel)";
        if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
        header("Location: delete.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
