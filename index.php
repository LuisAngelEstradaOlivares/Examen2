<!DOCTYPE html>
<html>

<head>
    <title>ASCII Table</title>
</head>

<body>

<h2>ASCII Table</h2>

<form>
    <label for="number">Ingrese un número del 1 al 20:</label>
    <input type="number" id="number" min="1" max="20" required>
    <input type="button" value="Mostrar Carácter ASCII" onclick="showAsciiCharacter()">
</form>

<p id="result"></p>

<script>
    function showAsciiCharacter() {
        var inputNumber = document.getElementById("number").value;
        var decimalValue = parseInt(inputNumber) + 31; // Ajustar el rango a partir del espacio (32)

        if (decimalValue >= 32 && decimalValue <= 126) {
            var asciiCharacter = String.fromCharCode(decimalValue);
            document.getElementById("result").innerHTML = "El carácter ASCII correspondiente es: " + asciiCharacter;
        } else {
            document.getElementById("result").innerHTML = "Por favor, ingrese un número del 1 al 20.";
        }
    }
</script>

</body>

</html>
