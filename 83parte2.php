<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>83</title>
</head>
<body>
    <form action="83parte2.php" method="post">
		Max numero: <input type="decimal" name="numero" size="10">
		<input type="submit" value="primos">
	</form>
    <?php
        $numero = $_POST["numero"];
        if($numero>=2){
            $c=0;
            for($i = 2; $i<=$numero; $i++){
                $divisor = 2;
                $bandera = 0; //es primo
                while($divisor<$i){
                    if(($i % $divisor)==0){
                        $bandera = 1;
                        break;
                    }
                    $divisor++;
                }
                if($bandera == 0){
                    $c++;
                    echo "Numero primo (",$c,")  :",$i,"<br>";
                }
            }
        }else{
            echo "Por definición, un numero primo es un numero natural mayor que uno y solo es divisible por la unidad y por si mismo";
        }
    ?>
</body>
</html>