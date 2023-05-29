export function menu_mov(){
    var icon = document.getElementById('icon_mov');
    var menu_mov = document.getElementById('second_menu');
    var main_menu = document.getElementById('main_menu');

    icon.onclick = (event) => {
        menu_mov.classList.toggle('second_menu_show');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-xmark');
        icon.classList.toggle('icon_mov_shadow');
        main_menu.classList.toggle('main_menu_back');
    }
}

export function nav(){
    var header = document.querySelector('header');
    var alt = header.offsetHeight;
    var dec = 30;

    window.addEventListener('scroll', function() {
        if(window.scrollY > alt){
            header.classList.add('main_menu_back');
            header.style.height = (alt-dec)+'px';
        }else{
            header.classList.remove('main_menu_back');
            header.style.height = alt+'px';
        }
    });
}

export function scrollReveal(){

    window.addEventListener('scroll', function(){
        let items = document.getElementsByClassName('scroll');
        let screenSize = window.innerHeight;

        for(var i = 0; i < items.length; i++){
            var item = items[i];

            if(item.getBoundingClientRect().top < screenSize){
                item.classList.add('visible');
            }else{
                item.classList.remove('visible');
            }
        }
    });
}