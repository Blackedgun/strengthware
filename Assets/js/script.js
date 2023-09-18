document.addEventListener("DOMContentLoaded", function() {
    const cells = document.querySelectorAll("td:not(:first-child)"); // Seleccionar todas las celdas editables
  
    cells.forEach(cell => {
      cell.contentEditable = true; // Hacer que las celdas sean editables
    });
  
    // Agregar evento para guardar los cambios
    cells.forEach(cell => {
      cell.addEventListener("blur", function() {
        const hora = this.parentNode.firstElementChild.textContent;
        const dia = this.cellIndex - 1;
        const valor = this.textContent;
  
        // Realizar solicitud a PHP para guardar los datos
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "reg.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(`hora=${hora}&dia=${dia}&valor=${valor}`);
      });
    });
  });