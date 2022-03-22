

<?php 
        session_start();
        session_destroy();
       

?>
 <?php include 'php/data-collector.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                    <!-- Text-->
                    <form class="" id="question2">
                        <h2>Frage 2:</h2><br>
                        <h3>Nimmst du</h3>
                        <h3>Nahrungsergänzungsmittel?</h3><br>
            <div class="text-fluid">

                <!-- Image -->
        <img src="images/Nahrungsergänzung.png" class="img-fluid" alt="" />

        <form action="frage3.php" method="post" onsubmit="return validateRadio('single-choice');">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">
                Nein
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">
                Ja
            </label>
        </div>

        <input type="hidden" name="lastPageID" value="frage3">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Absenden</button>
        <p class="spacer"></p>
      </form>
        

    </main>
    <footer>
        
    </footer>

   

    <script src="js/app.js"></script>
</body>
</html>

<?php
