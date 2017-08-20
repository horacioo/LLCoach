$(document).ready(function () {
    
    jQuery('.sub-menu').hide();
    AbreMenu();
    FechaMenu();
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