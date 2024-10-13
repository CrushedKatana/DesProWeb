<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 
$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Processed Input: " . $input . "<br>";
    echo "Valid Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
} else {
    echo "Processed Input: " . $input . "<br>";
    echo "Invalid Email!";
}
?>
