<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>81</title>
    
    <style type="text/css">
        input[type=text], input[type=submit], select{
            text-aling: center;
            border-radius: 10px;
            border: 1px solid #39c;
        }
    </style>
</head>
<body>
    <?php 
        $numero1 = "";
        $numero2 = "";
        $suma    = "";
        $mensaje = "";
        
        
        if (isset ($_POST['subsumar'])){
            $numero1 = $_POST['txtn1'];
            $numero2 = $_POST['txtn2'];
            if (is_numeric($numero1) && is_numeric($numero2)){
                $suma = $numero1 + $numero2;
            }else{
                $numero1 = "";
                $numero2 = "";
                $suma    = "";
                $mensaje = "";
                $mensaje = "Datos incorrectos";
            }
        }
    ?>
    <form action="81.php" method="post">
    	Numero 1:  <input type="text" name="txtn1" size="10" value="<?php echo $numero1; ?>">
    	Numero 2:  <input type="text" name="txtn2" size="10" value="<?php echo $numero2; ?>">
    	Resultado: <input type="text" name="txtr" size="10" value="<?php echo $suma; ?>" disabled/>
    	Mensaje:   <input type="text" name="txtr" size="15" value="<?php echo $mensaje; ?>" disabled/>
    			   <input type="submit" value="sumar" name="subsumar">
    </form>
</body>
</html>