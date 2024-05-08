<?php
error_reporting(E_ALL); // Alle Fehler anzeigen
ini_set('display_errors', 'On'); // Fehler im Browser anzeigen
ini_set('log_errors', 'On');
ini_set('error_log', 'php-errors.log');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <script src="assets/js/bootstrap.bundle.js" ></script>
    <title><?= $title; ?></title>
</head>
<body>


<?php
