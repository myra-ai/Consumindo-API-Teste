<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="path-para-seu-script"></script>
    <title>Consumindo API do github</title>

</head>

<body>


    <div class="container">



        <ul class="list-group mt-3">
            <li class="list-group-item">{{ $apiArray['id']; }}</li>
            <li class="list-group-item">{{ $apiArray['nome']; }}</li>
        </ul>


        <?php
        $arquivo = $apiArray['id'].".txt";
        $conteudo ="Ola ". $apiArray['nome'] ." seja bem vindo(a) a votação!";

        //TENTA ABRIR O ARQUIVO TXT
        if (!$abrir = fopen($arquivo,"w")){
          $retorno = "ERRO AO ABRIR";
        }else{
          $retorno = true;
        }


        //ESCREVE NO ARQUIVO TXT
        if (!fwrite($abrir,$conteudo)){
          $retorno = "ERRO AO ESCREVER";
        }else{
          $retorno = true;
        }
        //FECHA O ARQUIVO
        fclose($abrir);

        


              ?>
   <button type="button" class="btn btn-dark mr-1"><a href="{{ $arquivo;}}">Gerar Documentação</a> </button>
   
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>