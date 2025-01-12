<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone_Number = $_POST['Phone_Number'];
    $Message = $_POST['Message'];


    $sql = "INSERT INTO Contact (Name,Email, Phone_Number , Message)
            VALUES ('$Name', '$Email','$Phone_Number', '$Message')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
