<!DOCTYPE html>
<html lang="es">

<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../contacto.php";
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago En Línea | Contacto</title>
    <!-- SEO ORGANICO -->
    <meta http-equiv="content-Type" content="text/html; ISO-8859-1">
    <meta name="DC.Language" scheme="RFC1766" content="Spanish">
    <meta name="author" content="Asesoría Indaga">
    <meta name="reply-to" content="edgardo@indaga.me">
    <link rev="made" href="mailto:edgardo@indaga.me">
    <meta name="description" content="Datos en línea para el monitoreo de las condiciones ambientales del lago Llanquihue.">
    <meta name="keywords" content="Monitoreo,lago,lago llanquihue,lago en linea,información,ambiental,evaluación,tecnologías,condiciones,ambientales,región,los lagos,osorno,profundidad,182m,hidrografia,glaciar,chile,general carrera,rios,afluentes,volcan,calbuco,tepu,maullín,puerto varas,puerto montt,cordillera,andes,clima,selva valdiviana,frutillar,las cascadas,agroquimicos,pisciculturas,más azul,patagonia,universidad,san sebastian">
    <meta name="Resource-type" content="Document">
    <meta name="DateCreated" content="Sat, 1 January 2022 00:00:00 GMT-4">
    <meta name="Revisit-after" content="4 days">
    <meta name="robots" content="ALL">
	
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    
	<!-- Fonts -->
    <link rel='stylesheet' href='assets/fonts/blogger_fonts.css'>
    <link rel="preload" href="assets/fonts/BloggerSans.woff2" as="font" type="font/woff2" crossorigin>
	
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 
	<!-- FONT AWESOME-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
	<!-- Custome CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
	
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
    <section>
	    <?php include('assets/newmenumobile.php') ?>
    </section>

    <section id="contenidos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center titulo-contacto">
                    <h2>CONTACTO</h2>
	                <p>Escríbenos</p>
                </div>
                <div class="col-12 formulario-contacto">
                    <div class="formulario">
	                    <form action="#" method="post" id="contact_form">
		                    <div class="contact-form">
			                    <div class="form-group">
				                    <div class="col-12">
					                    <input type="text" class="form-control" id="fname" placeholder="Nombre Completo" name="fname">
				                    </div>
			                    </div>
			
			                    <div class="form-group">
				                    <div class="col-12">
					                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
				                    </div>
			                    </div>
			
			                    <div class="form-group col-12 seleccion">
				                    <select class="form-control" id="seeAnotherField">
					                    <option>Seleccione el asunto</option>
					                    <option value="no" v='Consulta general'>Consulta general</option>
					                    <option value="yes" v='Aporta información'>Aporta información</option>
					                    <!-- <input type="text" class="form-control" id="subject" placeholder="Asunto" name="subject"> -->
				                    </select>
			                    </div>
			
			                    <div class="form-group col-12 seleccion" id="otherFieldDiv">
				                    <select class="form-control" id="otherField">
					                    <option>Seleccione la opción</option>
					                    <option value="Tecnologias" v='Tecnologias'>Tecnologias</option>
					                    <option value="Documentos complementarios" v='Documentos complementarios'>Documentos complementarios</option>
				                    </select>
			                    </div>
			
			                    <div class="form-group">
				                    <div class="col-12">
					                    <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Mensaje"></textarea>
				                    </div>
			                    </div>
			
			                    <div class="form-group">
				                    <div class="col-12 boton text-center">
					                    <button id='send_btn' type="submit" class="btn btn-default">Enviar</button>
				                    </div>
			                    </div>
			
			                    <div id="message" class="alert alert-danger alert-dismissible fade"></div>
		
		                    </div>
	                    </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <?php include('assets/menudown.php') ?>
    </section>

    <!-- Optional JavaScript; choose one -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 3: Other JS -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    
    <script src="../assets/mail/js/validation.js"></script>

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
	
	    $('#send_btn').click(function() {
		
		    var fname = $('#fname').val();
		    var email = $('#email').val();
		    var seeAnotherField = $('#seeAnotherField').val();
		    var otherField = $('#otherField').val();
		    var comment = $('#comment').val();
		    var asunto = $('#seeAnotherField option:selected').attr('v');
		    var subasunto = $('#otherField option:selected').attr('v');
		    $.ajax({
			    url: '../assets/mail/send_mail.php',
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
					    $('#fname').val('');
					    $('#email').val('');
					    $('#seeAnotherField').val('');
					    $('#otherField').val('');
					    $('#comment').val('');
					    $('#seeAnotherField').val('');
				    } else {
					
				    }
			    },
			    error: function(response) {
				    alert(response);
			    }
		    });
	    })
    </script>

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

</body>