$(document).ready(function () {

    var tela = jQuery(window).width();

    if (tela > 768)
    {
        jQuery('.sub-menu').hide();
        FechaMenu();
        AbreMenu();
    }
  
    /*jQuery('.menu-item-has-children').children('ul').addClass('dropdown-menu');*/
});


function AbreMenu() {
    jQuery('li').mouseover(function () {
        $(this).children('.sub-menu').show(200);
    });
}
function FechaMenu() {
    jQuery('li').mouseleave(function () {
        $(this).children('.sub-menu').hide(300);
    });
}