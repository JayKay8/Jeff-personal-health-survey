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
                        <h3>Umfrage zu "Ernährung, Fitness und Sport"</h3><br>
                        <h4>10 Fragen zu deinem Körperlichen Wohlbefinden</h4><br>
                        <h4>Willkommen zu unserem Fragebogen!</h4>
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
                        <h3>Wie Gesund bist du?</h3>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 
        
        <label for="question1" class="form-label">Bewertung 1 - 5 nicht gesund / sehr gesund</label>
    <input type="range" class="form-range" min="0" max="5" step="1" id="question1">  
    <div class="text-center">
  <button type="button" class="btn btn-primary">Absenden</button></div><br>
  <div class="text-center">
  <button type="button" class="btn btn-primary">Zurücksetzen</button></div><br>

    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>
</body>



<?php