<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:green;
        }
    </style>
</head>
<body>



<label>Escolha um número:</label>
<form action="recebedesafio.php" method="GET">
    <select id="tabuada">
        <option value="valor1">1</option>
        <option value="valor2">2</option>
        <option value="valor3">3</option>
        <option value="valor4">4</option>
        <option value="valor5">5</option>
        <option value="valor6">6</option>
        <option value="valor7">7</option>
        <option value="valor8">8</option>
        <option value="valor9">9</option>
        <option value="valor10">10</option>
    </select>
    </form>
    
    <br><br>
    <button onclick="verificart()">Verificar tabuada</button>

    <script>
        function verificart() {
            var tabuada = document.getElementById("tabuada").value;
            window.open(`recebedesafio.php?tabuadas=${tabuada}`)
            
        }

    </script>
    
    

    
    
</body>
</html>