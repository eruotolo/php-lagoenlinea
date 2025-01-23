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
            document.location = "/mobile/";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Biblioteca</title>

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

<section id="contenido-home" class="md:py-[50px] 3xl:py-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">BIBLIOTECA</h4>
            <h5 class="subtitulos">Documentos Complementarios</h5>
        </div>
    </div>
    <div class="container mx-auto md:py-[50px] 3xl:py-[100px]">
        <div class="flex flex-row">
            <a href="biblioteca.php" class="md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] border-[1px] border-azul bg-azul text-white pr-[16px] pl-[10px] py-[6px] rounded-[20px] hover:text-azul hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                Volver</a>
        </div>
    </div>
    <?php
    include('admin/include/conf/dbselect.php');
    $sql = "SELECT * FROM `documentos-complementarios` WHERE ID = '{$_GET['id']}'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result)) {
        $Decripcion = $row['Decripcion'];
        $Titulo = $row['Titulo'];
        $ImagenDestacada = $row['ImagenDestacada'];
        $FechaPublicacion = $row['FechaPublicacion'];
        $CampoLink = $row['CampoLink'];
        $ArchivoDescargar = $row['ArchivoDescargar'];
        $ImagenDestacada = $row['ImagenDestacada'];
        $TipoRecurso = $row['TipoRecurso'];
        $Autores = $row['Autores'];
    }

    $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'institucion'";
    $result = mysql_query($sql);
    $institucion_array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $institucion_array[] = $row['Valor'];
    }
    $institucion = implode("<br>", $institucion_array);

    $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'idioma'";
    $result = mysql_query($sql);
    $idioma_array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $idioma_array[] = $row['Valor'];
    }
    $idioma = implode("<br>", $idioma_array);

    $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'materia'";
    $result = mysql_query($sql);
    $materia_array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $materia_array[] = "'" . $row['Valor'] . "'";
    }
    $materia = implode(",", $materia_array);

    $sql = "SELECT distinct DocumentoID 
				FROM filtros
				WHERE  1 AND DocumentoID <> '{$_GET['id']}'
				AND (Filtro = 'materia' AND Valor IN ($materia)) ";

    $result = mysql_query($sql);
    $docs_array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $docs_array[] = $row['DocumentoID'];
    }

    $docs_array_implode = implode(",", $docs_array);


    ?>
    <div class="container mx-auto">
        <div class='grid grid-cols-3 libro-contenido'>
            <div class="port-libro flex justify-center mr-[15px]">
                <img src='<?php echo "admin/api/{$ImagenDestacada}" ?>' class='rounded-[10px] md:h-[400px] md:w-auto' alt='Caratula Libro'>
            </div>
            <div class="flex flex-col pr-[15px]">
                <h5 class="uppercase md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-bold mb-[10px]"><?php echo $TipoRecurso ?></h5>
                <h3 class="text-azul font-light md:text-[20px] md:leading-[26px] 3xl:text-[22px] 3xl:leading-[28px]"><?php echo $Titulo  ?></h3>
                <hr class='line-preview h-[3px] w-[100%] border-[1px] border-[#d5d7da] bg-[#d5d7da] my-[20px]' >
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light text-[#878787] mb-[3px] mt-[10px]'>Autores:</p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light my-[2px]'><?php echo $Autores ?></p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light text-[#878787] mb-[3px] mt-[10px]'>Institución:</p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light my-[2px]'><?php echo $institucion ?></p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light text-[#878787] mb-[3px] mt-[10px]'>Fecha Publicacion:</p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light my-[2px]'><?php echo $FechaPublicacion  ?></p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light text-[#878787] mb-[3px] mt-[10px]'>Idioma:</p>
                <p class='md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] font-light my-[2px]'><?php echo $idioma ?></p>
            </div>
            <div class="flex flex-col">
                <h6><?php echo substr ($Decripcion, 0, 300)   ?>...</h6>

                <div class="icon-link mt-[30px] border-t-[1px] border-b-[1px] border-amarillo py-[10px]">
                    <?php
                    if ($CampoLink == '') {
                        ?>
                        <h5 class='md:text-[20px] text-[#dddddd] font-light'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5 inline-block mr-[8px]'>
                                <path stroke-linecap='round' stroke-linejoin='round' d='M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244' />
                            </svg>
                            Ver Documento</h5>
                        <?php
                    } else {
                        ?>
                        <a href='<?php echo $CampoLink ?>' target='_blank'>
                            <h5 class='md:text-[20px] text-[#878787] font-light'>
                                <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5 inline-block mr-[8px]'>
                                    <path stroke-linecap='round' stroke-linejoin='round' d='M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244' />
                                </svg>
                                Ver Documento</h5>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class='border-b-[1px] border-amarillo py-[10px]'>
                    <?php
                    if ($ArchivoDescargar == '') {
                        ?>
                        <h5 class='md:text-[20px] text-[#dddddd] font-light'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5 inline-block mr-[8px]'>
                                <path stroke-linecap='round' stroke-linejoin='round' d='M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3' />
                            </svg>
                            Descargar Documento</h5>
                        <?php
                    } else {
                        ?>
                        <a href='admin/api/<?php echo $ArchivoDescargar ?>' target='_blank'>
                            <h5 class='md:text-[20px] text-[#878787] font-light'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-5 inline-block mr-[8px]'>
                                    <path stroke-linecap='round' stroke-linejoin='round' d='M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3' />
                                </svg> Descargar Documento</h5>
                        </a>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <div class="container mx-auto relacionados md:py-[50px] 3xl:py-[100px]">
        <div class="container mx-auto">
            <div class="flex flex-col items-center">
                <h4 class="titulos">BIBLIOTECA</h4>
                <h5 class="subtitulos">Documentos Relacionados</h5>
            </div>
        </div>
        <div class="container mx-auto md:py-[50px] 3xl:py-[100px]">
            <div class="flex flex-row">
                <?php
                $sql = "SELECT *, YEAR(FechaPublicacion) as Ano FROM `documentos-complementarios` WHERE ID IN ($docs_array_implode) LIMIT 3";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)) {

                    $sql1 = "SELECT * FROM filtros WHERE DocumentoID = '{$row['ID']}' and Filtro = 'institucion'";
                    $result1 = mysql_query($sql1);
                    $institucion_array = array();
                    while ($row1 = mysql_fetch_assoc($result1)) {
                        $institucion_array[] = $row1['Valor'];
                    }
                    $institucion = implode("<br>", $institucion_array);


                    echo "<div class='w-4/12 item-relacionado'>
                            <h6 class='uppercase font-medium md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] mb-[10px]'>{$row['TipoRecurso']}</h6>
                            <h5 class='text-azul md:text-[18px] md:leading-[22px] 3xl:text-[20px] 3xl:leading-[26px] font-light h-[80px]'>{$row['Titulo']}</h5>
                            <hr class='h-[2px] w-[100%] border-[1px] border-[#d5d7da] bg-[#d5d7da] my-[20px]'>
                            <div class='flex flex-col md:h-[70px]'>
                                <p class='rela-autor md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] py-[4px] font-light italic'>{$row['Autores']}</p>
                                <p class='rela-inst  md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] py-[4px] font-light'>$institucion</p>
                            </div>
                            <div class='flex flex-row justify-between mt-[20px]'>
                                <p class='text-[#878787] font-light text-[16px]'>{$row['Ano']}</p>
                                <button class='link text-[16px] leading-[16px] text-azul border-azul border-[1px] px-[15px] py-[2px] rounded-[20px] hover:bg-azul hover:text-white' id='{$row['ID']}'>Ver más</button>
                            </div>
                        </div>";
                        }
                    ?>
            </div>
        </div>
    </div>
    
</section>

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>
<!-------------------------- Option 3: Other JS ------------------------------->
<script src="assets/js/repositorio.js"></script>

<script>
    /* $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });*/
    $(document).ready(function() {

        $('.link').click(function() {
            window.location.href = 'biblioteca-view.php?id=' + $(this).attr('id');
        })

        $('#copylink').click(function() {
            var href = $(this).attr('href');
            navigator.clipboard.writeText(href).then(() => {
                alert("Enlace copiado al portapapeles");
            })
                .catch(err => {
                    console.log('No se puso copiar al portapapeles', err);
                })
            return false;

        })


        function getSearchParameters() {
            var prmstr = window.location.search.substr(1);
            return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
        }

        function transformToAssocArray(prmstr) {
            var params = {};
            var prmarr = prmstr.split("&");
            for (var i = 0; i < prmarr.length; i++) {
                var tmparr = prmarr[i].split("=");
                params[tmparr[0]] = tmparr[1];
            }
            return params;
        }

        var params = getSearchParameters();

        $('.backbutton').click(function() {
            var key = 'id';
            var url = 'biblioteca.php';
            var i = 0;
            Object.keys(params).forEach(fkey => {

                if (key != fkey) {
                    if (i != 0) {
                        url = url + '&' + fkey + '=' + params[fkey];
                    } else {
                        url = url + '?' + fkey + '=' + params[fkey];
                    }
                    i = i + 1;
                }

            });
            window.location.href = url;
        })
    });
</script>

</body>
</html>