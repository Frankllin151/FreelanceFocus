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
    novoButton.setAttribute("id" , nomeInputValue);
    novoButton.setAttribute("onclick" , Remove)
    novoButton.classList.add("btn-del");
    // Adicionar o <label> e o <input> ao bloco <p>
    novoParagrafo.appendChild(novoLabel);
    novoParagrafo.appendChild(novoInput);
    novoParagrafo.appendChild(novoButton);

    // Adicionar o bloco <p> ao elemento com o ID "container"
    document.querySelector(".gasto-house").appendChild(novoParagrafo);

    // Limpar o campo de entrada para o próximo nome
    document.getElementById("input-house").value = "";

   
}




/*var buttonDel = document.querySelectorAll('.btn-de');

buttonDel.forEach(function(element){
  element.addEventListener('click' , function(event){
   alert("hello");
  })
})

function Remove(event){
 console.log(event);  
}*/



