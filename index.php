
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora IMC</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="shortcut icon" href="img/notes-medical-solid.svg" type="image/x-icon">
</head>
<body>
        <div class="row w-100">
            <div class="col-6 title d-flex justify-content-center align-items-center text-uppercase">
                <h1 class="fw-bold">Calculadora IMC</h1>
            </div>
            <div class="col-6 form d-flex justify-content-center align-items-center">
                <form class="w-100 d-flex flex-column align-items-center justify-content-center" action="index.php" method="POST">
                    <div class="w-50">
                        <label for="massa">Massa(kg): </label><br/>
                        <input type="step" class="w-100" name="m" id="massa" autocomplete="off"><br/><br/>
                    </div>
                    <div class="w-50">
                        <label for="altura">Altura(cm): </label><br/>
                        <input type="step" class="w-100" name="a" id="altura" autocomplete="off"><br/><br/>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3 mb-3 w-50" value="Calcular">
</html>
<?php
    $m = $_POST['m'];
    $a = $_POST['a'];
    $a = $a/100;
    if($m>=0 && $a>=0){
        $imc = $m/($a*$a);
        echo "IMC: $imc <br/>";

        if($imc < 20) {
            echo "<span>Abaixo do peso</span>";
        } else if($imc >= 20 && $imc < 25) {
            echo "<span>Normal</span>";
        } else if($imc >= 25 && $imc < 30) {
            echo "<span>Sobrepeso</span>";
        } else if($imc >= 30 && $imc < 40) {
            echo "<span>Obesidade</span>";
        } else if($imc >= 40) {
            echo "<span>Obesidade mórbida</span>";
        }

    } else {
        echo "<span>Valor inválido.</span>";
    }
?>
<html>
                </form>
            </div>
        </div>
</body>
</html>