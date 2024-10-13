<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); // This escapes HTML characters
echo "Processed Input: " . $input;
?>