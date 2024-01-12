<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" id="ano" placeholder="ano">
    <input type="text" id="mes" placeholder="mes">
    <input type="text" id="dia" placeholder="dia">
s
    <button onclick="enviardata()">Verificar data</button>

    <script>
        function enviardata () {
            var ano = document.getElementById('ano').value;
            var mes = document.getElementById('mes').value;
            var dia = document.getElementById('dia').value;

            window.open(`recebedata.php?ano=${ano}&mes=${mes}&dia=${dia}`);
            
        }
    </script>
    
</body>
</html>