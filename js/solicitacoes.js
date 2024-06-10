   // Função para aprovar um registro
   function aprovarRegistro(id) {
    alert("Registro aprovado com sucesso.");
  }
  
  // Função para excluir um registro
  function excluirRegistro(id) {
    if (confirm("Tem certeza que deseja excluir este registro?")) {
      // Enviar solicitação para o arquivo excluirregistro.php com o ID a ser excluído
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Atualizar a tabela ou realizar outras ações necessárias
          alert("Registro excluído com sucesso.");
          // Exemplo: recarregar a página
          window.location.reload();
        }
      };
      xhttp.open("GET", "../php/excluir_registro.php?id=" + id, true);
      xhttp.send();
    }
  }


  function searchTable() {
    const input = document.getElementById("search-input").value.toLowerCase();
    const table = document.getElementsByTagName("table")[0];
    const rows = table.getElementsByTagName("tr");
   // console.log(emailCell)
    for (let i = 1; i < rows.length; i++) {
        const nameCell = rows[i].getElementsByTagName("td")[0];
        const emailCell = rows[i].getElementsByTagName("td")[8];
        alert(input==i)
        if (nameCell && emailCell ) {
            const name = nameCell.innerText.toLowerCase();
            const email = emailCell.innerText.toLowerCase();
            
            if (name.includes(input) || email.includes(input) || input==i) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
}

  
  