<!DOCTYPE html>
<html>
<head>
    <title>Numeros romanos</title>
</head>
<body>
    <h1>Numeros romanos</h1>
    
    <?php
    $num = $_POST['num'];
    $rom = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'];

    func($num, $rom);

    function func($n1, $r1){
        $error = "Introduce numero valido";
        if ($n1 <= 10) {
            return $r1[$n1-1];
        }    
         else {
            return $error;
        }
    }

    
    
    ?>
    
    <form method="POST" action="">
        <label for="num">Numero del 1 al 10:</label>
        <input type="number" id="num" name="num" value=""><br>
        
        <input type="submit" value="Convertir">
    </form>
</body>
</html>