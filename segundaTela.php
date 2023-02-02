<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"  http-equiv="refresh" content="3; URL='qrcode.html'"/>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="segundatela.css">
    <title>CONFIRMADO</title>
</head>
<body>
     PEDIDO CONFIRMADO!!! AGUARDE.....

     <?php
    if (isset($_POST['um']) && (isset($_POST['tres']))) {
      $conexao = fopen("COM3", "w");
      fwrite($conexao, $_POST['um']);
      fwrite($conexao, $_POST['tres']);
     
    } else {

      if (isset($_POST['um'])) {
        $conexao = fopen("COM3", "w");
        fwrite($conexao, $_POST['um']);
        sleep(2);
      }
      if (isset($_POST['dois'])) {
        $conexao = fopen("COM3", "w");
        fwrite($conexao, $_POST['dois']);
        sleep(2);
      }
      if (isset($_POST['tres'])) {
        $conexao = fopen("COM3", "w");
        fwrite($conexao, $_POST['tres']);
        sleep(2);
      }
      if (isset($_POST['quatro'])) {
        $conexao = fopen("COM3", "w");
        fwrite($conexao, $_POST['quatro']);
        sleep(2);
      }
    }
    ?>
</body>

</html>