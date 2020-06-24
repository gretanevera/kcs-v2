function getInputIntValueFromElementById(elementId) {
    var inputObject = document.getElementById(elementId);
    var inputValue = inputObject.value;
    alert(inputValue);
    return inputValue;

}

function sumUpToNumbers(firstNumber, secondNumber = 0) {
    var result = Number(firstNumber) + Number(secondNumber);
    return result;
}

function writeTextByElementId(textToInsert = '', idName) { 
    // var textToInsert = sumUpToNumbers(20, 9);
    document.getElementById(idName).innerHTML = textToInsert;
}


function writeTextToConsole(textToConsole = 'error nothing is defined') {
    console.log(textToConsole)
}
function mainFlow() {
    var firstInputValue = getInputIntValueFromElementById('first-number');
    var secondInputValue = getInputIntValueFromElementById('second-number');
    var summedNumber = sumUpToNumbers(firstInputValue, secondInputValue);
    console.log(summedNumber)
    writeTextByElementId( summedNumber , 'sum-up-result')
    writeTextToConsole('Success!')
}
