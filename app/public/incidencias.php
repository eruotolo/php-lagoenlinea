<?php
	include('admin/include/conf/dbselect.php');
?>
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
            document.location = "/mobile/incidencias.php";
        }
    </script>

    <meta charset="UTF-8">
    
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Incidencias</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/lightbox.min.css">

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

<!------------------------------- IN CABEZAL DE LA PAGINA ------------------------------>
<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!----------------------------- END CABEZAL DE LA PAGINA ------------------------------->
<?php
if ($_GET['iid'] == '') {
?>
<section id="contenido-home" class="md:py-[50px] 3xl:py-[100px]">

    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">INCIDENCIAS</h4>
            <h5 class="subtitulos">Ciencia ciudadana</h5>
        </div>
    </div>

    <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
        <div class="flex flex-col justify-center content-center items-center">
            <div class="w-8/12">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px] text-center">El objetivo de esta sección es conocer y reportar episodios de perturbación de las condiciones naturales del lago Llanquihue. Este no es un lugar para hacer denuncias, sino que es un espacio de ciencia ciudadana, en el que cualquier persona puede compartir sus observaciones.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px] text-center">¿Quieres hacer una denuncia formal?
                    <button data-modal-target="large-modal" data-modal-toggle="large-modal" class="hover:text-azul">Dirígete a las instituciones pertinentes</button></p>
            </div>
        </div>
    </div>

    <!-- MODAL - Dirígete a las instituciones pertinentes  -->

    <div id="large-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full md:max-w-5xl 3xl:max-w-6xl md:h-[94%]">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-lg">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="large-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-[50px] grid grid-cols-2">
                    <div class="px-[15px]">
                        <p class="text-[18px] font-normal pt-[20px]">Superintendencia de Medio Ambiente (SMA)</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Descarga de residuos líquidos contraviniendo alguna normativa de emisión o calidad de aguas.</li>
                            <li class="text-[14px] font-light">Drenaje o desecación de humedales.</li>
                            <li class="text-[14px] font-light">Ejecución de actividades que puedan alterar física o químicamente a humedales urbanos.</li>
                            <li class="text-[14px] font-light">Aplicación masiva de productos químicos en humedales.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[20px]">Superintendencia de Servicios Sanitarios (SISS)</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Descarga de residuos líquidos de empresas de servicios sanitarios.</li>
                            <li class="text-[14px] font-light">Descarga de aliviaderos de tormenta.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[20px]">Seremi de Salud</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Descarga de aguas servidas y residuos industriales.</li>
                            <li class="text-[14px] font-light">Aplicación de pesticidas.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[20px]">Dirección General de Aguas</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Extracción no autorizada de agua.</li>
                            <li class="text-[14px] font-light">Contaminación de cuerpos de agua.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[20px]">Servicio Agrícola Gandero (SAG)</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Afectación de fauna silvestre.</li>
                            <li class="text-[14px] font-light">Uso de pesticidas y fertilizantes.</li>
                        </ul>
                    </div>
                    <div class="px-[15px]">
                        <p class="text-[18px] font-normal pt-[16px]">Corporación Nacional Forestal (CONAF)</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Corte de vegetación.</li>
                            <li class="text-[14px] font-light">Actividades que afecten a áreas ubicadas en unidades SNASPE.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[16px]">Sernapesca</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Afectación de fauna y recursos hidrobiológicos.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[16px]">Bienes Nacionales</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Actividades que afecten bienes nacionales de uso público.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[16px]">Consejo de Monumentos Nacionales (CMN)</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Actividades que afecten áreas ubicadas en Santuarios de la Naturaleza o Zonas Típicas.</li>
                        </ul>
                        <p class="text-[18px] font-normal pt-[16px]">Municipalidades</p>
                        <ul class="dashed-1 pl-[15px]">
                            <li class="text-[14px] font-light">Basurales.</li>
                            <li class="text-[14px] font-light">Rellenos.</li>
                            <li class="text-[14px] font-light">Actividades que afecten humedales regulados por ordenanzas municipales.</li>
                            <li class="text-[14px] font-light">Animales domésticos abandonados.</li>
                        </ul>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex flex-row justify-center py-[20px]">
                    <button data-modal-hide="large-modal" type="button" class="md:text-[16px] md:leading-[16px] font-light text-center w-[150px] px-[10px] py-[12px] border-[1px] border-amarillo mx-[5px] rounded-[25px] hover:bg-amarillo">Volver</button>
                    <a class="md:text-[16px] md:leading-[16px] font-light text-center w-[150px] px-[10px] py-[12px] border-[1px] border-amarillo mx-[5px] rounded-[25px] bg-amarillo hover:bg-white" href="https://gefhumedales.mma.gob.cl/wp-content/uploads/2022/02/Guia-de-denuncia-humedales-1.pdf" target="_blank">Más información</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="contenido-incidencia" class="md:mb-[60px] 3xl:mb-[100px]">

    <div class="container mx-auto">
        <div class="flex flex-row items-center justify-center">
            <button id='listado' class='w-[150px] font-light text-[16px] allbuttons graphbutton-1 graphbuttonclicked-1 incidencia-listado'>Ver listado</button>
            <button id='mapa'    class='w-[150px] font-light text-[16px] allbuttons graphbutton-1 incidencia-mapa'>Ver Mapa</button>
        </div>
    </div>

    <div class="container mx-auto py-[50px]">
        <div class="flex flex-row justify-end">
            <button id='nuevoincidente' class="border-[1px] border-azul md:text-[16px] leading-[16px] font-normal px-[35px] md:py-[8px] 3xl:py-[10px] rounded-[25px] hover:bg-azul hover:text-white">AGREGAR INCIDENCIA +</button>
        </div>
    </div>
    <!--------------------- MAPA INICIATIVA --------------------->
    <div id='mapadiv' class="container mx-auto sectionsdiv" style='display:none'>
        <div id="google-map-div" style="width: 100%; height: 600px"></div>
    </div>
    <!--------------------- GRILLA INICIATIVA ------------------->
    <div id='listadodiv' class="container mx-auto sectionsdiv tab-incidencias">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray-700 uppercase border-[1px] border-azul bg-azul rounded-[20px]">
                    <tr>
                        <th scope="col" class="px-6 py-3 md:text-[16px] 3xl:text-[18px] text-white font-medium uppercase">
                            TÍTULO
                        </th>
                        <th scope="col" class="px-6 py-3 md:text-[16px] 3xl:text-[18px] text-white font-medium uppercase">
                            FECHA
                        </th>
                        <th scope="col" class="px-6 py-3 md:text-[16px] 3xl:text-[18px] text-white font-medium uppercase">
                            CATEGORÍA
                        </th>
                        <th scope="col" class="px-6 py-3 md:text-[16px] 3xl:text-[18px] text-white font-medium uppercase">
                            LUGAR
                        </th>
                        <th scope="col" class="px-6 py-3 md:text-[16px] 3xl:text-[18px] text-white font-medium uppercase">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('admin/include/conf/dbselect.php');
                    $sql = "SELECT *, DATE(Fecha) as DateFecha FROM incidentes WHERE Estado = 'Publicado'";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr class='bg-white border-b border-azul'>";
                            echo "<td class='px-6 py-4 md:text-[16px] 3xl:text-[18px] font-medium'>{$row['Nombre']}</td>";
                            echo "<td class='px-6 py-4 md:text-[16px] 3xl:text-[18px] font-light text-[#707070]'>{$row['DateFecha']}</td>";
                            echo "<td class='px-6 py-4 md:text-[16px] 3xl:text-[18px] font-normal text-azul'>{$row['Categoria']}</td>";
                            echo "<td class='px-6 py-4 md:text-[16px] 3xl:text-[18px] font-normal'>{$row['Lugar']}</td>";
                            echo "<td class='px-6 py-4'><button class='moreinfo bg-azul text-[15px] leading-[15px] text-white h-[20px] w-[20px] rounded-[50%] pt-[3px] border-[1px] border-azul hover:text-azul hover:bg-white' incidenteid='{$row['ID']}'>+</button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--------------------- NUEVA INICIATIVA ------------------->
    <div id='nuevoincidentediv' class="container mx-auto sectionsdiv form-inicencias md:mb-[50px] 3xl:mb-[60px]" style="display: none">
        <div class="flex flex-col justify-center items-center pb-[40px]">
            <h3 class="titulos">AGREGAR INCIDENCIA</h3>
        </div>
        <div class="grid grid-cols-3">
            <div class="flex flex-col">
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>TÍTULO </label><br>
                    <input type="text" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] text-azul px-[10px] py-[6px]" id='nombre' name='nombre'/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>AUTOR <small>(Opcional)</small></label><br>
                    <input type="text" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] text-azul px-[10px] py-[6px]" id='autor' name='autor'/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>CORREO ELECTRÓNICO <small>(Opcional)</small></label><br>
                    <input type="text" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] text-azul px-[10px] py-[6px]" id='email' name='email'/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>LUGAR</label><br>
                    <input type="text" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] text-azul px-[10px] py-[6px]" id='lugar' name='lugar'/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>CATEGORÍA</label><br>
                    <select name="categoria" class="selectpicker border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] px-[10px] py-[6px]" data-title="Seleccione una categoria" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='categoria'>
                        <option value="">Selecciona una categoría</option>
                        <option value="Vertido/Descarga">Vertido/Descarga</option>
                        <option value="Floracion">Floración</option>
                        <option value="Turbidez">Turbidez</option>
                        <option value="Residuos Sólidos">Residuos Sólidos</option>
                        <option value="Relleno">Relleno</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>DESCRIPCIÓN</label><br>
                    <textarea rows="7" id='descripcion' style='width:100%' class="border-[1px] border-azul rounded-[8px] md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] px-[10px] py-[6px]"></textarea>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>FOTO 1</label><br>
                    <input type="file" id="file1" name="file1" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] px-[10px] py-[6px]"/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>FOTO 2</label><br>
                    <input type="file" id="file2" name="file2" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] px-[10px] py-[6px]"/>
                </div>
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <label>FOTO 3</label><br>
                    <input type="file" id="file3" name="file3" class="border-[1px] border-azul rounded-[8px] w-full md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] px-[10px] py-[6px]"/>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="form-group item-incidencias px-[30px] py-[10px]">
                    <input type='hidden' id='txtlat'>
                    <input type='hidden' id='txtlng'>
                    <label>UBICA EL PUNTO EN EL MAPA</label><br>
                    <div id="google-map-div2" class="w-full md:h-[380px] 3xl:h-[400px]"></div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between px-[30px] py-[30px]">
            <a href='#' class='backincidentes bg-amarillo md:text-[16px] md:leading-[20px] 3xl:text-[18px] 3xl:leading-[20px] w-[120px] pt-[8px] pb-[6px] rounded-[20px] text-white text-center border-[1px] border-amarillo hover:bg-white hover:text-oscuro'>VOLVER</a>
            <button id='subir' class="bg-azul md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] w-[120px] py-[8px] rounded-[20px] text-white border-[1px] border-azul hover:bg-white hover:text-azul">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                </svg>
                SUBIR
            </button>
        </div>
    </div>
    <!--------------------- VER INICIATIVA ---------------------->
    <?php
	} else {
	$sql = "SELECT *, DATE(Fecha) as fec FROM incidentes WHERE ID = '{$_GET['iid']}'";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$Nombre = $row['Nombre'];
		$Lugar = $row['Lugar'];
		$fec = $row['fec'];
		$Descripcion = $row['Descripcion'];
		$Categoria = $row['Categoria'];
		$Lat = $row['Lat'];
		$Lng = $row['Lng'];
		$File1 = $row['File1'];
		$File2 = $row['File2'];
		$File3 = $row['File3'];
		$Autor = $row['Autor'];
	}
	?>
    <div class="container mx-auto md:py-[50px] 3xl:py-[100px]">
        <div class="flex flex-col items-center">
            <h4 class="titulos">INCIDENCIAS</h4>
        </div>
        <div class="grid grid-cols-2 md:pt-[50px] 3xl:pt-[60px]">
            <div class='individual-maps'>
                <div id="google-map-div" style="width: auto; height: 520px"></div>
            </div>
            <div class="flex flex-col pl-[20px]">
                <p class="bg-azul text-white md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] w-[150px] text-center md:py-[6px] 3xl:py-[8px] rounded-[20px]"><?php echo $Categoria ?></p>
                <h4 class="cat-nombre md:text-[22px] md:leading-[22px] 3xl:text-[24px] 3xl:text-leading-[24px] font-medium md:py-[30px] 3xl:py-[40px]"><?php echo $Nombre ?></h4>
                <p class="md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] md:pb-[8px] 3xl:pb-[10px]"><b>Lugar de la Incidencia:</b> <?php echo $Lugar ?></p>
                <p class="md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] md:py-[8px] 3xl:py-[10px]"><b>Fecha de la Incidencia: </b><?php echo $fec ?></p>
                <p class="md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] md:py-[8px] 3xl:py-[10px]"><b>Autor: </b><?php echo $Autor ?></p>
                <p class="md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] md:py-[8px] 3xl:py-[10px]"><b>Descripción:</b></p>
                <div class="cat-descripcion md:text-[16px] md:leading-[22px] 3xl:text-[18px] 3xl:leading-[26px] "><?php echo $Descripcion ?></div>

                <div class="grid grid-cols-3 mt-[20px]">
                    <?php
                    if ($File1 <> '') {
                        echo "<a class='example-image-link object-cover' href='api/$File1'  data-lightbox='example-set'><img src='api/$File1' style='object-fit: contain' class='object-cover w-[96%] h-auto'></a>";
                    }
                    ?>
                    <?php
                    if ($File2 <> '') {
                        echo "<a class='example-image-link object-cover' href='api/$File2' data-lightbox='example-set'><img src='api/$File2' style='object-fit: contain' class='object-cover w-[96%] h-auto'></a>";
                    }
                    ?>
                    <?php
                    if ($File3 <> '') {
                        echo "<a class='example-image-link object-cover' href='api/$File3' data-lightbox='example-set'><img src='api/$File3' style='object-fit: contain' class='object-cover w-[96%] h-auto'></a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <a href='#' id='backlink' class="border-[1px] border-amarillo md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] md:w-[100px] 3xl:w-[120px] text-center rounded-[20px] md:py-[8px] 3xl:py-[10px] hover:bg-amarillo mt-[20px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                Volver
            </a>
        </div>
    </div>
    <?php
    }
    ?>

