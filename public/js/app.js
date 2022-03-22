function validateCheckboxes(){
    // Sammeln alles Werte der ausgewählten (checked) Checkboxen.
    // CSS Selektor (Bento-Box)
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked'); 

    for (let i = 0; i < checkboxes.length; i++) {
        array.push(checkboxes[i].value); // value ist ein String
    }


    // Falls keine Checkbox gewählt wurde ist array === []
    if (array.lenght === 0) {
        setWarning("Bitte wähle min eine Checkbox aus")
        return false; // Bei false wird der weitere Submit gestoppt.
    }
        //checkboxen wurden gewählt setze liste in ein hidden inputfeld
        //id="checkboxValues"
        //value muss ein String sein, also muss array String 
        document.getElementById("checkboxValues").value = array.toString();
}






function validateQuestionMinimal() {
    let inputElement = document.getElementById("range-slider");
    let value = inputElement.value;


if (!value) {
    setWarning("Bitte gib einen Wert ein");
    return false;
    }
}

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle aus, bevor du weitergehst.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        
        if (!value) {
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}


function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}


function validateRadio(radioName){

    let radioButtons = document.getElementsByName(radioName);
    for (let i = 0; i < radioButtons.length; i++){
        let radioBtn = radioButtons[i];

        if (radioBtn.checked == true) {
            return true;
        }


    }
    setWarning("Bitte wähle eine Option");
    return false; 
}
