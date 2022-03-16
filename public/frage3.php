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
                        <h2>Frage 3:</h2><br>
                        <h3>Wie wichtig ist körperliche</h3>
                        <h3> Aktivität für dich?</h3>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 

                <!-- Image -->
        <img src="/images/gewichte1.webp" class="img-fluid" alt="" />

        
        
        <label for="question1" class="form-label">Bewertung 1 - 5 wenig / viel</label>
    <input type="range" class="form-range" min="0" max="5" step="1" id="question1">  
    <div class="text-center">
  <button type="button" class="btn btn-primary">Absenden</button></div><br>
  <div class="text-center">
  <button type="button" class="btn btn-primary">zurücksetzen</button></div>

    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>
</body>



<?php