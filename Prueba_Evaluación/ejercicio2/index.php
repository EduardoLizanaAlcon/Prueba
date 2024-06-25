<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="..">Volver</a>

    <form action="" method="post">
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $resultado=0;
            $resultado2=0;
            $numero=$_POST["numero"];

            //Asi es como yo lo he entendido en un principio con el enunciado un bucle que sume todos los numeros que esten entre el numero 1 y el numero que se envia
            for($i=1; $i<=$numero; $i++){
                $resultado = $resultado+$i;
            }
            echo "Resultado1: ".$resultado;
            echo "<br>";


            //pero como habies puesto en los ejemplos no es el mismo resultado y se realizaria asi
            for($i=1; $i<=$numero; $i++){
                if($i<10){
                    $resultado2 = $resultado2+$i;
                }else{
                    $resultado2 = $resultado2 + suma_de_cifras($i);
                }
            }
            echo "Resultado2: ".$resultado2;

        }

        function suma_de_cifras($numero) {
            $suma = 0;

            //Combierto el numero en una cadena de texto
            $numero_str = strval($numero);

        
            // Separo cada caracter
            for ($i = 0; $i < strlen($numero_str); $i++) {
                // lo convierto a numero y lo sumo
                $suma = $suma + intval($numero_str[$i]);
            }
        
            return $suma;
        }
    ?>
</body>
</html>