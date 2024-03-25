<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
            echo "Formatação de números Reais em PHP<br><br>";

            $fNum = 14579.23;
            echo "O meu novo salário derá de R$".number_format($fNum,2,",",".")."<br>";




        ?>
        </div>
    </body>
</html>