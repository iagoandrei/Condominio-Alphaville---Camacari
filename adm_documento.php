<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Administração de documentos</title>
    <link rel="stylesheet" href="css/estilo_adm_documento.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <header id="cabecalho">
      <a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
    </header>
    <h1 id="form_title"><b>Adm de Documento</b></h1>
    <div class="container-fluid">
      <div class="row justify-content-end s">
        <div class="col-2 nd">
          <button type="button" name="button-new" data-toggle="modal" data-target="#modal-document" class="btn btn-primary"><i class="fas fa-plus-circle"></i>&nbsp Novo Documento</button>

        </div>
        <!--sdasdasd-->

        <!--sdasdasd-->
      </div><br>
      <div class="row">
        <div class="col-md-12 part1">
          <b><p id="title"><i class="fas fa-file-alt"></i>&nbsp&nbsp&nbsp Documentos</p></b>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12 part2">
            <div class="form-row">
              <p><b>Selecione o tipo do Documento</b></p>
              <select class="custom-select custom-select-md" name="select-setor">
                <option value="todos" selected>Todos</option>
                <option value="administrativo">Administrativo</option>
                <option value="seguranca">Segurança</option>
                <option value="pdc">Prestação de Conta</option>
                <option value="diversos">Diversos</option>
                <option value="ada">Ata de Assembléias</option>
              </select>
            </div>
            <div class="row justify-content-end s">
              <div class="col-3">
                <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar">
              </div>
            </div><br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Título</th>
                  <th>Data</th>
                  <th>Tipo</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>nsadnsajndsadasnd</td>
                  <td>321/321/231</td>
                  <td>asdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
                <tr>
                  <td>asdasdasd</td>
                  <td>321321/321321/231321</td>
                  <td>sadsdasdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
                <tr>
                  <td>asdasdasd</td>
                  <td>321/321/321/</td>
                  <td>aasdasdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
                <tr>
                  <td>asdasdasd</td>
                  <td>321/321/321/</td>
                  <td>aasdasdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
                <tr>
                  <td>asdasdasd</td>
                  <td>321/321/321/</td>
                  <td>aasdasdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
                <tr>
                  <td>asdasdasd</td>
                  <td>321/321/321/</td>
                  <td>aasdasdasd</td>
                  <td>
                    <button type="button" name="button_baixar" class="btn btn-success"><i class="fas fa-download"></i>&nbsp Baixar arquivo</button>
                    <button type="button" name="button_remove" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp Remover</button>
                  </td>
                </tr>
              </tbody>
            </table><br>
            <nav aria-label="Pagina de exemplo navegacao">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
              </ul>
            </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-document">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Novo Documento</h5>
          <button class="close" type="button" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
          <div class="form-group">
            <p>
              Clique em "Inserir arquivo" para fazer o upload do documento ou copie e cole a URL que deseja disponibilizar no campo URL.
            </p>
            </div>
            <div class="form-group">
              <label for="t">Tipo</label>
              <select name="tipo" id="t" class="form-control">
                
                <option value="00" selected>Selecione...</option>
                
                <option value="01">Administrativo</option>
                
                <option value="02">Segurança</option>
                
                <option value="03">Prestação de Contas</option>
                
                <option value="04">Diversos</option>
                
                <option value="05">Ata de Assembléia</option>
              
              </select>
            </div>
            <div class="form-group">
              <label for="t">Título</label>
              <input type="text" class="form-control" id="t" name="titulo" placeholder="Escreva..." required>
            </div>
            <div class="form-group">
              <div class="card" style="width: 29rem;">
                <div class="card-header">
                  <label for="ops">Adcionar arquivo através</label>
                  <div class="row">
                  <div class="form-check">&nbsp&nbsp
                    <input type="radio" class="form-check-input" name="op" id="r1" value="001">
                    <label for="r1" class="form-check-label">Arquivo Local</label>
                    </div>
                    <div class="form-check">&nbsp&nbsp&nbsp
                    <input type="radio" class="form-check-input" name="op" id="r2" value="002">
                    <label for="r2" class="form-check-label">URL</label>
                    </div>
                  </div>
                </div>

                <!--Parte Js-->
                <div class="card-body" id="getDoc">
                  <div class="form-group" id="addArchive">
                  
                  </div>
                </div>
                <!--End-->

              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Inserir</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="nav bar">
    
    </div>

    <script src="js/admin_documento.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
