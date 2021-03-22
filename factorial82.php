
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<form action="factorial82.php" method="post">
		factorial: <input type="number" name="facto" size="10">
		<input type="submit" value="Factorizar">
	</form>
    <?php
        $n = $_POST["facto"];
        $factorial = 1;
        if($n<0){
            echo "El número no es válido";
            
        }elseif($n==0){
            echo "El factorial es: 1";
        }
        else{
            for($i=1;$i<=$n;$i++){
                $factorial = $factorial * $i;
            }
            echo "El factorial es: ".$factorial;
        }

    ?>
</body>
</html>