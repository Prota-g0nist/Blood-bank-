<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Name = $_POST['Name'];
    $Blood_Group = $_POST['Blood_Group'];
    $Date = $_POST['Date'];
    $Amount_of_blood = $_POST['Amount_of_blood'];
    $Address = $_POST['Address'];
    $Phone_Number = $_POST['Phone_Number'];

    
    $sql = "INSERT INTO Blood_request (Name, Blood_Group, Date, Amount_of_blood, Address,Phone_Number)
            VALUES ('$Name', '$Blood_Group', '$Date', '$Amount_of_blood', '$Address','$Phone_Number')";

    if ($conn->query($sql) === TRUE) {
        echo "Request successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
