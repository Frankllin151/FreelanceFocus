var editConfigElement = document.querySelectorAll('.edit-config');


editConfigElement.forEach(function(element){
    element.addEventListener('click' , function(event){
        Edit(event);
        ToggleWindow(event)
    })

})

function Edit(event){
  const agenda = event.target.closest('.agenda');

  if(agenda){
    var idElement = agenda.getAttribute('id'); 

    
  }
  agenda.querySelector('.optionedit').classList.toggle('none-option');
}




