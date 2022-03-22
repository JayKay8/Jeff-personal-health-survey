<?php 
        session_start();
        session_destroy();
?>

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
                <div class="col-2"></div>
                <div class="col-8">
                    <!-- Text-->
                    <form class="" id="question1">
                        <h4>Willkommen zu unserem Fragebogen über ihre Ernahrung ihren Fitnessstand und sportlichkeit</h4><br>
                        
                    
                    <div class="text-center">
                </div>                              
            </div>
        </div> 

                <!-- Image -->
                <img src="images/health.jpg" class="img-fluid" alt="" /><br>
       

        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <!-- Text-->
                    <form class="" id="intro">
                        <h5>Nehmen sie sich ein paar Minuten Zeit um die Fragen zu beantworten</h5><br>
                        <h4>Beginnen wir mit Frage 1:</h4><br>
                        <h4>Wie Gesund bist du körperlich?</h4>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 
        
        <form action="frage2.php" method="post" onsubmit="return validateQuestion('range-slider');">
        <p class="instruction"></p>

        <div class="row flex-nowrap">
            <div class="col">
              <p>Ungesund</p>
            </div>
            <div class="col" style="text-align: center;">
              <p>mittelmässig</p>
            </div>
            <div class="col" style="text-align: right;">
              <p>Sehr gesund</p>
            </div>
        </div>

        <input type="range" name="range-slider" class="form-range" min="0" max="5" step="1" id="range-slider" onchange="sliderChanged();">
        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning">Benutze den Slider</p>
        <button type="submit" class="btn btn-primary">Absenden</button>
        <p class="spacer"></p>
      </form>



    </main>
    <footer>
   
    </footer>
    
    
    <script src="js/app.js"></script>
</body>
</html>


