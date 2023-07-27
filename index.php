<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA- Compatible" content="lE=edge">
    <meta name="viewport"content="width=device-width, inital-scale=1.0">  
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

<main>
    <h1>Somador de valores</h1>


<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="v1">valor 1</label>
<input type="number"name="v1" id="v1<?=$valor1?>">
<label for="v2">valor 2</label> 
<input type="number"name="v2" id="v2<?=$valor2?>">
<input type="submit"value="Somar">



</main>

<section id="resultado">
    <h2>Resultado da soma</h2>
    <?php
        $soma = $valor1 + $valor2;
        print "<p> A somo entre os valores $valor1 e $valor2 é igual a $soma</p>";
        ?>

</section>
</body>
</html>