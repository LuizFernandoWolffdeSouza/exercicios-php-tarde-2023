<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for=""> Informe os graus</label>
        <input type="text" id="graus">
        <br>
        <label for="">Opções:</label>
        <select id="temperatura">
            <option value="1">Celsius para fahreinht</option>
            <option value="2">Fahrenith para celsius</option>
        </select>
        <button onclick="verifica()">Escolher número</button>
    </form>
    <script>
        function verifica() {
            var tempetatura = document.querySelector('#temperatura').value;
            var graus = document.querySelector('#graus').value;

            window.open(`recebegraus.php?temperatura=${tempetatura}&graus=${graus}`)
        }
    </script>

</body>

</html>