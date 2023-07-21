<?php
ob_start();
session_start();
include "includes/dbh.php";
?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aristo</title>
    <style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    .card {
        flex: 1 0 calc(33.33% - 20px); /* Adjust the width of each card based on the number of cards per row */
        margin: 10px;
        display: flex;
        flex-direction: column;
    }
    .card-content {
        flex: 1;
        overflow: hidden;
    }
</style>
</head>


<body>