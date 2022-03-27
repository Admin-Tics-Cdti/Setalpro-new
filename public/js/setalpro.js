window.onload=function(){
    if (window.innerWidth < 760){
        document.getElementById("header-title").innerText = "Setalpro";
    }
    
   /**
     * Mostrar y ocultar menu
     */
    var open1 = false;
    document.getElementById('cpanel').onclick=function(){
        if (open1) {
          document.getElementsByTagName('app-menu')[0].style.width = "220px";
          document.getElementsByTagName('main')[0].style.margin= "30px 0px 0px 230px";
          open1 = false;
        }else{
           document.getElementsByTagName('app-menu')[0].style.width = "100px";
           document.getElementsByTagName('main')[0].style.margin= "30px 0px 0px 110px";
           open1 = true;
        }
    }
   /**
    * Mostrar y ocultar sub-menu
    */
    const menu = document.querySelectorAll(".menu-items");
    for (let index = 0; index < menu.length; index++) {
        menu[index].onclick = function(){
            for (let j = 0; j < menu.length; j++) {
                var otros = menu[j].querySelectorAll("ul");
                for (let y = 0; y < otros.length; y++) {
                    if (menu[j] != menu[index]) {
                        /** Se cierra las otras opciones abiertas */
                        otros[y].style.display = "none";
                        menu[j].getElementsByTagName('a')[0].classList.remove('item-navb');
                        menu[j].getElementsByTagName('a')[0].classList.add('item');
                    }else{
                        /** Se abre o se cierra las opciones del modulo en el que se dio click */
                        var submenu = menu[index].querySelectorAll("ul");
                        var display = submenu[y].style.display;
                        var clase_item = menu[index].getElementsByTagName('a')[0].classList;
                        if (clase_item == 'item') {
                            menu[index].getElementsByTagName('a')[0].classList.remove('item');
                            menu[index].getElementsByTagName('a')[0].classList.add('item-navb');
                        }
                        if (display == "none" || display == "") {
                            submenu[0].style.display = "block";
                        }else{
                            submenu[0].style.display = "none";
                        }
                    }
                }
            }
        }
    }
    /*cerrar session*/
    document.getElementById('logout').onclick=function(){
        document.getElementById('logout-form').submit();
    }
}