</section>


<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>

<script src="assets/js/monitor.js"></script>

<?php
if ($_GET['iid'] == '') {
    ?>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.backincidentes').click(function () {
                $('.sectionsdiv').hide();
                $('#listadodiv').show();
                $('.btn-nuevo-inicidente').show();
                $('.btn-incidencias').show();
            })

            $('.moreinfo').click(function () {
                /*$('.sectionsdiv').hide();
                $('#verincidentediv').show();	*/
                var iid = $(this).attr('incidenteid');
                window.location.href = 'incidencias.php?iid=' + iid;
            })

            $('#nuevoincidente').click(function () {
                $('.sectionsdiv').hide();
                $('.btn-nuevo-inicidente').hide();
                $('.btn-incidencias').hide();
                $('#nuevoincidentediv').show();
            })

            $('.allbuttons').click(function() {
                $('.allbuttons').removeClass("graphbutton-1");
                $('.allbuttons').removeClass("graphbuttonclicked-1");
                $('.allbuttons').addClass("graphbutton-1");
                $(this).addClass("graphbuttonclicked-1");
                var id = $(this).attr('id');

                $('.sectionsdiv').hide();
                if (id == 'listado') {
                    $('#listadodiv').show();
                } else if (id == 'mapa') {
                    $('#mapadiv').show();
                    map.setZoom(map.getZoom());
                }
            });
			


        });
    </script>
    <script>
        var map, map1;

        function initMap() {
            var myzoom = 11;
            var myLatLng = {
                lat: -41.3207871,
                lng: -72.9656381
            };
            map = new google.maps.Map(document.getElementById('google-map-div'), {
                center: myLatLng,
                zoom: myzoom
            });
            var markers = []; //some array;

            <?php

            $sql = "SELECT *, DATE(Fecha) as fec FROM incidentes WHERE Estado = 'Publicado'";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {
            $Lng = $row['Lng'];
            $Lat = $row['Lat'];
            $Nombre = $row['Nombre'];
            if ($Lng <> '' && $Lat <> '') {
            ?>
            var myLatLng = {
                lat: <?php echo $Lat ?>,
                lng: <?php echo $Lng ?>
            };
            var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: myLatLng,
                draggable: false,
                map: map,
                icon: {
                    url: "assets/img/incidencias/pin-mapa-incidencias.svg",
                    scaledSize: new google.maps.Size(39, 72)
                },
            });
            addInfoWindow(marker, "<b><?php echo $Nombre ?></b><br>Fecha: <?php echo $row['fec'] ?><br>Lugar: <?php echo $row['Lugar'] ?><br>Categoria: <?php echo $row['Categoria'] ?><br><a href='incidencias.php?iid=<?php echo $row['ID'] ?>'>Ver Incidencia</a>");
            markers.push(marker);
            <?php
            }
            }
            ?>

            var bounds = new google.maps.LatLngBounds();
            for(i=0;i<markers.length;i++) {
                bounds.extend(markers[i].getPosition());
            }
            if (markers.length > 0) {
                map.setCenter(bounds.getCenter());
                map.fitBounds(bounds);
            }

            function addInfoWindow(marker, message) {
                var infoWindow = new google.maps.InfoWindow({
                    content: message
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.open(map, marker);
                });
            }

            var myzoom1 = 13;
            var myLatLng1 = {
                lat: -41.3207871,
                lng: -72.9656381
            };
            map1 = new google.maps.Map(document.getElementById('google-map-div2'), {
                center: myLatLng1,
                zoom: myzoom1
            });

            var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: {lat:0,lng:0},
                draggable: false,
                map: map1,
                icon: {
                    url: "assets/img/incidencias/pin-mapa-incidencias.svg",
                    scaledSize: new google.maps.Size(39, 72)
                },
            });

            google.maps.event.addListener(map1, 'click', function(event) {
                placeMarker(event.latLng);
                $('#txtlat').html(event.latLng.lat().toFixed(7));
                $('#txtlng').html(event.latLng.lng().toFixed(7));
            });

            google.maps.event.addListener(marker, 'dragend', function(evt)
            {
                $('#txtlat').html(evt.latLng.lat().toFixed(7));
                $('#txtlng').html(evt.latLng.lng().toFixed(7));
            });

            function placeMarker(location) {
                marker.setPosition(location)
                $('#txtlat').val(location.lat().toFixed(7));
                $('#txtlng').val(location.lng().toFixed(7));
            }
        }
    </script>

    <script>
	
        $('#subir').click(function () {

            function validateEmail(email)
            {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            var nombre = $('#nombre').val();
            var autor = $('#autor').val();
            var email = $('#email').val();
            var lugar = $('#lugar').val();
            var categoria = $('#categoria').val();
            var descripcion = $('#descripcion').val();
            var txtlat = $('#txtlat').val();
            var txtlng = $('#txtlng').val();

            var file1 = $('#file1').val();
            var file2 = $('#file2').val();
            var file3 = $('#file3').val();

            var fd = new FormData();
            var f1 = $('#file1')[0].files;
            var f2 = $('#file2')[0].files;
            var f3 = $('#file3')[0].files;

            if (file1 != '') {
                if (f1[0].size > 2000000) {
                    alert('Foto 1 muy grande. No debe superar los  2mb');
                    return false;
                }
            }

            if (file2 != '') {
                if (f2[0].size > 2000000) {
                    alert('Foto 2 muy grande. No debe superar los  2mb');
                    return false;
                }
            }

            if (file3 != '') {
                if (f3[0].size > 2000000) {
                    alert('Foto 3 muy grande. No debe superar los  2mb');
                    return false;
                }
            }

            if (nombre == '') {
                alert("Ingrese Nombre");
                return false;
            }

            if (email != '' && !validateEmail(email)) {
                alert("E-mail invalido");
                return false;
            }

            if (lugar == '') {
                alert("Ingrese Lugar");
                return false;
            }

            if (categoria == '') {
                alert("Ingrese Categoria");
                return false;
            }

            if (descripcion == '') {
                alert("Ingrese Descripcion");
                return false;
            }

            if (txtlat == '' || txtlng == '' ) {
                alert("Ingrese Ubicacion Valida");
                return false;
            }

            fd.append('file1',f1[0]);
            fd.append('file2',f2[0]);
            fd.append('file3',f3[0]);
            fd.append('nombre',nombre);
            fd.append('autor',autor);
            fd.append('email',email);
            fd.append('lugar',lugar);
            fd.append('categoria',categoria);
            fd.append('descripcion',descripcion);
            fd.append('txtlat',txtlat);
            fd.append('txtlng',txtlng);

            $.ajax({
                url: "api/add-incident.php",
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(output){
					
                    var data = JSON.parse(output);
                    if (data.status == 1) {
						alert("La incidencia se cargo correctamente.");
                        location.reload();
						//$('#allright').modal('show');

                    } else if (data.status == 0) {
                        alert(data.error);
                    }
                },
                error: function(output,e,f){
                    console.log(e);
                }
            });
        })

        $('#closemodal').click(function () {
            location.reload();
        })
    </script>
<?php
} else {
?>

    <script>
        $('#backlink').click(function () {
            history.back();
        })
        var map;

        function initMap() {
            var myzoom = 8;
            var myLatLng = {
                lat: <?php echo $Lat ?>,
                lng: <?php echo $Lng ?>
            };
            map = new google.maps.Map(document.getElementById('google-map-div'), {
                center: myLatLng,
                zoom: myzoom
            });
            var markers = []; //some array;

            var myLatLng = {
                lat: <?php echo $Lat ?>,
                lng: <?php echo $Lng ?>
            };
            var marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: myLatLng,
                draggable: false,
                map: map,
                icon: {
                    url: "assets/img/incidencias/pin-mapa-incidencias.svg",
                    scaledSize: new google.maps.Size(39, 72)
                },
            });

            markers.push(marker);

        }
    </script>
    <?php
}
?>

</body>
</html>