<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1>
    <br/>
    <fieldset>Calculator

        First operand:
        <input type="text" name="num1"><br/>
        Operator:
        <select name="operator">
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select><br/>
        Second operand:
        <input type="text" name="num2"><br/>
        <button type="submit">Calculate</button>
    </fieldset>
</form>
<h2>Result:</h2>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $operator = $_POST["operator"];
        $num2 = $_POST['num2'];
//        var_dump($num1);
//        var_dump($num2);

        function addition($a, $b)
        {
            global $operator;
            if ($operator === "Addition") {
                $addition = $a + $b;
            }
            return $addition;
        }

        function subtraction($a, $b)
        {
            global $operator;
            if ($operator === "Multiplication") {
                $subtraction = $a - $b;
            }
            return $subtraction;
        }

        function multiplication($a, $b)
        {
            global $operator;
            if ($operator === "Multiplication") {
                $multiplication = $a * $b;
            }
            return $multiplication;
        }

        function division($a, $b)
        {
            global $operator;
            if ($b === 0) {
                throw new Exception("/ by zero");
            } else if ($operator === "Division") {
                $division = $a / $b;
            }
            return $division;
        }
        try {
            var_dump(addition($num1,$num2));
            var_dump(subtraction($num1,$num2));
            var_dump(multiplication($num1,$num2));
            var_dump(division($num1,0));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>
</body>
</html>
