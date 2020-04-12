<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciando</title>
</head>
<body>
    <?php echo "hello world!"; ?><br><br>
    
 <form action="" method="get" >
 <input type="text" name="action">
 <div class="form-group">
    <label>Example select</label>
    <select class="form-control" name="exampleFormControlSelect1" id="exampleFormControlSelect1">
      <option value="a">1</option>
      <option value="b">2</option>
      <option value="c">3</option>
      <option value="d">4</option>
      <option value="e">5</option>
    </select>
 <button type="submit">enviar</button>
 </form>
 <hr>

 
 <?php

$teste = $_GET['action'];
$teste2 = $_GET['exampleFormControlSelect1'];


echo "Você escoheu $teste E $teste2";

 ?>

    
</body>
</html>