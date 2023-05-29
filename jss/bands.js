window.addEventListener('load', (event) => {
    menu_mov();
    nav();
    menu_show();
    bands_tipo('yes', 1);
    bands_tipo('no', 2);
});

import { menu_mov } from "./main.js";
import { nav } from "./main.js";

function bands_tipo(elementohtml, tipo_band){
    if('content' in document.createElement('template')){
        let datos = new FormData();
        datos.append('tipo', tipo_band)
        fetch('../php/bands_config.php', {
            method: 'POST',
            body: datos
        })
        .then(answer => answer.json())
        .then(data => {
            if(data != ''){
                let plantilla = document.getElementById('maincard');
                let container = document.getElementById(elementohtml);

                for(let item of data){
                    let plantilla_band = document.importNode(plantilla.content, true);
                    let div = plantilla_band.querySelector('div');
                    div.classList.add(item.gender);
                    let a = plantilla_band.querySelector('a');
                    a.href = '../php/band.php?id='+item.id;
                    let img = plantilla_band.querySelector('img');
                    img.src = '../media/bandas/'+item.img;
                    let title = plantilla_band.querySelector('h4');
                    title.textContent = item.title;
                    container.appendChild(plantilla_band);
                }
                isotope();
            }
        })
    }
}

function menu_show(){
    var menu_iso = document.getElementById('menu_iso');
    var arrow = document.getElementById('right');

    arrow.onclick = (event) => {
        menu_iso.classList.toggle('menu_show');
        arrow.classList.toggle('right_move');
    }

    fetch('../php/categoria.php')
    .then(answer => answer.json())
    .then(categoriasrecibidas => {
        if(categoriasrecibidas.length > 0){
            let licategoria = document.createElement('li');

            licategoria.setAttribute('data-filter', `*`);
            licategoria.setAttribute('id', 'all_menu');
            licategoria.textContent = ('Todo');
            menu_iso.appendChild(licategoria);

            for(let categoria of categoriasrecibidas){
                let licategoria = document.createElement('li');

                licategoria.setAttribute('data-filter', `.${categoria.gender}`);
                licategoria.textContent = categoria.gender;
                menu_iso.appendChild(licategoria);
            }

        }
    })
}

function isotope(){
    var div = document.getElementById('yes');
    var menu = document.getElementById('menu_iso');

    var iso = new Isotope(div, {

        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        filter: '*'
    });

    menu.onclick = (event) => {
        event.preventDefault();

        if(event.target.nodeName=='LI'){
            let filtro = event.target.getAttribute('data-filter');
            iso.arrange({filter:filtro});

            let title_gender = document.getElementById('title_gender');
            if(filtro=="*") filtro=" Todos";
            title_gender.textContent = filtro.substr(1);
        }
    }
}