<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer grado</title>
</head>
<body>
    <form action="factorial82.php" method="post">
		A: <input type="number" name="a" size="10">
		B: <input type="number" name="b" size="10">
		<input type="submit" value="Ecuación 1º grado">
	</form>
    <?php 
    $a = $_POST["a"];
    $b = $_POST["b"];
    
    if($a>0){
        $x = -$b/$a;
        echo $x;
    }elseif($a == 0){
        echo "indefinido";
    }else{
        echo "infinito";
    }
    ?>
</body>
</html>