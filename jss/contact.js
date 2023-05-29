window.addEventListener('load', (event) => {
    menu_mov();
    nav();
    envio_form();
});

import { menu_mov } from "./main.js";
import { nav } from "./main.js";

function envio_form(){
    const form = document.getElementById('contact');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdD0DgmAAAAAEPS6qnAG6nnxLmwoqTHou76gOS5',{
                action:'contact'
            }).then(function(token){
                const datos = new FormData(form);
                datos.append('token', token);
                datos.append('action', 'contact');

                fetch('../php/contact_config.php', {
                    method: 'POST',
                    body: datos
                }).then(answer => answer.json())
                .then(datos_recibidos => {
                    console.log(datos_recibidos);
                    var error= document.getElementById('error');
                    var success = document.getElementById('success');

                    if(datos_recibidos == "Mensaje enviado"){
                        error.classList.add('d-none');
                        success.classList.remove('d-none');
                        form.reset();
                    }else{
                        error.classList.remove('d-none');
                        success.classList.add('d-none');
                    }
                });
            });
        });
    });
}