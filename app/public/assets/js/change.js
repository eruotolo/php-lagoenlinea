$(document).ready(function() {
    $('#monitor').click(function () {
        $('.textprinc').hide();
        $('#mostrar_monitor').fadeIn(1000);
    })

    $('#metagenomica').click(function () {
        $('.textprinc').hide();
        $('#mostrar_metage').fadeIn(1000);
    })

    $('#satelite').click(function () {
        $('.textprinc').hide();
        $('#mostrar_teled').fadeIn(1000);
    })
});