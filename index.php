<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Frequence</title>
</head>
<body>
    <h2>Calcule a frequência de Palavras em um bloco de texto</h2>
    <form action="#" method="post">

        <input type="text" name="frase" id="" placeholder="Digite sua frase aqui">
        <button type="submit">Enviar</button>

        <h5> Quantidade de Palavras: </h5>

        <?php 

            $frase = $_POST['frase']; 

            $result = str_word_count($frase);
            echo $result;
        
        ?>


    </form>
</body>
</html>