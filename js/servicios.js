"use strict"
document.addEventListener('DOMContentLoaded', () => {

getComments();

    document.querySelector('#cargar-comentario').addEventListener('click', e => {
        e.preventDefault();
        addComments();
        getComments();

    });
})

let product = document.getElementById('detallesdelproducto');
let productid = product.innerHTML;
let user = document.querySelector('#usuariologeado');
let userlogeado = user.innerHTML;



function getComments() {

    fetch('api/comentarios/' + productid)

        //promesas consumir

        .then(response => response.json())
        .then(comentarios => rendercomments(comentarios))
        .catch(error => console.log(error));
}



function addComments() {
    if (userlogeado != "") {
        const comentarios = {

            "comentario": document.querySelector('#comentario-enviado').value,
            "id_coments": productid,
            "valoracion": document.querySelector('#estrellitas').value
        }

        fetch('api/comentarios/', {
            method: 'POST',
            headers: { "Content-Type": "application/json" }, //manda contenido en formato JSON
            body: JSON.stringify(comentarios)
        })
            .then(response => response.json())
            .then(comentarios => console.log(comentarios))
            .catch(error => console.log(error));
    }
    
}




function rendercomments(comentarios) {
    const container = document.querySelector('#comentarios-lista');

    //const estrellitas = document.querySelector('#estrellitas');
    container.innerHTML = "";
    for (let comentario of comentarios) {

        if (comentario.valoracion == 1) {

            container.innerHTML += `<li > ${comentario.comentario} ★  <div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div></li >`;
        }
        else if (comentario.valoracion == 2) {
            container.innerHTML += `<li> ${comentario.comentario} ★★  <div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div></li>`;
        }
        else if (comentario.valoracion == 3) {
            container.innerHTML += `<li> ${comentario.comentario} ★★★  <div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div></li>`;
        }
        else if (comentario.valoracion == 4) {
            container.innerHTML += `<li> ${comentario.comentario} ★★★★ <div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div></li>`;
        }
        else if (comentario.valoracion == 5) {
            container.innerHTML += `<li id="${comentario.id_comentarios}"> ${comentario.comentario} ★★★★★ <div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div> </li>`;
        }
        else if (comentario.valoracion == 0) {
            container.innerHTML += `<li id="${comentario.id_comentarios}"> ${comentario.comentario}<div><a href="vercomentario/${comentario.id_comentarios}" class='btn btn-danger'>Eliminar</a></div> </li>`;
        }

    

    }

}



