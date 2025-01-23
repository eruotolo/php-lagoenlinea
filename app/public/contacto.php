<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="scroll-smooth" lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "/mobile/contacto.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Contacto</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- SEO ORGANICO -->
    <meta http-equiv="content-Type" content="text/html; ISO-8859-1">
    <meta name="DC.Language" scheme="RFC1766" content="Spanish">
    <meta name="author" content="Asesoría Indaga">
    <meta name="reply-to" content="edgardo@indaga.me">
    <link rev="made" href="mailto:edgardo@indaga.me">
    <meta name="description" content="Datos en línea para el monitoreo de las condiciones ambientales del lago Llanquihue.">
    <meta name="keywords" content="Monitoreo,lago,lago llanquihue,lago en linea,información,ambiental,evaluación,tecnologías,condiciones,ambientales,región,los lagos,osorno,profundidad,182m,hidrografia,glaciar,chile,general carrera,rios,afluentes,volcan,calbuco,tepu,maullín,puerto varas,puerto montt,cordillera,andes,clima,selva valdiviana,frutillar,las cascadas,agroquimicos,pisciculturas,más azul,patagonia,universidad,san sebastian">
    <meta name="Resource-type" content="Document">
    <meta name="DateCreated" content="Sat, 1 January 2023 00:00:00 GMT-4">
    <meta name="Revisit-after" content="4 days">
    <meta name="robots" content="ALL">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EN0M278PRJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EN0M278PRJ');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKZ9BW4');
    </script>
    <!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKZ9BW4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!---------- IN CABEZAL DE LA PAGINA ----------->
<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!---------- END CABEZAL DE LA PAGINA ---------->

<section id="contenido-home" class="md:pt-[50px] 3xl:pt-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">CONTACTO</h4>
            <h5 class="subtitulos">Escríbenos</h5>
        </div>
    </div>
    <div class="container mx-auto md:mb-[80px] md:mt-[60px]">
        <div class="flex flex-col justify-center items-center content-center">
            <div class="w-8/12 bg-azul p-[50px] rounded-[40px]">
                <form id="contact_form">
                    <div class="md:py-[15px]">
                        <input type="text" name="fname" id="fname" placeholder="Nombre Completo" class="w-full font-light md:text-[18px] border-b-[1px] border-white bg-azul px-[10px] py-[4px] placeholder-white text-white" >
                    </div>
                    <div class="md:py-[15px]">
                        <input type="email" name="email" id="email" placeholder="Email" class="w-full font-light md:text-[18px] border-b-[1px] border-white bg-azul px-[10px] py-[4px] placeholder-white text-white">
                    </div>
                    <div class="md:py-[15px]">
                        <select id="seeAnotherField" class="w-full font-light md:text-[18px] border-b-[1px] border-white bg-azul px-[8px] py-[5px] placeholder-white text-white">
                            <option>Seleccione el asunto</option>
                            <option value="no" v='Consulta general'>Consulta general</option>
                            <option value="yes" v='Aporta información'>Aporta información</option>
                        </select>
                    </div>
                    <div class="md:py-[15px]" id="otherFieldDiv">
                        <select id="otherField" class="w-full font-light md:text-[18px] border-b-[1px] border-white bg-azul px-[8px] py-[5px] placeholder-white text-white">
                            <option>Seleccione la opción</option>
                            <option value="Tecnologias" v='Tecnologias'>Tecnologias</option>
                            <option value="Documentos complementarios" v='Documentos complementarios'>Documentos complementarios</option>
                        </select>
                    </div>
                    <div class="md:py-[15px]">
                        <textarea name="comment" id="comment" placeholder="Mensaje" rows="8" class="w-full font-light md:text-[18px] border-b-[1px] border-white bg-azul placeholder-white px-[10px] py-[5px] text-white"></textarea>
                    </div>
                    <div class="md:py-[15px] flex justify-center items-center content-center">
                        <button id='send_btn2' type="submit" class="bg-amarillo text-azul md:text-[18px] md:leading-[18px] px-[30px] pt-[10px] pb-[8px] rounded-[20px] border-[1px] border-amarillo hover:border-[1px] hover:bg-azul hover:border-amarillo hover:text-amarillo">Enviar</button>
                    </div>
                    <div id="message" class="alert alert-danger alert-dismissible fade"></div>
                </form>
            </div>
        </div>
    </div>

</section>

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>

<!------- JS ENVIAR EMAIL --------->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<!--script src="assets/mail/js/validation.js"></script-->
<!--script src="assets/js/anotherfield.js"></script-->
<script>
	$("#seeAnotherField").change(function() {
		if ($(this).val() == "yes") {
			$('#otherFieldDiv').show();
			$('#otherField').attr('required', '');
			$('#otherField').attr('data-error', 'This field is required.');
		} else {
			$('#otherFieldDiv').hide();
			$('#otherField').removeAttr('required');
			$('#otherField').removeAttr('data-error');
		}
	});
	$("#seeAnotherField").trigger("change");

	$('#send_btn2').click(function() {
		$('#send_btn2').fadeOut();
		var fname = $('#fname').val();
		var email = $('#email').val();
		var seeAnotherField = $('#seeAnotherField').val();
		var otherField = $('#otherField').val();
		var comment = $('#comment').val();
		var asunto = $('#seeAnotherField option:selected').attr('v');
		var subasunto = $('#otherField option:selected').attr('v');
		$.ajax({
			url: 'assets/mail/send_mail.php',
			type: 'post',
			data: {
				fname: fname,
				email: email,
				seeAnotherField: seeAnotherField,
				otherField: otherField,
				comment: comment,
				asunto: asunto,
				subasunto: subasunto
			},
			success: function(response) {
				console.log(response);
				var data = JSON.parse(response);
				if (data.status == 1) {
					alert("El mensaje fue enviado");
				} else {
					alert("El mensaje NO fue enviado");
				}
				$('#fname').val('');
				$('#email').val('');
				$('#seeAnotherField').val('');
				$('#otherField').val('');
				$('#comment').val('');
				$('#seeAnotherField').val('');	
				$('#send_btn2').fadeIn();				
			},
			error: function(response) {
				alert("Error");
			}
		});
		return false;
	})
</script>
</body>
</html>