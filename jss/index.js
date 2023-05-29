window.addEventListener('load', (event) => {
    menu_mov();
    nav();
    carousel();
    scrollReveal();
    splash();
});

import { menu_mov } from "./main.js";
import { nav } from "./main.js";
import { scrollReveal } from "./main.js";

function splash(){
    setTimeout( function(){
        document.getElementById('splash').classList.add('d-none');
        document.getElementById('menu').classList.remove('splash_menu_hide');
        document.querySelectorAll('main > section').forEach(function(item){
            item.classList.remove('splash_hide');
        });
        document.getElementById('foot').classList.remove('d-none');

        var tidioScript = document.createElement('script');
        tidioScript.src = '//code.tidio.co/ybb7yl7lyaawdulsxnwg0tmcw9w1nhuh.js';
        document.body.appendChild(tidioScript);
    }, 6000);
}

function carousel(){
    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
    // options
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        groupCells: true,
        //pageDots: false,
        autoPlay: 4000
    });
}
