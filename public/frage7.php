    
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
                    <form class="" id="question7">
                        <h2>Frage 7:</h2><br>
                        <h5>An einem typischen Tag:</h5> 
                        <h5>Wie viele deiner Mahlzeiten oder Snacks enthalten Protein?</h5>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 

                <!-- Image -->
        <img src="images/protein.jpeg" class="img-fluid" alt="" />

        
        
    <div class="form-outline">
    <label class="form-label" for="typeNumber">Nummer eingeben</label>
  <input type="number" id="typeNumber" min="0" class="form-control" /></div><br>
  
  <button type="button" class="btn btn-primary">Absenden</button></div>
 

    </main>
    <footer>
        
    </footer>

    <script src="js/app.js"></script>
</body>



<?php