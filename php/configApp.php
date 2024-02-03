<?php
require_once 'configData.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number']; 
    $email = $_POST['email'];
    $date = $_POST['date']; 

    try {
        global $databaseConnection;
        $conn = $databaseConnection->getConnection();
        
        $stmt = $conn->prepare("INSERT INTO appLog (name, number, email, date) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $number, $email, $date]);

        header("Location: Hospital.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: Hospital.php");
    exit();
}
?>
