<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Adm de Notícia</title>
    <link rel="stylesheet" href="css/estilo_adm_noticia.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <header id="cabecalho">
      <a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
    </header>
    <br>
    <h1 id="form_title"><b>Adm de Notícia</b></h1><br>
    <div class="container-fluid cont">
      <div class="row ">
        <div class="col-md-5 part1">
          <p><i class="fas fa-bars"></i>&nbsp&nbsp&nbsp Listagem</p>
        </div>
        <div class="col-md-5 part1">
          <p><i class="fas fa-bars"></i>&nbsp&nbsp&nbsp Inserir novo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 part2">
          <table class="table table-striped">
           <thead>
              <tr>
                <th scope="col" colspan="3">Titulo/Data</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
              </tr>
           </thead>
           <tbody>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
            <tr>
              <td colspan="3">Teste</td>
              <td>Publicado<br><i class="fas fa-bookmark"></i></td>
              <td><button class="action"><i class="fas fa-ban"></i></button class="action"><br><br><button class="action"><i class="fas fa-edit"></i></button class="action"></td>
            </tr>
           </tbody>
          </table>
          </div>
          <div class="col-md-5 part2">
            <form><br>
              <div class="form-group row">
                <p class="col-sm-1 col-form-label">Titutlo</p>
                <div class="col-sm-11">
                  <input type="text" class="form-control" name="titulo" placeholder="Titutlo">
                </div>
              </div>
              <div class="form-group">
                <p class="col-form-label">Mostrar na pagina principal?</p>
                  <select name="exibir" class="custom-select custom-select-sm">
                    <option selected> </option>
                    <option value="sim">SIM</option>
                    <option value="nao">NÃO</option>
                  </select>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="check_one" class="custom-control-input" id="customCheck1">
                <label for="customCheck1" class="custom-control-label">Alphaville Litoral Norte 1</label> 
              </div><br>
              <div class="form-group">
                <label for="txtarea-one">Descrição</label>
                <textarea name="txt-area" id="txtarea-one" rows="3" class="form-control"></textarea>
              </div><br>
              <div class="custom-file">
                <input type="file" name="select-file" class="custom-file-input" id="sfile" lang="en">
                <label for="sfile" class="custom-file-label">Selecionar Arquivo</label>
              </div>
              <div class="form-group send-bt"><br>
                <button class="btn btn-success">Enviar</button>
                <button class=" btn btn-danger">Cancelar</button>
              </div>
            </form>
          </div>
      </div>
    <script type="text/javascript" src="bootstrap/js/bootstarp.js"></script>
  </body>
</html>
