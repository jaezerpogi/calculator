<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #E2EAF4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .calculator {
        width: 300px;
        background-color: #010101;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    .display {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        padding: 10px;
        font-size: 24px;
        margin-bottom: 10px;
        width: calc(100% - 20px);
        text-align: right;
    }
    
    .row {
        display: flex;
    }
    
    .button {
        flex: 1;
        background-color: #f0f0f0;
        border: none;
        border-radius: 10px;
        padding: 15px;
        margin: 5px;
        font-size: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .button:hover {
        background-color: #d0d0d0;
    }
</style>
</head>
<body>

<div class="calculator">
    <input type="text" class="display" value="" readonly>
    <div class="row">
        <button class="button" onclick="updateDisplay('7')">7</button>
        <button class="button" onclick="updateDisplay('8')">8</button>
        <button class="button" onclick="updateDisplay('9')">9</button>
        <button class="button" onclick="updateDisplay('+')">+</button>
    </div>
    <div class="row">
        <button class="button" onclick="updateDisplay('4')">4</button>
        <button class="button" onclick="updateDisplay('5')">5</button>
        <button class="button" onclick="updateDisplay('6')">6</button>
        <button class="button" onclick="updateDisplay('-')">-</button>
    </div>
    <div class="row">
        <button class="button" onclick="updateDisplay('1')">1</button>
        <button class="button" onclick="updateDisplay('2')">2</button>
        <button class="button" onclick="updateDisplay('3')">3</button>
        <button class="button" onclick="updateDisplay('x')">x</button>
    </div>
    <div class="row">
        <button class="button" onclick="updateDisplay('0')">0</button>
        <button class="button" onclick="updateDisplay('.')">.</button>
        <button class="button" onclick="clearDisplay()">C</button>
        <button class="button" onclick="calculate()">=</button>
    </div>
</div>

<script>
    function updateDisplay(value) {
        document.querySelector('.display').value += value;
    }

    function clearDisplay() {
        document.querySelector('.display').value = '';
    }

    function calculate() {
        document.querySelector('.display').value = 'I Miss You :<';
    }
</script>

</body>
</html>
