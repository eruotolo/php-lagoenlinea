$(document).ready(function() {

    function monitorChange() {
        $('#mon-item-01').removeClass("mon_icon_01_yellow");
        $('#mon-item-02').removeClass("mon_icon_02_yellow");
        $('#mon-item-03').removeClass("mon_icon_03_yellow");
		$('#mon-item-04').removeClass("mon_icon_04_yellow");
    }

	function monitorRem() {
		$('#mon-item-01').removeClass("btn-ciclos-act");
	}

    $('#mon-item-01').click(function () {
		$('.monitor-btn').removeClass('btn-ciclos-act');
		$('.campo-info').hide();
		monitorChange();
		$('#mon-item-01').addClass("mon_icon_01_yellow");
		$('#opcion-01').fadeIn(1000);
		
	})

    $('#mon-item-02').click(function () {
		$('.monitor-btn').removeClass('btn-ciclos-act');
		$('.campo-info').hide();
		monitorChange();
		monitorRem();
		$('#mon-item-02').addClass("mon_icon_02_yellow");
		$('#opcion-02').fadeIn(1000);
	})

    $('#mon-item-03').click(function () {
		$('.monitor-btn').removeClass('btn-ciclos-act');
		$('.campo-info').hide();
		monitorChange();
		monitorRem();
		$('#mon-item-03').addClass("mon_icon_03_yellow");
		$('#opcion-03').fadeIn(1000);
	})

	$('#mon-item-04').click(function () {
		$('.monitor-btn').removeClass('btn-ciclos-act');
		$('.campo-info').hide();
		monitorChange();
		monitorRem();
		$('#mon-item-04').addClass("mon_icon_04_yellow");
		$('#opcion-04').fadeIn(1000);
	})

});