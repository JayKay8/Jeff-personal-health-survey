<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'php/data-collector.php'; ?>
<?php require "include/head.php" ?>
</head>
<body>
    <header>
    <?php require "include/header.php" ?>
    </header>
    
    <main>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
                <div class="col-9">
                    
                    <form class="" id="auswertung">
                        <h2>Auswertung wie gesund bist du?</h2><br>
                        <h2>Danke fürs mitmachen</h2>
                <div class="text-fluid">

                <?php
                    echo "<p class= 'final-feedback'>" . "You are healthy!" . "</p>";
                ?>
    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>

    <script src="js/app.js"></script>
</body>
</html>


<?php