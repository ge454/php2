<html>
    <head>
        <meta utf="utf8_decode">
        <title> Calculadora Juros </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="p1">
        <h1> Calculadora Juros </h1>
        <form method="GET" action="../php2/" class="p2">
            <label for="num1" >Juros:</label><br>
            <input type="text" name="juros"><br>
            <label for="num1" >Capital:</label><br>
            <input type="text" name="capital"><br>
            <label for="num2">Prazo:</label><br>
            <input type="text" name="prazo"><br>
            <label for="num2">Taxa:</label><br>
            <input type="text" name="taxa"><br>
            <input type="submit" value="Calcular">
            <fieldset style="margin-right: 1000;">                
                <legend>Operações</legend>
                <input type="radio" name="op" value="juros" checked>Juros</input><br>
                <input type="radio" name="op" value="capital">Capital</input><br>
                <input type="radio" name="op" value="prazo" checked>Prazo</input><br>
                <input type="radio" name="op" value="taxa" checked>Taxa</input><br>
            </fieldset>
        </form>
        <?php

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(isset($_GET['juros']) and isset($_GET['capital']) and isset($_GET['prazo']) and isset($_GET['taxa'])){
                    $n1 = $_GET['juros'];
                    $n2 = $_GET['capital'];
                    $n3 = $_GET['prazo'];
                    $n4 = $_GET['taxa'];
            
                    function juros(){
                        return $GLOBALS['n2'] * $GLOBALS['n3'] * $GLOBALS['n4']/100;
                    }

                    function capital(){
                        return $GLOBALS['n1'] / $GLOBALS['n4'] /100 *$GLOBALS['n3'] ;
                    }

                    function prazo(){
                        return $GLOBALS['n1'] * $GLOBALS['n2'];
                    }

                    function taxa(){
                        return $GLOBALS['n1'] /  $GLOBALS['n2'];
                    }
       
                    if($_GET['op'] == 'juros'){
                        echo "<h1> $n2 * $n3 * $n4/100 =" .juros(). "</h1>";
                    } else if ($_GET['op'] ==  'capital'){
                        echo "<h1> $n1 / $n4/100 * $n3 = " .capital(). "</h1>";
                    } else if ($_GET['op'] ==  'prazo'){
                        echo "<h1> $n1 * $n2 =" .prazo(). "</h1>";
                    } else if ($_GET['op'] ==  'taxa'){
                        echo "<h1> $n1 / $n2 =" .taxa(). "</h1>";
                    }
                }
            }

        ?>
    </body>
</html>