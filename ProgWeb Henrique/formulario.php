<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action= "ler_dados.php" method="POST"> <!--SE FOR POST NAO IRIA DAR CERTO-->

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" id="idade"><br>

        <input type="radio" id="html" name="language" value="HTML">HTML<br>
        <input type="radio" id="css" name="language" value="CSS">CSS<br>
        <input type="radio" id="javascript" name="language" value="JAVASCRIPT">JAVASCRIPT<br>

        <!--CHECKBOX TIPO 1-->

        <input type="checkbox" name="ve1" value="Bike"> <br>
        <input type="checkbox" name="ve2" value="Carro"> <br>
        <input type="checkbox" name="ve3" value="Barco"> <br>

        <!--CHECKBOX TIPO 2-->

        <input type="checkbox" name="fruta[]" value="maca"> Maca <br>
        <input type="checkbox" name="fruta[]" value="abacaxi"> Abacaxi <br>
        <input type="checkbox" name="fruta[]" value="melancia"> Melancia <br>
        <input type="checkbox" name="fruta[]" value="goiaba"> Goiaba <br>
        <input type="checkbox" name="fruta[]" value="laranja"> Laranja <br>
        <input type="checkbox" name="fruta[]" value="pera"> Pera <br>
        <input type="checkbox" name="fruta[]" value="melao"> Melao <br>
        

        <!--DATA-->
        <input type="submit" value="Salvar">


    </form>

    
</body>

</html>