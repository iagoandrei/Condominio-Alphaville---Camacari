
var checkElement = document.querySelector("#option2");
var checkElement2 = document.querySelector("#option1");
var checkElement3 = document.querySelector("#option4");
var checkElement4 = document.querySelector("#option3");
addEvent(checkElement);
addEvent(checkElement4);
function addEvent(Element){
  Element.addEventListener('click', () => {
    let teste = document.querySelector("#dates");
    let cod = document.querySelector("#codigo");
    if((teste != null)||(teste != undefined)){
      return true;
    }if ((cod != null)||(cod != undefined)) {
      cod.parentNode.removeChild(cod);
      let newInput = document.createElement('p');
      let dateInput1 = 'Inicio <input type="date" name="data_inicio" id="inicio"> Fim <input type="date" name="data_fim" id="fim"> <button id="bt_date">OK</button>';
      newInput.setAttribute('id','dates');
      newInput.innerHTML = dateInput1;
      let div = document.querySelector('#part1');
      div.appendChild(newInput);
    }else{
      let newInput = document.createElement('p');
      let dateInput1 = 'Inicio <input type="date" name="data_inicio" id="inicio"> Fim <input type="date" name="data_fim" id="fim"> <button id="bt_date">OK</button>';
      newInput.setAttribute('id','dates');
      newInput.innerHTML = dateInput1;
      let div = document.querySelector('#part1');
      div.appendChild(newInput);
    }
  })
}
checkElement2.addEventListener('click',() => {
  var teste = document.querySelector("#dates");
  let cod = document.querySelector("#codigo");
  if((teste != null)||(teste != undefined)){
    teste.parentNode.removeChild(teste);
  }if ((cod != null)||(cod != undefined)) {
    cod.parentNode.removeChild(cod);
  }else{
    return true;
  }
})
checkElement3.addEventListener('click', () => {
  var teste = document.querySelector("#dates");
  var cod = document.querySelector("#codigo");
  if((teste != null)||(teste != undefined)&&(cod != null)||(cod != undefined)){
    teste.parentNode.removeChild(teste);
    let inputCode = document.createElement('p');
    let valueCode = 'Código <input type="text" name="cod" id="cods"> <button id="bt_date">OK</button>';
    inputCode.setAttribute('id','codigo');
    inputCode.innerHTML = valueCode;
    let div = document.querySelector("#part1");
    div.appendChild(inputCode);
  }else{
    let inputCode = document.createElement('p');
    let valueCode = 'Código <input type="text" name="cod" id="cods"> <button id="bt_date">OK</button>';
    inputCode.setAttribute('id','codigo');
    inputCode.innerHTML = valueCode;
    let div = document.querySelector("#part1");
    div.appendChild(inputCode);
  }
})
