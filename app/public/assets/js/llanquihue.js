$(document).ready(function() {

    function removeYellow() {
        $('#sub-icon-01').removeClass("sm_icon_01_yellow");
        $('#sub-icon-02').removeClass("sm_icon_02_yellow");
        $('#sub-icon-03').removeClass("sm_icon_03_yellow");
        $('#sub-icon-04').removeClass("sm_icon_04_yellow");
        $('#sub-icon-05').removeClass("sm_icon_05_yellow");
        $('#sub-icon-06').removeClass("sm_icon_06_yellow");
        $('#sub-icon-07').removeClass("sm_icon_07_yellow");
    }

    $('#sub-icon-01').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-01').addClass("sm_icon_01_yellow");
        $('#opcion-01').fadeIn(1000);

    })

    $('#sub-icon-02').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-02').addClass("sm_icon_02_yellow");
        $('#opcion-02').fadeIn(1000);
    })

    $('#sub-icon-03').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-03').addClass("sm_icon_03_yellow");
        $('#opcion-03').fadeIn(1000);
    })

    $('#sub-icon-04').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-04').addClass("sm_icon_04_yellow");
        $('#opcion-04').fadeIn(1000);
    })

    $('#sub-icon-05').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-05').addClass("sm_icon_05_yellow");
        $('#opcion-05').fadeIn(1000);
    })

    $('#sub-icon-06').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-06').addClass("sm_icon_06_yellow");
        $('#opcion-06').fadeIn(1000);
    })

    $('#sub-icon-07').click(function () {
        $('.campo-info').hide();
        removeYellow();
        $('#sub-icon-07').addClass("sm_icon_07_yellow");
        $('#opcion-07').fadeIn(1000);
    })

});