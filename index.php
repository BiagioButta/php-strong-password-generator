<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-1 debug">
            <div class="col debug">
                <div>Password generata</div>
            </div>
            <div class="col debug"><button>genera</button></div>
        </div>
        <div class="row debug">
            <label for="lunghezzaPassword">Lunghezza password</label>
            <div class="col debug"><input type="number" id="lunghezzaPassword"></div>
        </div>
        <div class="row row-cols-1 debug">
            <div class="col debug">
                <input type="checkbox" id="lettereMaiuscole">
                <label for="lettereMaiuscole">Lettere maiuscole (A - Z)</label>
            </div>
            <div class="col debug">
                <input type="checkbox" id="lettereMinuscole">
                <label for="lettereMinuscole">Lettere minuscole (a - z)</label>
            </div>
            <div class="col debug">
                <input type="checkbox" id="numeri">
                <label for="numeri">Numeri (0 - 9)</label>
            </div>
            <div class="col debug">
                <input type="checkbox" id="simboli">
                <label for="simboli">Simboli !@#$%&+-/\{}[]()?<>=</label>
            </div>
        </div>
    </div>
</body>

</html>