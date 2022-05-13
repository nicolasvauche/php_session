<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Lire message - PHP Session</title>

        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header class="app-header">
            <h1>Lire message</h1>
            <h2>PHP Session</h2>
        </header>

        <main class="app-main">
            <?php session_destroy(); ?>
            <?php //unset($_SESSION['user']); ?>
        </main>

        <footer class="app-footer">

        </footer>
    </body>
</html>
