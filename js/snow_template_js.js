window.onload = function(){
    var snowMenu = document.getElementById('mobile-menu-open');
    snowMenu.onclick = function(){
        document.getElementsByClassName('nav')[0].classList.toggle('menu-open');
    }

    var snowMenu = document.getElementById('mobile-menu-close');
    snowMenu.onclick = function(){
        document.getElementsByClassName('nav')[0].classList.toggle('menu-open');
    }

    var snowUser = document.getElementById('snow-user-show');
    snowUser.onclick = function(){
        document.getElementsByClassName('snow-user-menu')[0].classList.toggle('show');
    }
}