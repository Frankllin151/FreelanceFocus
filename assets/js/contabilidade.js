/// Form contralto 



function CreateHouse(){
    const nomeInputValue = document.getElementById("input-house").value;
    
   if(nomeInputValue.trim() === ""){
     alert("Por favor, digite o nome da label")
   }

   let novoParagrafo = document.createElement("p");
   novoParagrafo.setAttribute("id" , nomeInputValue);

    // Criar um novo <label> dentro do bloco <p>
    let novoLabel = document.createElement("label");
    novoLabel.textContent = nomeInputValue +":"; // Use o valor como texto do label

    // Criar um novo <input> dentro do bloco <p>
    let novoInput = document.createElement("input");
    novoInput.setAttribute("type", "text");
    novoInput.setAttribute("name", nomeInputValue);

    let novoButton = document.createElement("button");
    let iconX = document.createElement("i");
    iconX.classList.add("bi")
    iconX.classList.add("bi-x-circle")
    novoButton.appendChild(iconX);
    novoButton.setAttribute("data-key" , nomeInputValue);
    novoButton.setAttribute("onclick" , "Remove(event)")
    novoButton.classList.add("btn-del-house");
    novoButton.classList.add("indetifier");
    // Adicionar o <label> e o <input> ao bloco <p>
    novoParagrafo.appendChild(novoLabel);
    novoParagrafo.appendChild(novoInput);
    novoParagrafo.appendChild(novoButton);

    // Adicionar o bloco <p> ao elemento com o ID "container"
    document.querySelector(".gasto-house").appendChild(novoParagrafo);

    // Limpar o campo de entrada para o próximo nome
    document.getElementById("input-house").value = "";

   
}



var buttonDel = document.querySelectorAll('.indetifier');

buttonDel.forEach(function(element){
  element.addEventListener('click' , function(event){
   Remove(event);
  })
})

function Remove(event){
let ElementoButton = event.target.closest('btn-del-house');
 
 if(ElementoButton) {
var idButton = ElementoButton.getAttribute("data-key");
 }
 alert(idButton);

}







function CreateCompany(){
  var nomeInputValue = document.getElementById("input-company").value;
 
  
 if(nomeInputValue.trim() === ""){
   alert("Por favor, digite o nome da label")
 }

 let novoParagrafo = document.createElement("p");
 novoParagrafo.setAttribute("id" , nomeInputValue);

  // Criar um novo <label> dentro do bloco <p>
  let novoLabel = document.createElement("label");
  novoLabel.textContent = nomeInputValue +":"; // Use o valor como texto do label

  // Criar um novo <input> dentro do bloco <p>
  let novoInput = document.createElement("input");
  novoInput.setAttribute("type", "text");
  novoInput.setAttribute("name", nomeInputValue);

  
  //
  let novoButton = document.createElement("button");
  let iconX = document.createElement("i");
  iconX.classList.add("bi")
  iconX.classList.add("bi-x-circle")
  novoButton.appendChild(iconX);
  novoButton.setAttribute("id" , nomeInputValue);
  novoButton.setAttribute("onclick" , Remove)
  novoButton.classList.add("btn-del");
  
  

  novoParagrafo.appendChild(novoLabel);
  novoParagrafo.appendChild(novoInput);
  novoParagrafo.appendChild(novoButton); 

  
  document.querySelector(".gasto-empresa").appendChild(novoParagrafo);

  
  document.getElementById("input-company").value = "";

 
}









