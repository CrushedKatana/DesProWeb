<?php
$host = "MSI\MSSQLSERVER4";
$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => ""); // Replace with your credentials
$conn = sqlsrv_connect($host, $connInfo);

if ($conn) {
    echo "Connection successful.<br />";
} else {
    echo "Connection failed.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>

