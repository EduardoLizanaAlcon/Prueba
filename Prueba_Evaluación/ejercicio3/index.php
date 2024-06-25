<a href="..">Volver</a>

<?php
function cerosfin($array) {
    $array2 = [];
    $ContadorCeros = 0;

    // Recorro el array para obtener cada registro por separado
    foreach ($array as $a) {
        // Si el registro coincide con 0 sumo uno al contador de los contrario lo guardo en otro array
        if ($a === 0) {
            $ContadorCeros++;
        } else {
            $array2[] = $a;
        }
    }

    // Recorro el contador de 0 y registro su equivalencia en el nuevo array
    for ($i = 0; $i < $ContadorCeros; $i++) {
        $array2[] = 0;
    }

    echo "<h1>Original</h1>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<h1>Corregido</h1>";
    echo "<pre>";
    print_r($array2);
    echo "</pre>";
}


//Si efectivamente ahi mas información que añadir se llama a esta función
function agregarElementos($valores, &$array) {
    //Se se separa por comas
    $nuevos_valores = explode(",", $valores);
    //Se recorre el array creado con las nuevas opciones se pasa a numero si se puede y se añade al array por defecto
    foreach ($nuevos_valores as $valor) {
        $valor = trim($valor); 
        if ($valor === "0" || is_numeric($valor)) {
            $array[] = (int)$valor;
        } else {
            $array[] = $valor;
        }
    }
}

//Datos iniciales
$arrayFinal = [false, 1, 0, 1, 2, 0, 1, 3, "a"];

//Aqui compruebo si ahi mas información que añadir al array
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nuevos_valores'])) {
    $nuevos_valores = $_POST['nuevos_valores'];
    agregarElementos($nuevos_valores, $arrayFinal);
}

cerosfin($arrayFinal);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese valores separados por coma</label>
        <input type="text" name="nuevos_valores">
        <input type="submit" value="Añadir al array">
    </form>
    <a href="../ejercicio3/">Eliminar array</a>
</body>
</html>
