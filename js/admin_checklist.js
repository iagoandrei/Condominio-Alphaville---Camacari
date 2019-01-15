//capturando elementos da DOM
var opcao1 = document.querySelector("#op1");
var opcao2 = document.querySelector("#op2");

//Adcionando os eventos de escuta para fazer as mudanças no Modal

opcao1.addEventListener('click',() => {
    var opcao1 = document.querySelector("#op1");
    var father = document.querySelector("#father");
    var div = father.querySelector("#ops");
    var conteudo = '<label for="caden">Cadência</label><input type="number" id="qnt" name="quantidade" class="form-control" required><br><select class="form-control" name="ops" required><option value="d" name="day">Dia</option><option value="m" name="month">Mês</option><option value="a" name="year">Ano</option></select>';
    if(opcao1.value == 1 && div !== null){
        div.innerHTML = conteudo;
    }else if(div == null){
        var div = document.createElement("div");
        div.setAttribute("id","ops");
        div.setAttribute("class","form-group");
        div.innerHTML = conteudo;
        father.appendChild(div);
    }else{
        return false;
    }
})
opcao2.addEventListener('click',() => {
    var opcao2 = document.querySelector("#op2");
    if(opcao2.value == 2){
        let div = document.querySelector("#ops");
        let conteudo = '<label for="caden">Cadência</label><input required type="numeric" id="qnt" name="quantidade" class="form-control"><br><select required class="form-control" name="ops"><option value="d" name="day">Dia</option><option value="m" name="month">Mês</option><option value="a" name="year">Ano</option></select>';
        div.remove();
    }else{
        return false;
    }
})