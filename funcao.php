<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de função</title>

</head>
<body>
    <form action="" method="post">
    <input type="text" name="nome">qual é o seu nome ?
    <button type="submit">enviar</button>
    </form>

<?php
function bemVindo($exemplo){
    return "seja bem vindo $exemplo, seu retardado";
}
$nome = $_POST['nome'];

echo bemVindo($nome);

?>
    
</body>
</html>



