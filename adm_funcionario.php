<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Administração de funcionarios</title>
    <link rel="stylesheet" href="css/estilo_adm_funcionario.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <header id="cabecalho">
      <a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
    </header>
    <h1 id="form_title"><b>Adm de Documento</b></h1>
    <div class="row justify-content-around">
      <div class="col-md-5 part1 s">
        <p><b>Cadastrado</b></p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nome Completo</th>
              <th>Status</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Zelda Santana</td>
              <td>Ativo</td>
              <td>asdasd<br>sadasds<br>asdasdasd<br>asdasdasdasd</td>
            </tr>
            <tr>
              <td>Ozorokaldo Pildas</td>
              <td>Demitido</td>
              <td>asdasd<br>sadasds<br>asdasdasd<br>asdasdasdasd</td>
            </tr>
            <tr>
              <td>Estrymatico Dias</td>
              <td>Ativo</td>
              <td>asdasd<br>sadasds<br>asdasdasd<br>asdasdasdasd</td>
            </tr>
            <tr>
              <td>Weritymaei Wood</td>
              <td>Ativo</td>
              <td>asdasd<br>sadasds<br>asdasdasd<br>asdasdasdasd</td>
            </tr>
          </tbody>
        </table>
      </div>&nbsp
      <div class="col-md-5 part1">
        <p><b>Inserir Novo</b></p>
        <form>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" id="email" type="text" name="email" placeholder="example@hotmail.com">
        </div>
        <div class="form-group">
          <label for="#">Tipo de Permissão</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check1" id=check1>
              <label class="custom-control-label" for="check1">Arquitetura</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check2" id=check2>
              <label class="custom-control-label" for="check2">Associação</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check3" id=check3>
              <label class="custom-control-label" for="check3">Clube</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check4" id=check4>
              <label class="custom-control-label" for="check4">Financeiro</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check5" id=check5>
              <label class="custom-control-label" for="check5">Funcionário</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check6" id=check6>
              <label class="custom-control-label" for="check6">Manutenção</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check7" id=check7>
              <label class="custom-control-label" for="check7">Portaria</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="check8" id=check8>
              <label class="custom-control-label" for="check8">Segurança</label>
            </div>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input class="form-control" type="text" name="nome" placeholder="Nome" id="nome">
        </div>
        <div class="form-group">
          <label for="surnome">Sobrenome</label>
          <input class="form-control" type="text" name="surnome" placeholder="Sobrenome" id="surnome">
        </div>
        <div class="form-group">
          <label for="#">Genero</label>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="g1" id="genero-m">
            <label class="custom-control-label" for="genero-m">Masculino</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="g2" id="genero-f">
            <label class="custom-control-label" for="genero-f">Feminino</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="anivesario">Anivesario</label>
        <input type="date" name="data_aniv" class="form-control">
      </div>
      <div class="form-group">
      <button type="button" name="button-send" class="btn btn-success">Salvar</button>
    <button type="button" name="button-send" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </form>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  </body>
</html>
