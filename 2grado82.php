<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segundo grado</title>
</head>
<body>
    <form action="2grado82.php" method="post">
		A: <input type="number" name="a" size="10">
		B: <input type="number" name="b" size="10">
		C: <input type="number" name="c" size="10">
		<input type="submit" value="Ecuación 2º grado">
	</form>
    <?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $a = intval($a);
    $b = intval($b);
    $c = intval($c);
    $raiz = sqrt(($b*$b)-(4*$a*$c));
    $ecuacion1 = (-$b+$raiz)/(2*$a);
    $ecuacion2 = (-$b-$raiz)/(2*$a);
    
    
    if($raiz<0){
        echo "No tiene solución ya que el discriminante es menor que 0";
    }
    if($raiz==0){
        $ecuacion = -$b/(2*$a);
        echo "X1 = X2= ".$ecuacion;
    }
   
    echo "X1 = ".$ecuacion1;
    echo "<br>";
    echo "X2 = ".$ecuacion2;


?>
</body>
</html>