function lockscreen(){
	$.blockUI({ css: { 
		border: 'none', 
		padding: '15px', 
		backgroundColor: 'null',
		opacity: .6, 
		color: '#fff'
	} });
	$('.main-header').block({ message: null });
	$('.dropdown-menu').block({ message: null });	
	$('.ctr-sidebar').block({ message: null });	
	$(".dropdown-menu").css("border", "0");
	setTimeout($.unblockUI, 10000); 
}
  
function playSound(){
	var obj = document.createElement("audio");
	obj.src="blop.mp3";
	obj.volume=1.00;
	obj.autoPlay=false;
	obj.preLoad=true;
	obj.play();	
}	

function addNotification() {
	var not_count = parseInt($('.notification_count').text());
	var res = not_count+1;
	$('.notification_count').show();
	$('.notification_count').text(res);
	$('.notification_count2').text(res);
	$('.not_icon').removeClass('text-info');
}

function deleteNotification(type, idnot) {
	var not_count = parseInt($('.notification_count').text());
	var res = not_count-1;
	$('.notification_count').text(res);
	$('.notification_count2').text(res);
	if (res == 0) {
		$('.notification_count').hide();
		$('.not_icon').addClass('text-info');
	}
	$('#li_'+type+'_'+idnot).hide();
}

function colorValidSelectPicker(result,id) {
	if (result == 'error') {
		$("button[data-id=" + id + "]").css("border", "1px solid #FB404B");
		$("button[data-id=" + id + "]").css("color", "#FB404B");
		setTimeout(function(){
		$("button[data-id=" + id + "]").css("border", "1px solid #C3C3C3");
		$("button[data-id=" + id + "]").css("color", "#C3C3C3");

		}, 2000); 		
	} else if (result == 'valid') {
		$("button[data-id=" + id + "]").css("border", "1px solid #87CB16");
		$("button[data-id=" + id + "]").css("color", "#87CB16");	
		setTimeout(function(){
		$("button[data-id=" + id + "]").css("border", "1px solid #C3C3C3");
		$("button[data-id=" + id + "]").css("color", "#C3C3C3");

		}, 2000); 		
	}
}

function colorValidInput(result,id) {
	if (result == 'error') {
		$('#'+id).css("border", "1px solid #FB404B");
		$('#'+id).css("color", "#FB404B");
		setTimeout(function(){
		$('#'+id).css("border", "1px solid #C3C3C3");
		$('#'+id).css("color", "#C3C3C3");

		}, 2000); 		
	} else if (result == 'valid') {
		$('#'+id).css("border", "1px solid #87CB16");
		$('#'+id).css("color", "#87CB16");	
		setTimeout(function(){
		$('#'+id).css("border", "1px solid #C3C3C3");
		$('#'+id).css("color", "#C3C3C3");

		}, 2000); 		
	}
}	
	
