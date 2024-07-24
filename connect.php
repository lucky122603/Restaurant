<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelreservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reservation (firstname, lastname, phone, email, branch, types, guests, dates, dateFlexibiliy, fromTime, toTime, request) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssisssss",$firstname,$lastname, $phone, $email, $branch, $types, $guests, $dates, $dateFlexibiliy, $fromTime, $toTime, $request  );

// Set parameters and execute
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$types = $_POST['types'];
$guests = $_POST['guests'];
$dates = $_POST['dates'];
$dateFlexibiliy = $_POST['dateFlexibiliy'];
$fromTime = $_POST['fromTime'];
$toTime = $_POST['toTime'];
$request = $_POST['request'];

if ($stmt->execute()) {
    echo "Reservation made successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();


//  http://localhost/Project/Restaurant/

?>
