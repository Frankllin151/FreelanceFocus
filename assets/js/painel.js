function w3_open() {
    document.getElementById("main-header").style.marginLeft = "25%";
    document.getElementById("main-site").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    
    document.getElementById("openNav").style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main-site").style.marginLeft ="0%"
    document.getElementById("main-header").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }




  function includeHTML() {
    const headerElement = document.getElementById("header");
    const pageAgenda = document.getElementById("page-agenda");
   const pageFinancas = document.getElementById("financas");
   const pageMetaAnual = document.getElementById("meta-anual");
   const pageContralto = document.getElementById("contralto");
   const pageCreteContralto = document.getElementById("create-contralto");
   const pageContabilidade = document.getElementById("contabilidade");
    fetch("header.html")
       .then(response => response.text())
       .then(data => headerElement.innerHTML = data);

       fetch("agenda-prio.html")
       .then(response => response.text())
       .then(data => pageAgenda.innerHTML = data);
    
       fetch("financas.html")
       .then(response => response.text())
       .then(data => pageFinancas.innerHTML = data);



       fetch("contralto.html")
       .then(response => response.text())
       .then(data => pageContralto.innerHTML = data);
       fetch("/parth/contralto/form-contralto.html")
       .then(response => response.text())
       .then(data => pageCreteContralto.innerHTML = data);


       fetch("contabilidade.html")
       .then(response => response.text())
       .then(data => pageContabilidade.innerHTML = data);
      
      
      
      
      
      fetch('/parth/meta/meta-form-anual.html')
       .then(response => response.text())
       .then(data => pageMetaAnual.innerHTML = data);
      }
 window.onload = includeHTML;