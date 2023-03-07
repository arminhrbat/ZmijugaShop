<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

Flight::route('/', function(){
    // Set database connection parameters
    

    // Connect to the database using PDO
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Prepare and execute a query to retrieve users' name and lastname
    $stmt = $pdo->prepare('SELECT name, lastname FROM korisnici');
    $stmt->execute();

    // Fetch the results and store them in a variable
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the results
    foreach ($results as $row) {
        echo $row['name'] . ' ' . $row['lastname'] . '<br>';
    }
});

Flight::start();

?>
