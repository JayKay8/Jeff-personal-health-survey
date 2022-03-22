
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
                    <form class="" id="question4">
                        <h2>Frage 4:</h2><br>
                        <h3>Welche zusätzliche körperliche</h3>
                        <h3> Aktivität betreibst du am meisten?</h3>
                    <div class="text-center">
                </div>                              
            </div>
        </div> 

                <!-- Image -->
        <img src="images/rennen.jpeg" class="img-fluid" alt="" />
        
    <form action="frage4.php" method="post" onsubmit="return validateCheckboxes();">

        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q1" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">keine zusätzlichen</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q2" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Gehen</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q3" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Tanzen</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q4" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Joggen</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q5" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Gewichte heben</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q6" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Schwimmen</label></div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q7" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Team Sport</label></div> 
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="q8" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Andere</label></div>


  <div class="form-outline">
  <input type="text" id="typeText" class="form-control" />
  <label class="form-label" for="typeText"></label></div>

  <div class="text-center">
  <input type="hidden" name="lastPageID" value="question4">    
  <p id="validation-warning" class="warning"></p>
  <button type="button" class="btn btn-primary">Absenden</button></div><br>
</form>

       
    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>

    <?php include "include/background.php"; ?>

    <script src="js/app.js"></script>
</body>



<?php