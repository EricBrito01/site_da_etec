<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

       titulo: <input type="text" name="box_titulo" id=""><br>
       Data: <input type="date" name="box_data" id=""><br>
       Local: <input type="text" name="box_local" id=""><br>
       Informacoes: <textarea name="box_informacoes" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
        <h2><?php echo $msg?></h2>

    </form>
</body>
</html>