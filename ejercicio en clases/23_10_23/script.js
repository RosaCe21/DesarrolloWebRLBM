
function insertarMasivo() {
  var cantidadLibros = document.getElementById('cantidadLibros').value;

  fetch('form-insertarmasivo.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'cantidadLibros=' + encodeURIComponent(cantidadLibros),
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
function insertarPorFecha() {
  fetch('insertar.php', {
    method: 'POST',
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
    listarLibros(); 
  })
  .catch(error => {
    console.error('Error:', error);
  });
}

function listarLibros() {
  fetch('listar.php')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
