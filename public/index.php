<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "include/head.php" ?>
</head>

<body>
    <header>
        <?php include "include/header.php"; ?>
    </header>
    <main>
    <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <!-- Text-->
                    <form class="" id="intro">
                        <h1>Umfrage zu "Ernährung, Fitness und Sport"</h1><br>
                        <h2>10 Fragen zu deinem Körperlichen Wohlbefinden</h2><br>
                        <h3>Willkommen zu unserem Fragebogen!</h3>
                        <div class="text-center">

                <!-- Image -->
        <img src="/images/health.jpg" class="img-fluid" alt="" />

        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <!-- Text-->
                    <form class="" id="intro">
                        <h4>Nehmen sie sich ein paar Minuten Zeit um die Fragen zu beantworten</h4><br>
                        <h4>Beginnen wir mit Frage 1</h4><br>
                        <h2>Wie Gesund bist du?</h2>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 
        
        <label for="question1" class="form-label">Bewertung 1 - 5</label>
    <input type="range" class="form-range" min="0" max="5" step="1" id="question1">  
    <button type="button" class="btn btn-primary">Absenden</button>  

    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>
</body>



<?php