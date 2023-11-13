<!DOCTYPE html>
<html>
<head>
    <title>Figura</title>
</head>
<body>
    <h1>Figura</h1>
    
    <?php

        $caracter = $_POST['car'];
        $numero = $_POST['num'];
        

        function figura($num, $car) {
            $contador = 0;
            $suma = 1;
            while ($contador < $num) {
                for ($i=0; $i < $suma; $i++) { 
                    echo $car;
                }
                echo "<br>";
                $contador++;
                $suma+=2;
            }
            $suma-=4;
            $contador = 0;
            while ($contador < $num) {
                for ($i=0; $i < $suma; $i++) { 
                    echo $car;
                }
                echo "<br>";
                $contador++;
                $suma-=2;
            }
        }

        figura($numero, $caracter);

    ?>
    
    <form method="POST" action="">
        <label for="car">Caracter:</label>
        <input type="text" id="car" name="car" value=""><br>
        <label for="num">Numero:</label>
        <input type="number" id="num" name="num" value=""><br>
        
        <input type="submit" value="Convertir">
    </form>
</body>
</html>