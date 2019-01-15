


//Adcionando Evento para fazer as mudanças necessárias

const radioOne = document.querySelector("#r1");
const radioTwo = document.querySelector("#r2");

radioOne.addEventListener('click',() => {
    var father = document.querySelector("#getDoc");
    var son = father.querySelector("#addArchive");
    var conteudo = '<div class="custom-file 3" id="opt1"><input type="file" class="custom-file-input" name="addA"id="customFile"><label class="custom-file-label" for="customFile">Escolher arquivo</label></div>';
    var contSon = son.querySelector("#opt1");
    var outherSon = son.querySelector("#opt2");
    if(contSon !== null && radioOne.value == 001){
        return true;
    }else{
        if(outherSon != null)
            outherSon.remove();
        son.innerHTML = conteudo;
    }
})

radioTwo.addEventListener('click',() => {
    var father = document.querySelector("#getDoc");
    var son = father.querySelector("#addArchive");
    var dado = '<div class="form-group" id="opt2"><label for="u">URL</label><input type="text" class="form-control" id="u" placeholder="http://" name="url"></div>';       
    var contSon = son.querySelector("#opt1");
    var outherSon = son.querySelector("#opt2");
    if(outherSon !== null && radioTwo.value == 002){
        return true;
    }else{
        if(contSon != null)    
            contSon.remove();
        son.innerHTML = dado;
    }
})
