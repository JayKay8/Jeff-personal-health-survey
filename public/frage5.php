


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
                <div class="col-2"></div>
                <div class="col-8">
                    <!-- Text-->
                    <form class="" id="question5">
                        <h2>Frage 5:</h2><br>
                        <h5>Hast du das Gefühl, zu wenig, genügend oder zu viel zusätzliche körperliche Aktivitäten betreibst</h5>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 

                <!-- Image -->
        <img src="images/runners.jpeg" class="img-fluid" alt="" />

        
        
        <label for="question1" class="form-label">Bewertung 1 - 5  zu wenig / zu viel</label>
    <input type="range" class="form-range" min="0" max="5" step="1" id="question1">  
    <div class="text-center">
  <button type="button" class="btn btn-primary">Absenden</button></div><br>
 

    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>
    
    <script src="js/app.js"></script>
</body>



<?php