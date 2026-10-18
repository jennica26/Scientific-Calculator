<?php
$result = "";

if(isset($_POST['calculate'])) {
    $expression = $_POST['expression'];

    // Replace symbols for PHP evaluation
    $expression = str_replace('÷', '/', $expression);
    $expression = str_replace('×', '*', $expression);

    try {
        eval('$result = ' . $expression . ';');
    } catch(Exception $e) {
        $result = "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Calculator</title>
    css/design.css
</head>
<body>

<div class="calculator">

    <h2>Scientific Calculator</h2>

    <form method="POST">
        <input type="text" name="expression" id="display"
        value="<?php echo isset($_POST['expression']) ? $_POST['expression'] : ''; ?>" readonly>

        <div class="buttons">

            <button type="button" onclick="addValue('1')">1</button>
            <button type="button" onclick="addValue('2')">2</button>
            <button type="button" onclick="addValue('3')">3</button>
            <button type="button" onclick="addValue('4')">4</button>

            <button type="button" onclick="addValue('5')">5</button>
            <button type="button" onclick="addValue('6')">6</button>
            <button type="button" onclick="addValue('7')">7</button>
            <button type="button" onclick="addValue('8')">8</button>

            <button type="button" onclick="addValue('9')">9</button>
            <button type="button" onclick="addValue('0')">0</button>
            <button type="button" onclick="addValue('+')">+</button>
            <button type="button" onclick="addValue('-')">−</button>

            <button type="button" onclick="addValue('*')">*</button>
            <button type="button" onclick="addValue('/')">/</button>

            <button type="button" onclick="addValue('sqrt(')">√</button>
            <button type="button" onclick="addValue('pow(')">xʸ</button>
            <button type="button" onclick="addValue('sin(')">sin</button>
            <button type="button" onclick="addValue('cos(')">cos</button>

            <button type="button" onclick="addValue('tan(')">tan</button>
            <button type="button" onclick="addValue('log(')">log</button>
            <button type="button" onclick="addValue('%')">%</button>
            <button type="button" onclick="addValue('(')">(</button>

            <button type="button" onclick="addValue(')')">)</button>
             <button type="button" onclick="clearDisplay()">C</button>

            <button type="submit" name="calculate" class="equals">=</button>

        </div>
    </form>

    <div class="result">
        <?php
        if($result !== ""){
            echo "Result: " . $result;
        }
        ?>
    </div>

</div>

<script>
function addValue(value) {
    document.getElementById("display").value += value;
}

function clearDisplay() {
    document.getElementById("display").value = "";
}
</script>

</body>
</html>