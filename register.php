<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Name = $_POST['Name'];
    $Blood_Group = $_POST['Blood_Group'];
    $Date = $_POST['Date'];
    $Phone_Number = $_POST['Phone_Number'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];

    
    $sql = "INSERT INTO register (Name, Blood_Group, Date, Phone_Number, Email, Address)
            VALUES ('$Name', '$Blood_Group', '$Date', '$Phone_Number', '$Email', '$Address')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
