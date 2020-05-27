<?php

// Connection to the dataBase

// varaibles for the database connection
$dsn = "mysql:host=localhost;dbname=bakersdozen";
$user = "root";
$passwd = "";

// creating a new PHP DataBase Object
$pdo = new PDO($dsn, $user, $passwd);

// Query the DB for the inforamation on the news cards
$stm = $pdo->query("SELECT * FROM Products");

// Fetch the data for the newscards to be used in the loop
$Products = $stm->fetchAll();