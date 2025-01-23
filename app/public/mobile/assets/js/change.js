$(document).ready(function() {

    $('#opcion-01').click(function () {
        $("#mostrar-opcion-01").css("display", "block");
		$("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "none");
        
	})

    $('#opcion-02').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "block");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "none");
	})

    $('#opcion-03').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "block");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "none");
	})

    $('#opcion-04').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "block");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "none");
	})

    $('#opcion-05').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "block");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "none");
	})

    $('#opcion-06').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "block");
        $("#mostrar-opcion-07").css("display", "none");
	})

    $('#opcion-07').click(function () {
		$("#mostrar-opcion-01").css("display", "none");
        $("#mostrar-opcion-02").css("display", "none");
        $("#mostrar-opcion-03").css("display", "none");
        $("#mostrar-opcion-04").css("display", "none");
        $("#mostrar-opcion-05").css("display", "none");
        $("#mostrar-opcion-06").css("display", "none");
        $("#mostrar-opcion-07").css("display", "block");
	})

});

$(document).ready(function() {
    $(".dropdown-menu a").click(function(){
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
    });

});