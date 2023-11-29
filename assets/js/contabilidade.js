/// Form contralto 



function CreateHouse(){
    const namevalueINput = document.getElementById("input-house").value;
    
   if(namevalueINput.trim() === ""){
     alert("Por favor, digite o nome da label")
   return;
    }

   let newTagP = document.createElement("p");
   newTagP.setAttribute("id" , namevalueINput);
  newTagP.setAttribute("id" , namevalueINput);
    
    let newLabel = document.createElement("label");
    newLabel.textContent = namevalueINput +":"; 

 
    let newInput = document.createElement("input");
    newInput.setAttribute("type", "text");
    newInput.setAttribute("name", namevalueINput);

    let NewTagButton = document.createElement("button");
    let iconX = document.createElement("i");
    iconX.classList.add("bi")
    iconX.classList.add("bi-x-circle")
    NewTagButton.appendChild(iconX);
    NewTagButton.setAttribute("id" , namevalueINput);
    NewTagButton.setAttribute("onclick" , "Remove(event)")
    NewTagButton.classList.add("btn-del-house");
    NewTagButton.classList.add("indetifier");

    newTagP.appendChild(newLabel);
    newTagP.appendChild(newInput);
    newTagP.appendChild(NewTagButton);

   
    document.querySelector(".gasto-house").appendChild(newTagP);


    document.getElementById("input-house").value = "";

   
}



var buttonDel = document.querySelectorAll('.indetifier');

buttonDel.forEach(function(element){
  element.addEventListener('click' , function(event){
   Remove(event);
  })
})

function Remove(event){
  let ElementoButton = event.target.closest('.indetifier');
 
  if(ElementoButton){
    var idButton = ElementoButton.getAttribute("id");

    if(idButton){
      var elementoToRemover = document.getElementById(idButton);

      if(elementoToRemover){
        elementoToRemover.remove();
      }
    }
  }
}







function CreateCompany(){
  
 
  
  
 

  

  const namevalueINput = document.getElementById("input-company").value;
    
  if(namevalueINput.trim() === ""){
    alert("Por favor, digite o nome da label")
  return;
   }

  let newTagP = document.createElement("p");
  newTagP.setAttribute("id" , namevalueINput);
 newTagP.setAttribute("id" , namevalueINput);
   
   let newLabel = document.createElement("label");
   newLabel.textContent = namevalueINput +":"; 


   let newInput = document.createElement("input");
   newInput.setAttribute("type", "text");
   newInput.setAttribute("name", namevalueINput);

   let NewTagButton = document.createElement("button");
   let iconX = document.createElement("i");
   iconX.classList.add("bi")
   iconX.classList.add("bi-x-circle")
   NewTagButton.appendChild(iconX);
   NewTagButton.setAttribute("id" , namevalueINput);
   NewTagButton.setAttribute("onclick" , "Remove(event)")
   NewTagButton.classList.add("btn-del-house");
   NewTagButton.classList.add("indetifier");

   newTagP.appendChild(newLabel);
   newTagP.appendChild(newInput);
   newTagP.appendChild(NewTagButton);

  
   document.querySelector(".gasto-empresa").appendChild(newTagP);


   document.getElementById("input-house").value = "";
 
}









