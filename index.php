<?php

require __DIR__ . '/tabuada.php';

if (!empty($_POST) && isset($_POST['btn-enviar'])) {
    $resultado = stringOrNumber(initTabuada(getPost('opcao'),getPost('numero1'),getPost('numero2')));
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculadora</title>
</head>

<body>
    <div class="container container-fluid">
        <h1 class="mt-5 text-center">Calculadora com PHP e Jquery mask</h1>
        <form id="fmrIndex" method="post" action="/">
            <div class="mb-3">
                <label for="numero1" class="form-label">Numero 1</label>
                <input type="text" class="form-control numero-mask" id="numero1" value="<?php echo getPost('numero1'); ?>" name="numero1" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Numero 2</label>
                <input type="text" class="form-control numero-mask" id="numero-mask" value="<?php echo getPost('numero2'); ?>" name="numero2" required>
            </div>
            <div class="mb-3">
                <select class="form-select" name = "opcao" id="opcao">
                <option  selected>Escolha uma opção</option>
                    <option value="sub">Subtração</option>
                    <option value="soma">Soma</option>
                    <option value="mult">Multiplicação</option>
                    <option value="div">Divisão</option>
                    <option value="atv">Soma,mult,num1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-enviar">Enviar</button>
            <a href="/" class="btn btn-primary">Limpar</a>
        </form>


        <h1 class="mt-5 text-center">Resultado</h1>
        <div class="mb-3">
            <h2  class="text mt-5">Resultado: <?php echo $resultado ?? 'Não foi processado nada ainda....';?></h2>
        </div>


    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="jquery.mask.js"></script>
    <script src="main.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>