const ctx = document.getElementById('myChart');
          
            new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        datasets: [{
            label: 'Salário',
            data: [12, 15, 3, 5, 2, 3, 5, 10, 8, 15, 7, 15], 
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'Meta',
            data: [15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15], 
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});








// Dropdown 
document.addEventListener('DOMContentLoaded' , function(){
    var drodownBtn = document.querySelector(".dropbtn"); 
    var drodownContent = document.querySelector(".dropdown-content"); 


    drodownBtn.addEventListener("click" , () =>{
        drodownContent.style.display = (drodownContent.style.display === "block" ? "none" : 'block'); 



    }); 

    window.addEventListener('click', (event) =>{
        if(!event.target.matches(".dropbtn")){
        drodownContent.style.display = "none";
        }
    })
})
  