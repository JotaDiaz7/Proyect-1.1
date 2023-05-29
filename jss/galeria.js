window.addEventListener('load', (event) => {
    menu_mov();
    nav();
    staple();
});

import { menu_mov } from "./main.js";
import { nav } from "./main.js";

function staple(){
    $(function () {
        var $grid = $('#tp-grid'),
            $name = $('#name'),
            $close = $('#close'),
            $loader = $('<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>').insertBefore($grid),
            stapel = $grid.stapel({
                randomAngle: true,
                delay: 50,
                gutter: 70,
                pileAngles: 5,
                onLoad: function () {
                $loader.remove();
                },
                onBeforeOpen: function (pileName) {
                $name.html(pileName);
                },
                onAfterOpen: function (pileName) {
                $close.show();
                }
            });

            $close.on('click', function () {
            $close.hide();
            $name.empty();
            stapel.closePile();
        });

    });
}