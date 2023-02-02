<?php session_start()?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="BEBIDA 1, BEBIDA 2">
  <meta name="description" content="">
  <title>BEBIDA</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="bebidasfestas.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.18.5, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Sobre">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Sobre.html" data-home-page-title="Sobre" class="body" data-lang="pt">
  
  <form method="post" action="segundatela.php" onsubmit="return valida();">
    <section class="u-align-right-xs u-clearfix u-image u-section-1" id="sec-2d90" data-image-width="1600" data-image-height="1000">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="box u-container-style u-grey-80 u-group u-opacity u-opacity-55 u-radius-16 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="bebidaumtxt u-text u-text-default u-text-1"> MARGUERITA</h1>
            <img class="cheiodois u-image u-image-contain u-image-default u-image-1" src="images/cheio.png" alt="" data-image-width="666" data-image-height="375">

            <div class="color">

              <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/metade.png" alt="" data-image-width="300" data-image-height="300">
              <input type="radio" name="um" class="botao1" id="botaoum" value="1"> meio copo</input>
              <input type="radio" name="dois" class="botao2" id="botaodois" value="2"> copo cheio</input>

            </div>

            <h1 class="bebidadoistxt u-text u-text-default u-text-4">SUCO DE LARANJA<br></h1>
            <img class="cheioquatro u-image u-image-contain u-image-default u-image-3" src="images/cheio.png" alt="" data-image-width="666" data-image-height="375">

            <div class="botaoabaixo">

              <img class="u-image u-image-default u-preserve-proportions u-image-4" src="images/metade.png" alt="" data-image-width="300" data-image-height="300">
              <input type="radio" name="tres" class="botao3" id="botaotres" value="3"> meio copo</input>
              <input type="radio" name="quatro" class="botao4" id="botaoquatro" value="4"> copo cheio</input>

            </div>

            <input type="submit" id="btn" onclick="botao()" disabled="disabled" class="botao u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-50 u-btn-1"></input>
          </div>
        </div>
      </div>
    </section>

    
  </form>
</body>

</html>


<script>
  function botao() {
    let bt1 = document.getElementById("botaoum").value;
    let bt2 = document.getElementById("botaodois").value;
    let bt3 = document.getElementById("botaotres").value;
    let bt4 = document.getElementById("botaoquatro").value;

    if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaodois").checked == true)) {
      alert("limite do copo excedido!");
      window.location.reload(false);

    } else if ((document.getElementById("botaotres").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      alert("limite do copo excedido!!");
      window.location.reload(false);

    } else if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      alert("limite do copo excedido!!");
      window.location.reload(false);

    } else if ((document.getElementById("botaodois").checked == true) && (document.getElementById("botaotres").checked == true)) {
      alert("limite do copo excedido!!");
      window.location.reload(false);

    } else if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaotres").checked == true)) {

    } else if ((document.getElementById("botaodois").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      alert("limite do copo excedido!!");
      window.location.reload(false);

    } else {

    }
  }

  function valida() {
    if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaodois").checked == true)) {
      return false;

    } else if ((document.getElementById("botaotres").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      return false;

    } else if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      return false;

    } else if ((document.getElementById("botaodois").checked == true) && (document.getElementById("botaotres").checked == true)) {
      return false;

    } else if ((document.getElementById("botaoum").checked == true) && (document.getElementById("botaotres").checked == true)) {
      return true;

    } else if ((document.getElementById("botaodois").checked == true) && (document.getElementById("botaoquatro").checked == true)) {
      return false;

    }
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<script>
  $(document).ready(function() {
    $('#botaotres').on('input change', function() {
      if ($(this).val() != '') {
        $('#btn').prop('disabled', false);
      } else {
        $('#btn').prop('disabled', true);
      }
    });
  });
  $(document).ready(function() {
    $('#botaoquatro').on('input change', function() {
      if ($(this).val() != '') {
        $('#btn').prop('disabled', false);
      } else {
        $('#btn').prop('disabled', true);
      }
    });
  });
  $(document).ready(function() {
    $('#botaodois').on('input change', function() {
      if ($(this).val() != '') {
        $('#btn').prop('disabled', false);
      } else {
        $('#btn').prop('disabled', true);
      }
    });
  });
  $(document).ready(function() {
    $('#botaoum').on('input change', function() {
      if ($(this).val() != '') {
        $('#btn').prop('disabled', false);
      } else {
        $('#btn').prop('disabled', true);
      }
    });
  });
</script>

<script type='text/javascript'>
  $().ready(function() {
    $('input[type=radio]').click(function() {
      if (!$(this).hasClass('ativo')) {
        $(this).addClass('ativo');
        exit;
      } else {
        $(this).prop('checked', false).removeClass('ativo');

      }
    });
  });
</script>