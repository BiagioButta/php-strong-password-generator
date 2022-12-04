<?php
function generaPassword($lenPass)
{
    $lenPass = $_GET['lunghezzaPassword'];
    $filtroCaratteri = $_GET['filtro'];

    $caratteri = [
        'lettere' => 'abcdefghijklmnopqrstuvwxyz',
        'numeri' => '0123456789',
        'simboli' => '!@#$%&+-/\{}[]()?<>='
    ];

    $caratteriScelti = [];

    foreach ($caratteri as $key => $value) {
        if (in_array($key, $filtroCaratteri)) {
            $caratteriScelti[$key] = $value;
        }
    }
    ;

    $result = '';
    while (strlen($result) < $lenPass) {
        $key = array_rand($caratteriScelti);
        $ranvalue = $caratteriScelti[$key];

        $upper_low_case = rand(0, 1);
        if ($ranvalue == $caratteri['lettere'] && $upper_low_case === 0) {
            $randCarattere = $ranvalue[rand(0, strlen($ranvalue) - 1)];
        } else {
            $randCarattere = strtoupper($ranvalue[rand(0, strlen($ranvalue) - 1)]);
        }
        $result .= $randCarattere;

    }
    return $result;

}
;

$passwordGenerata = generaPassword($lenPass);


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
                <div>
                    <?php echo $passwordGenerata; ?>
                </div>
            </div>
        </div>

        <form action="pass.php" method="GET" name="datiPassword">

            <div class="row">
                <div class="col debug"><button type="submit">genera</button></div>
            </div>
            <div class="row debug">
                <div class="col debug">
                    <label for="lunghezzaPassword">Lunghezza password</label>
                    <input type="number" id="lunghezzaPassword" name="lunghezzaPassword" min="4">
                </div>
            </div>
            <div class="row row-cols-1 debug">
                <div class="col debug">
                    <input type="checkbox" id="lettere" name="filtro[]" checked="checked" value="lettere">
                    <label for="lettere">Lettere (a - Z)</label>
                </div>
                <div class="col debug">
                    <input type="checkbox" id="numeri" name="filtro[]" checked="checked" value="numeri">
                    <label for=" numeri">Numeri (0 - 9)</label>
                </div>
                <div class="col debug">
                    <input type="checkbox" id="simboli" name="filtro[]" checked="checked" value="simboli">
                    <label for=" simboli">Simboli !@#$%&+-/\{}[]()?<>=</label>
                </div>

        </form>
    </div>
    </div>
</body>

</html>