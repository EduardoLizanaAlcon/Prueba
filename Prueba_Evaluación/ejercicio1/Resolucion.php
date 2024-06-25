<a href="index.php">Volver</a>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
        $IMC = $peso / ($altura * $altura);
        $IMC = number_format($IMC, 2); // Formatear a 2 decimales
        echo "Tu Índice de Masa Corporal es: $IMC";
    } else {
        echo "Por favor, introduce valores válidos para peso y altura.";
    }

    echo "<br>";


//1º metodo
    // if($IMC <= 18.5){
    //      echo "Infrapeso";

    // }else if($IMC <= 25.0){
    //      echo "Normal";

    // }else if($IMC <= 30.0){
    //      echo "Sobrepeso";

    // }else{
    //      echo "Obeso";

    // }


//2º metodo optimizado

    switch (true) {
        case ($IMC <= 18.5):
            echo "Infrapeso";
            break;
        case ($IMC <= 25.0):
            echo "Normal";
            break;
        case ($IMC <= 30.0):
            echo "Sobrepeso";
            break;
        default:
            echo "Obeso";
            break;
    }
}
?>