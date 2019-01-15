<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checklist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo_adm_album.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body style="background-color: #ededed;">
    <header id="cabecalho">
      <a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
    </header>
    <div class="container-fluid z">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h1 id="form_title"><b>Atividade</b></h1>
            </div>    
            <div class="col-md-5 bt">
                <div class="row justify-content-end">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-at"><i class="fas fa-plus-circle"></i>&nbsp Nova atividade</button>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container-fluid">   
        <div class="row box-white" style="background-color: #fff; height: 50px;">
            <label for="data-day" style="margin-top: 10px; margin-left: 10px;">&nbsp&nbsp Dia:</label>
            <div class="col-sm-8" >                
                    <input type="date" class="form-control" style="margin-top: 5px; width: 350px;"name="data" id="data-day">
            </div>
            <div class="col-sm-3">
                <select name="select-type" style="margin-top: 5px;" id="st" class="form-control">
                    <option value="01" selected>Arquitetura</option>
                    
                    <option value="02">Associação</option>
                     
                    <option value="03">Clube</option>

                    <option value="04">Financeiro</option>

                    <option value="05">Funcionario</option>
                   
                    <option value="06">Manutenção</option>

                    <option value="07">Portaria</option>

                    <option value="08">Segurança</option>
                </select>
            </div>
        </div><br><br>
        <div class="row" style="background-color: #ffffff">
        <div class="col-sm-12"><br>
            <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th rowspan="2">Atividade</th>

                    <th>Cadência</th>

                    <th>Observação</th>

                    <th>Finalizar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">Não há atividades cadastradas</td>
                </tr>
            </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-at" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal">Adcionar atividade</h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="a">Atividade</label>
                            <input type="text" class="form-control" name="atv" id="a" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="opcao" id="op1" value="1">
                                <label class="form-check-label" for="op1">Esta atividade é cadênciada</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="opcao" id="op2" value="2">
                                <label for="op2" class="form-check-label">Não é uma atividade cadênciada</label>
                            </div>
                        </div>
                        <div id="father"><div class="form-group" id="ops"></div></div>
                        <div class="form-group">
                            <label for="d">Data de Início</label>
                            <input type="date" id="d" class="form-control" name="data-inicio" required>
                        </div>
                        <div class="form-group">

                            <button class="btn btn-success" type="submit">Inserir</button>

                            <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/admin_checklist.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>