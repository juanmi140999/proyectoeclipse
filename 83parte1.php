<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplificar</title>
</head>
<body>
    <form action="83parte1.php" method="post">
		numerador: <input type="decimal" name="numerador" size="10">
		denominador: <input type="decimal" name="denominador" size="10">
		<input type="submit" value="Simplificar">
	</form>
    <?php
        $numerador = $_POST["numerador"];
        $denominador = $_POST["denominador"];
        $divisor = 2;
        
        while ($divisor<=$numerador && $divisor<=$denominador){
            while(($numerador % $divisor)==0 && ($denominador % $divisor)==0){
                $numerador = $numerador/$divisor;
                $denominador = $denominador/$divisor;
            }
            $divisor++;
        }
        echo "Fraccion simplificada: ".$numerador."\\".$denominador;
    ?>
</body>
</html>
