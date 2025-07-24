<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Inline Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        input {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin: 5px;
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Simple Inline Calculator</h1>
    <input type="number" id="num1" placeholder="Enter first number">
    <input type="number" id="num2" placeholder="Enter second number">
    
    <button onclick="calculate('+')">Add</button>
    <button onclick="calculate('-')">Subtract</button>
    <button onclick="calculate('*')">Multiply</button>
    <button onclick="calculate('/')">Divide</button>
    
    <h2 id="result">Result: </h2>

    <script>
        function calculate(operator) {
            let num1 = parseFloat(document.getElementById('num1').value);
            let num2 = parseFloat(document.getElementById('num2').value);
            let result;

            // Using assignment operators
            switch (operator) {
                case '+':
                    result = num1;
                   result += num2; // Add
                    break;
                case '-':
                    result = num1;
                    result -= num2; // Subtract
                    break;
                case '*':
                   result  = num1;
                  result  *= num2; // Multiply
                    break;
                case '/':
                    result = num1;
                  result  /= num2; // Divide
                    break;
                default:
                  result  = "Invalid operation";
            }

            document.getElementById('result').innerText = "Result: " + result;
        }
    </script>
</body>
</html>