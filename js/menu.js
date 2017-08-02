$(document).ready(main);

var contador = 1;

function main() {
    $('.menu-op').click(function() {
        if (contador == 1) {
            $('nav').slideDown(600);
            $('.abrir').slideUp(600);
            $('.cerrar').slideDown(600);
            // $('nav').animate({
            //     display: 'inlineBlock'
            // }, 800);
            // $('nav').animate({
      			// 	marginLeft: '0'
      			// },800);
            // $('.menu-openclose').css("width", "31%");
            // $('.menu-openclose .close').removeClass("oculto");
            // $('.menu-openclose .close').css("float", "right");
            // $('.menu-openclose .open').css("display", "none");
            contador = 0;
        } else {
            contador = 1;
            $('nav').slideUp(600);
            $('.abrir').slideDown(600);
            $('.cerrar').slideUp(600);
            // $('nav').animate({
            //     display: 'none'
            // }, 800);
            // $('.menu-openclose').css("width", "100%");
            // $('.menu-openclose .close').addClass("oculto");
            // $('.menu-openclose .open').css("display", "block");
        }
    });

    // Mostramos y ocultamos submenus
    // $('.submenu').click(function() {
    //     $(this).children('.children').slideToggle();
    // });
}
