<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP n° 1 (Web 2)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form class="form" action="index.php" method="GET">
        <p>Ingrese Numero:</p>
        <input type="number" name="number" placeholder="Numero entero.">
        <button type="submit">Calcular</button>
    </form>
    <?php
    function primeCheck($number){
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return false;
        }
        return true;
    }
    function generarTabla($number){
        echo "<table class='table'>";
        for($x = 0; $x <= $number; $x++){
            echo "<tr>";
            for($y=0; $y <= $number; $y++){
                $result = $x * $y;
                if(($x == 0) && ($y == 0)){
                    $result = 0;
                    echo "<td class='destacado'>$result</td>";
                }
                if(($x == 0) && ($y != 0)){
                    $result = $y;
                    echo "<td class='destacado'>$result</td>";
                }
                if(($y == 0) && ($x != 0)){
                    $result = $x;
                    echo "<td class='destacado'>$result</td>";
                } 
                if(($x != 0) && ($y != 0)){
                    if(str_contains(strval($result), '43')){
                        echo "<td class='cuatrotres'>$result</td>";
                    }else if(primeCheck($result)){
                        echo "<td class= 'primo'>$result</td>";
                    }else{
                        echo "<td class='row'>$result</td>";
                    }
                }
            }
           echo "</tr>";
        };
        echo "</table>";
    }
    if(isset ($_GET['number'])){
        generarTabla($_GET['number']); 
    }
    ?>
</body>
</html>