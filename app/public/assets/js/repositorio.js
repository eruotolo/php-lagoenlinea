$(document).ready(function() {

    function removeYellow() {
        $('#sub-icon-01').removeClass("rep_yellow_01");
		$('#sub-icon-02').removeClass("rep_yellow_02");
		$('#sub-icon-03').removeClass("rep_yellow_03");
		$('#sub-icon-04').removeClass("rep_yellow_04");
    }

    $('#sub-icon-01').click(function () {
		$('.campo-info').hide();
		removeYellow();
		$('#sub-icon-01').addClass("rep_yellow_01");
		$('#opcion-01').fadeIn(1000);
		
	})

    $('#sub-icon-02').click(function () {
		$('.campo-info').hide();
		removeYellow();
		$('#sub-icon-02').addClass("rep_yellow_02");
		$('#opcion-02').fadeIn(1000);
		
	})

    $('#sub-icon-03').click(function () {
		$('.campo-info').hide();
		removeYellow();
		$('#sub-icon-03').addClass("rep_yellow_03");
		$('#opcion-03').fadeIn(1000);
		
	})

    $('#sub-icon-04').click(function () {
		$('.campo-info').hide();
		removeYellow();
		$('#sub-icon-04').addClass("rep_yellow_04");
		$('#opcion-04').fadeIn(1000);
		
	})

});