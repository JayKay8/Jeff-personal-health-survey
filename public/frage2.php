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
                <div class="col-1"></div>
                <div class="col-9">
                    <!-- Text-->
                    <form class="" id="question2">
                        <h2>Frage 2:</h2><br>
                        <h3>Nimmst du</h3>
                        <h3>Nahrungsergänzungsmittel?</h3><br>
                    <div class="text-fluid">

                <!-- Image -->
        <img src="/images/Nahrungsergänzung.png" class="img-fluid" alt="" />


        <div class="question2">
  <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">Ja</label>
</div>
        <div class="question2">
  <input class="form-check-input" type="radio" name="question2" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">Nein</label>
  </div>
  <button type="button" class="btn btn-primary">Absenden</button>


    </div> 
        

    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>
</body>



<?php