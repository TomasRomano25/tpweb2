"Use Strict";



document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('eliminatecomentario').addEventListener('click', e => {
        e.preventDefault();
        deletecomment();
        alert("comentario eliminado con exito")
        location.href = 'mostrarservicios';
    });
})
let a = document.getElementById('comentarioparaeliminar');
let comentarioid = a.innerHTML;
console.log(comentarioid);
function deletecomment() {
    fetch('api/comentarios/' + comentarioid, {
        method: 'DELETE',
        headers: { "Content-Type": "application/json" }
    }).then(response => response.json()).catch(error => console.log(error));


}