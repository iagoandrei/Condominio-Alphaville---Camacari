<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Álbum de Fotos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo_adm_album.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <header id="cabecalho">
      <a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
    </header>
    <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <h1 id="form_title"><b>Álbum de fotos</b></h1>
                </div>    
                <div class="col-md-5 bt">
                    <div class="row justify-content-end">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo"><i class="fas fa-plus-circle"></i>&nbsp Novo álbum</button>
                    </div>
                </div>
            </div>
    </div>   

    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar novo álbum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form method="post" action="#">
                    <div class="custom-file">
                        <input type="file" name="album-file" id="af" class="custom-file-input" >
                        <label for="af" class="custom-file-label">Escolher foto</label>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="t" >Título</label>
                        <input type="text" id="t" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="ta" >Descrição</label>
                        <textarea name="txt-area" id="ta" rows="3" class="form-control" ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>