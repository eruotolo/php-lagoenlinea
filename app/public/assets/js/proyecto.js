$(document).ready(function() {

    function removeBlue(){
        $('#icon-pro-01').removeClass("pro-icon-01-blue");
        $('#icon-pro-02').removeClass("pro-icon-02-blue");
        $('#icon-pro-03').removeClass("pro-icon-03-blue");
    }

    $('#icon-pro-01').click(function () {
		$('.campo-info').hide();
		removeBlue();
		$('#icon-pro-01').addClass('pro-icon-01-blue');
		$('#opcion-01').fadeIn(1000);
		
	})

    $('#icon-pro-02').click(function () {
		$('.campo-info').hide();
		removeBlue();
		$('#icon-pro-02').addClass('pro-icon-02-blue');
		$('#opcion-02').fadeIn(1000);
		
	})

    $('#icon-pro-03').click(function () {
		$('.campo-info').hide();
		removeBlue();
		$('#icon-pro-03').addClass('pro-icon-03-blue');
		$('#opcion-03').fadeIn(1000);
		
	})

});