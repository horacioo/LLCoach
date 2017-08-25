$(document).ready(function () {

    Dimensiona();

    function Dimensiona() {
        var largura = $(".video").parent().width();
        var media = largura / 1.8;
        var mediax = Math.ceil(media)

        jQuery('.video').css('height', mediax);
        jQuery('.video').css('width', largura);
    }


});

