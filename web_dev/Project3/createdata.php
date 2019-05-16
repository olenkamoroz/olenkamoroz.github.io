<?php
include('conn.php');
 ?>
<?php
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Solomiya', 'Hetman', 'solomiya@hetman.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 