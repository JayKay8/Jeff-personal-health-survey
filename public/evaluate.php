<?php

$totalPoints = 0;

if (isset($_SESSION['index'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['index'];

    // DEVONLY
    echo "$post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['range-slider'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion1 = $post['range-slider']; 

        // DEVONLY
        echo "$valueQuestion1 = $valueQuestion1<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion1 = intval($valueQuestion1); 

        if ($valueQuestion1 > 3) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
        echo "$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}


//question 4------------------------------------------------

if(isset($SESSION['question4'])) {
    $post = $_SESSION['question4'];

    if(isset($post['question4'])){
    $checkboxValues = $post['checkboxValues'];
    
    $array = explode(',' , $checkboxValues);

    echo "<pre>";
    print_r($array);
    echo "<pre";

}

}
