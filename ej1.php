<!DOCTYPE html>
<html>
<head>
    <title>Diferencia de edad</title>
</head>
<body>
    <h1>Diferencia de edad</h1>
    
    <?php
    $edad1 = $_POST['edad1'];
    $edad2 = $_POST['edad2'];
    
    func($edad1, $edad2);

    function func($e1, $e2){
        if ($e1 < $e2) {
            echo "La diferencia de edad es de " . $e2 - $e1 . " años.";
        } elseif ($e1 > $e2) {
            echo "La diferencia de edad es de " . $e1 - $e2 . " años.";
        } else {
            echo "No hay diferencia de edad.";
        }
        
    }

    ?>
    
    <form method="POST" action="">
        <label for="edad1">Edad 1:</label>
        <input type="number" id="edad1" name="edad1" value=""><br>
        <label for="edad2">Edad 2:</label>
        <input type="number" id="edad2" name="edad2" value=""><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>