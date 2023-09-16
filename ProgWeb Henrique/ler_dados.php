<?php
// Obtendo dados do formulario - pegando os dados do formulario
// $_GET[]
// $_POST[]
// $_REQUEST[] - obtem independente da forma

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$ling = $_POST['language'];

//checkbox1 
/*
if (isset ($_POST['ve1'])){
    $ve1 = $_POST['ve1'];
}else{
    $ve1 = '';
}

if (isset ($_POST['ve2'])){
    $ve2 = $_POST['ve2'];
}else{
    $ve2 = '';
}

if (isset ($_POST['ve3'])){
    $ve3 = $_POST['ve3'];
}else{
    $ve3 = '';
}

echo "Ve1: $ve1 Ve2: $ve2 Ve3: $ve3  <hr>";

*/

// parte do checkbox 2

if (isset($_POST['fruta'])){
    $frutas = $_POST['fruta'];
}

for ($z=0; $z < count ($frutas); $z++){
echo "Fruta: $frutas[$z] <br>";
}


echo "Seu nome é: $nome e voce tem $idade anos e voce adora $ling <hr>";

if ($idade >= 18) {
    echo "pode beber";
}else{
    echo "nao pode beber";
}

?>