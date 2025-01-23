-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-01-2025 a las 17:55:17
-- Versión del servidor: 10.6.20-MariaDB-cll-lve
-- Versión de PHP: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lagoenli_lago`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos-complementarios`
--

CREATE TABLE `documentos-complementarios` (
  `ID` int(11) NOT NULL,
  `Decripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Titulo` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ImagenDestacada` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Autores` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FechaPublicacion` date DEFAULT NULL,
  `CampoLink` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ArchivoDescargar` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `TipoRecurso` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `documentos-complementarios`
--

INSERT INTO `documentos-complementarios` (`ID`, `Decripcion`, `Titulo`, `ImagenDestacada`, `Autores`, `FechaPublicacion`, `CampoLink`, `ArchivoDescargar`, `TipoRecurso`) VALUES
(19, 'Se simuló la hidrodinámica del lago Llanquihue con el modelo en tres dimensiones Delft3D-FLOW, entre agosto de 2014 y marzo del 2016, con el fin de estudiar las ondas internas afectadas por la rotaci?n terrestre y conocer cómo afecta en ellas la variación de la estratificación térmica.', 'Modelación hidrodinámica del Lago Llanquihue', 'uploads/books/caratula_62ab688d5c78e1.33745796.png', 'Javiera Abarca Mesa', '2018-01-01', 'https://repositorio.uchile.cl/handle/2250/152298', '', 'Artículo académico'),
(20, 'Este estudió logró determinar la relación entre el nivel de agua de los lagos Todos Los Santos, Llanquihue y Ranco, y conductores climáticos entre los años 2002 y 2018, dando como resultado que los periodos de crecida y estiajes de los lagos presentan una tendencia positiva con el aumento de actividad del fenómeno ENSO. Se analizó la variación lineal mediante un análisis de tendencia; mediante la Transformada Discreta de Fourier se realizó un análisis cíclico. Además, se correlacionó el nivel de agua de los lagos con variables climáticas como precipitaciones y temperaturas, y el índice ONI.', 'Análisis temporal del nivel de agua de los lagos: Todos los Santos, Llanquihue y Ranco, basado en datos satelitales', 'uploads/books/caratula_62ab703fa5e663.27548702.png', 'Alvaro Ortíz Barría', '2020-04-01', 'http://repositorio.udec.cl/jspui/bitstream/11594/1448/1/An%C3%A1lisis%20temporal%20del%20nivel%20del%20agua%20de%20los%20lagos%2C%20Todos%20los%20Santos%2C%20Llanquihue%2C%20Ranco%2C%20basado%20en%20datos%20satelitales.pdf', '', 'Artículo académico'),
(21, 'El objetivo general de este estudio es disponer de una evaluación de la condición trófica de los lagos y lagunas chilenas que incluya un análisis de los cambios históricos registrados por la DGA.', 'Evaluación de la condición trófica en cuerpos lacustres', 'uploads/books/caratula_62ab7391eed5a0.28934083.png', 'Ministerio de Obras Públicas, Enlaces SPA', '2018-12-01', 'https://snia.mop.gob.cl/sad/LGO5811.pdf', '', 'Informes'),
(22, 'El Espacio Lacustre es una construcción socio temporal en un ecosistema acotado. El Llanquihue al sur de Chile es un caso singular: extenso lago de origen glaciar, cuenca asociada a dos volcanes activos, un solo desagüe natural. Reúne distintas administraciones y ciudades en su orilla, herederas de una colonización alemana en un extraordinario paisaje. El territorio habitado presenta diversos conflictos y en relación a ello se diseñan matrices de análisis y se elaboran cartografías temporales de las dimensiones ecológicas, antropológicas, económicas y de gobernanza. Los resultados promueven un modelo transversal de construcción social y ordenación sostenible del territorio bajo el concepto de Espacio Lacustre.', 'Construcción y organización de un espacio lacustre, la Cuenca y el Lago Llanquihue en el sur de Chile', 'uploads/books/caratula_62ab74e71da5d5.11188298.png', 'Claudia Castillo Haeger (CEDEUS), Mario del Castillo Oyarzún (UDP', '2017-01-01', 'https://www.researchgate.net/publication/316467032_Construccion_y_organizacion_de_un_espacio_lacustre_la_Cuenca_y_el_Lago_Llanquihue_en_el_sur_de_Chile', '', 'Artículo académico'),
(23, 'El presente informe corresponde a la 3ra y 4ta etapa del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de los principales elementos teóricos y características de tres productos del WFR/OLCI Level 2 de SENTINEL 3, que son Concentración de pigmento de algas (CHL), Concentración total de materia en suspensión (TSM_NN) y Coeficiente de atenuación difusa (KD490).', 'Caracterización de los productos de OLCI LEVEL 2 WFR de SENTINEL 3', 'uploads/books/caratula_62ab761f868b16.29218272.png', 'Gino Sandoval V. (Universidad San Sebastián)', '2021-04-01', '', 'uploads/books/book_62ab761f86b8f1.22920410.pdf', 'Informes'),
(24, 'En el presente informe se presenta una descripción de los algoritmos utilizados en el procesamiento de los datos obtenidos desde el sensor OLCI del satélite Sentinel-3, a fin de obtener los productos relacionados con la calidad de agua y posteriormente, un caso de estudio y validación.', 'Descripción de algoritmo C2RCC y Caso de Estudio/validación con Sentinel-3 WFR/OLCI Level-2', 'uploads/books/caratula_62ab77629b8059.46297110.png', 'Manuel Castro, Patricio Acevedo (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab77629bb671.23801259.pdf', 'Informes'),
(25, 'El presente informe es una parte del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de la evaluación de cinco imágenes satelitales de acceso libre con el objetivo de identificar su potencialidad para el análisis de calidad de agua en el Lago Llanquihue, esta evaluación se realizó mediante la comparación de las características de las imágenes satelitales y adicionalmente se efectuó un análisis de nubosidad que permitió ejemplificar la cantidad de días al año 2020 con baja nubosidad en la zona de estudio que permitirán obtener potenciales imágenes satelitales de buena calidad.', 'Evaluación imágenes satelitales para el análisis de calidad de agua en el Lago Llanquihue', 'uploads/books/caratula_62ab78458f0516.94434497.png', 'Gino Sandoval, Universidad San SebastiÃ¡n', '2021-03-01', '', 'uploads/books/book_62ab78458f43e5.43500768.pdf', 'Artículo académico'),
(28, 'El objetivo de este trabajo es evaluar la utilización de la Teledetección Satelital como técnica para el monitoreo de calidad de agua en lagos de la zona sur de Chile. Con el fin de orientar la búsqueda de cuáles son las plataformas y/o sensores satelitales más adecuados para las diferentes aplicaciones, como también la disponibilidad de imágenes, costos asociados y sensibilidad de los modelos en estimaciones de la calidad de agua.', 'Informe de satélites comerciales y no comerciales, sensores, bandas y otros aspectos técnicos', 'uploads/books/caratula_62ab7a2e637be4.47066533.png', 'Manuel Castro, Patricio Acevedo (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab7a2e63cb97.70692769.pdf', 'Informes'),
(27, 'El objetivo de este trabajo es evaluar la utilización de la Teledetección Satelital como técnica para el monitoreo de calidad de agua en lagos de la zona sur de Chile. Con el fin de orientar la búsqueda de cuáles son las plataformas y/o sensores satelitales más adecuados para las diferentes aplicaciones, como también la disponibilidad de imágenes, costos asociados y sensibilidad de los modelos en estimaciones de la calidad de agua.', 'Informe de satélites comerciales y no comerciales, sensores, bandas y otros aspectos técnicos', 'uploads/books/caratula_62ab799267ae31.92513318.png', 'Manuel Castro, Patricio Acevedo (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab799267f387.31097543.pdf', 'Informes'),
(29, 'El presente informe corresponde a la 2da etapa del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de los procesos generales para la definición de las fechas potenciales en se podrá descargar el producto WFR/OLCI Level 2 de SENTINEL 3.', 'Mapa de proceso para descarga OLCI LEVEL 2 WFR de SENTINEL 3 y listado de imágenes potenciales', 'uploads/books/caratula_62ab7ad0b376b0.77129819.png', 'Gino Sandoval (Universidad San Sebastián)', '2021-04-01', '', 'uploads/books/book_62ab7ad0b3ae73.14459701.pdf', 'Informes'),
(30, 'El presente informe es una parte del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de la comparación preliminar entre los datos satelitales WFR/OLCI\r\nLevel 2 de SENTINEL 3 (clorofila - turbiedad - transparencia) con datos obtenidos de terreno obtenidos y registrados en el Sistema Nacional de Información de Fiscalización Ambiental (SNIFA) para el período 2017 - 2019. Adicionalmente se trabajó con los datos de la primera campaña de\r\nterreno con datos superficiales en un análisis piloto dentro del área de vigilancia de Puerto Varas.', 'Identificación de la relación entre imágenes satelitales Sentinel 3 y muestreos de agua en el Lago Llanquihue', 'uploads/books/caratula_62ab7b778f9a36.69160774.png', 'Gino Sandoval (Universidad San Sebastián)', '2022-02-01', '', 'uploads/books/book_62ab7b778fd2a0.95597582.pdf', 'Informes'),
(31, 'Tutorial procesos básicos en SNAP con imágenes OLCI LEVEL 2 WFR de SENTINEL 3', 'Tutorial procesos básicos en SNAP con imágenes OLCI LEVEL 2 WFR de SENTINEL 3', 'uploads/books/caratula_62ab804a6be616.82632982.png', 'Gino Sandoval (Universidad San Sebastián)', '2021-04-01', '', 'uploads/books/book_62ab804a6c2c83.34916641.pdf', 'Informes'),
(32, 'Protocolo de extracción de ácidos nucleicos desde muestras de agua', 'Protocolo de extracción de ácidos nucleicos', 'uploads/books/caratula_62ab80d571c269.22538023.png', 'Daniel Medina, Catherine Opitz (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab80d57214e7.81261315.pdf', 'Informes'),
(33, 'Análisis microbiológico directo del agua para detección de E.coli y coliformes fecales.', 'Protocolo de cultivo microbiológico para detección de patógenos en el agua', 'uploads/books/caratula_62ab81c51e8498.07909822.png', 'Daniel Medina, Catherine Opitz (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab81c51ed7c3.78029252.pdf', 'Informes'),
(34, 'Protocolo para la filtración y recuperación de microorganismos en terreno', 'Protocolo para la filtración y recuperación de microorganismos en terreno', 'uploads/books/caratula_62ab826514ccf2.83364466.png', 'Daniel Medina, Catherine Opitz (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab8265151418.82048286.pdf', 'Guías o manuales'),
(35, 'Protocolo de cultivo y conteo de coliformes fecales y E. coli.', 'Protocolo de cultivo y conteo de coliformes fecales y E. coli.', 'uploads/books/caratula_62ab82f5eb5231.64263781.png', 'Daniel Medina, Catherine Opitz (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab82f5eb84a5.64772969.pdf', 'Guías o manuales'),
(37, 'Alternativas comerciales y experimentales de boyas', 'Alternativas comerciales y experimentales de boyas', 'uploads/books/caratula_62ab849ef06a37.39642816.png', 'Manuel Martínez (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab849ef0a586.28383132.pdf', 'Informes'),
(38, 'Este reporte describe el balance energético de una unidad de monitoreo remoto situada en las coordenadas 41°19???15.17??? S ??? 72°58???02.86??? W en el Lago Llanquihue. Por ser un sistema de boya y dispositivos electrónicos situados en un punto de la masa de agua, su funcionamiento dependerá de la energía solar captada, transformada y almacenada para el óptimo funcionamiento. Las figuras muestran la unidad de monitoreo remoto y una parte de los dispositivos que la componen.', 'Balance energético de la unidad de monitoreo remoto', 'uploads/books/caratula_62ab854d5ae7e9.42441463.png', 'Manuel Martínez (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab854d5b4901.22496138.pdf', 'Informes'),
(39, 'Este reporte describe el desarrollo analítico y numérico llevado a cabo para determinar el grado de estabilidad de una unidad de monitoreo remoto. Este concepto engloba los siguientes componentes: boya, instrumentos de medida de parámetros de calidad de agua, sistema transmisor de datos y batería de almacenamiento.', 'Flotabilidad de unidad de monitoreo remoto', 'uploads/books/caratula_62ab85a959ebf9.01553836.png', 'Manuel Martínez (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab85a95a1d58.85781958.pdf', 'Informes'),
(40, 'Protocolo para la filtración y recuperación de microorganismos en laboratorio', 'Protocolo para la filtración y recuperación de microorganismos en laboratorio', 'uploads/books/caratula_62ab8613b0a226.15426664.png', 'Daniel Medina, Universidad San Sebastián', '2021-01-01', '', 'uploads/books/book_62ab8613b0fd55.58714214.pdf', 'Guías o manuales'),
(41, 'Lo descrito en este reporte corresponde al análisis de correlación de parámetros de calidad de agua desarrollado en el marco del proyecto Mas-Azul. El propósito fue determinar las relaciones más fuertes entre tales parámetros para encontrar respuestas ante alteraciones de uno o varios de ellos en el seno de una masa de agua.', 'Parámetros de calidad de agua y su correlación', 'uploads/books/caratula_62ab8680838965.21874230.png', 'Manuel Martínez (Universidad San Sebastián)', '2021-01-01', '', 'uploads/books/book_62ab868083e125.05642465.pdf', 'Informes'),
(51, 'Programa de Medición y Control de la Calidad Ambiental del agua para las Normas Secundarias de Calidad Ambiental para la protección de las aguas del lago Llanquihue.', 'Programa de Medición y Control de la Calidad Ambiental del agua para las Normas Secundarias de Calidad Ambiental para la protección de las aguas del lago Llanquihue.', 'uploads/books/caratula_6321d52dc414e1.25465306.png', 'Ministerio del Medio Ambiente; Superintendencia del Medio Ambiente', '2021-03-19', 'https://www.bcn.cl/leychile/navegar?i=1157173', '', 'Publicación en medios'),
(52, 'El presente decreto establece las normas secundarias de calidad ambiental para la protección de las aguas del lago Llanquihue. El objetivo general de las mismas es mantener la calidad de las aguas del lago Llanquihue y prevenir la eutroficación antrópica, proporcionando instrumentos de gestión para aportar a la mantención de su actual condición oligotrófica.', 'Normas Secundarias de Calidad Ambiental para la protección de las aguas del Lago Llanquihue', 'uploads/books/caratula_6321d6542aeee1.97345760.png', 'Ministerio Secretaría General de la Presidencia', '2010-06-04', 'https://www.bcn.cl/leychile/navegar?idNorma=1014239&idParte=&idVersion=', '', 'Publicación en medios'),
(48, 'A partir de los datos obtenidos se pueden agrupar en 5 grupos:\r\n- Los datos obtenidos en terreno se mantienen estables en ambas fechas pero se muestra un aumento de Clorofila en los datos de WFR de Sentinel 3 (PM01 ??? PM04 ??? PM05 ??? PM09 ??? PM10)\r\n- Los datos obtenidos en terreno se mantienen estables en ambas fechas pero se muestra una disminución de Clorofila en los datos de WFR de Sentinel 3 (PM03)\r\n- Tanto los datos obtenidos en terreno como los datos de WFR de Sentinel 3 se mantienen estables (PM06 - PM08)\r\n- Existe una disminución en la concentración de Clorofila tanto en los datos obtenidos en terreno como con WFR de Sentinel 3 (PM02).\r\n- Existe un aumento en la concentración de Clorofila tanto en los datos obtenidos en terreno como con WFR de Sentinel 3 (PM07).', 'Variación de clorofila al interior de zona de vigilancia', 'uploads/books/caratula_62bca41c3e12e6.56951935.jpg', 'Gino Sandoval', '2022-06-29', '', 'uploads/books/book_62bca41c3e4db6.42686989.pdf', 'Material gráfico'),
(45, 'El presente informe es una parte del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de la comparación preliminar entre los datos satelitales WFR/OLCI Level 2 de SENTINEL 3 (clorofila - turbiedad - transparencia) con datos obtenidos de terreno obtenidos y registrados en el Sistema Nacional de Información de Fiscalización Ambiental (SNIFA)\r\npara el período 2017 - 2019. Adicionalmente se trabajó con los datos de la primera campaña de terreno con datos superficiales en un análisis piloto dentro del área de vigilancia de Puerto Varas.', 'Informe 1. Identificación de la relación entre imágenes satelitales Sentinel 3 y muestreos de agua en el Lago Llanquihue', 'uploads/books/caratula_62bc9ebd9a4bf2.01122170.jpg', 'Gino Sandoval', '2022-02-22', '', 'uploads/books/book_62bc9ebd9aa7b1.54568144.pdf', 'Informes'),
(46, 'El presente informe es una parte del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de la comparación preliminar entre los datos satelitales WFR/OLCI Level 2 de SENTINEL 3 (clorofila - turbiedad - transparencia) con datos obtenidos en las campañas de terreno del 11 de enero 2022 y 04 de marzo 2022, datos tomados de manera superficial al interior del área de vigilancia de Puerto Varas.', 'Informe 2. Identificación de la relación entre imágenes satelitales Sentinel 3 y muestreos de agua en el Lago Llanquihue', 'uploads/books/caratula_62bc9f77568670.32174455.jpg', 'Gino Sandoval', '2022-05-20', '', 'uploads/books/book_62bc9f7756b1f1.51199845.pdf', 'Informes'),
(49, 'De acuerdo a los datos WFR de Sentinel 3, se observa que entre diciembre 2017 y diciembre 2011 los peak de clorofila se dan principalmente en los períodos de mezcla (otoño - invierno), tendiendo algunas excepciones como en octubre 2019 que en todas las áreas de vigilancia se registra un aumento para el 02 de octubre 2019.\r\nDe acuerdo a los datos WFR de Sentinel 3, se observa que entre diciembre 2017 y diciembre 2011 los peak de material en suspensión (turbiedad) se dan principalmente en los períodos de estratificación (primavera ??? verano).\r\nDe acuerdo a los datos WFR de Sentinel 3, se observa que entre diciembre 2017 y diciembre 2011 que los índices de atenuación difusa no coinciden con los períodos de estratificación (primavera ??? verano) en donde existe un azimut solar mayor, esto sucede en las áreas de vigilancia de Puerto Varas, Frutillar y Octay. Solamente el área de vigilancia de Ensenada se comporta de acuerdo a lo esperado según estación astronómica.', 'Variación de clorofila, material en suspensión y transparencia según área de vigilancia Lago Llanquihue (Diciembre 2017 - Diciembre 2021)', 'uploads/books/caratula_62bca5288e0418.86803400.jpg', 'Gino Sandoval', '2022-06-29', '', 'uploads/books/book_62bca5288e3038.15267003.pdf', 'Material gráfico'),
(50, 'El presente informe es una parte del objetivo número cuatro del proyecto FIC Más azul: ???Evaluar la utilización de la teledetección como técnica para el monitoreo de calidad de agua de cuerpos lacustres???, el cual da cuenta de la evaluación técnica y económicas de los datos satelitales WFR/OLCI Level 2 de SENTINEL 3 (clorofila - turbiedad - transparencia).', 'Evaluación técnico-económica de la utilización de productos de imágenes satelitales Sentinel 3 para el seguimiento de Clorofila, Turbiedad y Transparencia en el Lago Llanquihue', 'uploads/books/caratula_62bca77f7acf12.97182149.jpg', 'Gino Sandoval', '2022-06-29', '', 'uploads/books/book_62bca77f7b1f49.28354297.pdf', 'Informes'),
(54, 'A pesar de los innumerable recursos de Chile, fundamentados en sus atractivos naturales, en su historia e importantes recursos arqueológicos y en una cultura con raíces indígenas milenarias, el patrimonio tangible e intangible ligado al agua, el patrimonio hidráulico, ha sido, poco estudiado, apenas considerado culturalmente como elemento de interés y pobremente promocionado por los organismos turísticos estatales. Situación incomprensible en un espacio en el que el control y aprovechamiento del agua mediante distintas infraestructuras e ingenios, ha sido, desde tiempos históricos, una cuestión de enorme transcendencia, tanto en los territorios de escasa e incluso nula pluviometría como en aquellos en los que los valores de precipitación son muy elevados.', 'El patrimonio hidráulico en Chile: Consideración cultural y turística', 'uploads/books/caratula_632c8404e1de89.16304679.png', 'Gregorio Castejón Porcel', '2019-11-28', 'https://doi.org/10.6018/turismo.44.404741 ', '', 'Artículo académico'),
(55, 'Los cambios en el uso de suelo que afectan directa o indirectamente la fauna dulceacuicola, son uno de los principales factores antropogenicos por los cuales la diversidad biologica mundial esta desapareciendo a elevadas tasas durante las ultimas decadas. Dentro de esta fauna se encuentran los macroinvertebrados bentonicos acuaticos, organismos que varian temporal y espacialmente debido a diversos factores, uno de los cuales son los diversos recursos alimentarios disponibles en los rios. Para esto, se analizo la distribucion, abundancia, y caracterizacion de los grupos funcionales alimentarios de macroinvertebrados, y las variables fisicas y quimicas de cuatroÂ cuencasÂ costeras del centro-sur de Chile. Un total de 104 taxa de macroinvertebrados fueron registrados, siendo los dipteros (26 taxa) el componente principal de la comunidad.', 'ComposiciÃ³n del paisaje como determinante de la diversidad y de grupos funcionales alimentarios de macroinvertebrados acuÃ¡ticos en rÃ­os de la AraucanÃ­a, Chile', 'uploads/books/caratula_632c87c3af8f18.62433646.png', 'Pablo Fierro, Carlos Bertrán, Maritza Mercado, Fernando Peña, Jaime Tapia, Enrique Hauenstein, Luciano Caputo, Luis Vargas-Chacoff', '2015-03-01', 'https://www.scielo.cl/scielo.php?script=sci_arttext&pid=S0718-560X2015000100016', '', 'Artículo académico'),
(56, 'La elaboración de la norma busca  establecer para toda esta zona un estándar regulatorio, esta será una norma de características únicas a nivel nacional porque busca expandir este instrumento de gestión ambiental considerando un tipo de ecosistema específico y de gran relevancia ecológica, socio-económica y cultural como son los lagos del norte de la Patagonia chilena', 'Ministerio del Medio Ambiente inicia elaboración de norma para proteger la calidad de las aguas de los lagos del sur de Chile', 'uploads/books/caratula_632c8a65e6d332.64438599.png', 'Ministerio del Medio Ambiente ', '2022-03-12', 'https://mma.gob.cl/ministerio-del-medio-ambiente-inicia-elaboracion-de-norma-para-proteger-la-calidad-de-las-aguas-de-los-lagos-del-sur-de-chile/', '', 'Publicación en medios'),
(57, 'A partir de los recientes estudios interdisciplinarios arqueológicos, etnohistóricos, biogeográficos, ambientales y antracológicos, se ha generado un corpus de información que permite caracterizar a la cuenca binacional del río Valdivia como un área arqueológica de características singulares respecto al de las cuencas de los ríos Limay y Neuquén en la vertiente oriental cordillerana. Los actuales estudios interdisciplinarios en la República de Chile se limitan al sector oriental de la cuenca. Sin embargo, el registro arqueológico del lago Lácar y valle de Maipú, naciente e integrante de la cuenca hasta su desembocadura en el océano Pacífico, no han sido abordados como un área arqueológica integralmente, pese a la continuidad reflejada no solo en aspectos biogeográficos y ecológico-ambientales compartidos y/o complementarios, sino también culturales. Es por esto que integramos el resultado de nuestros estudios de la cuenca Lácar en la unidad de análisis que hemos denominado Sector Oriental Cordillerano del área arqueológica cuenca del río Valdivia.', 'Capítulo 6. El registro arqueológico de la cuenca binacional del río Valdivia. La integración de su fuente, el lago Lácar, sector oriental cordillerano', 'uploads/books/caratula_6335b967abd2b7.21135671.jpg', 'Alberto E. Perez', '2018-03-13', 'https://books.openedition.org/eunrn/569?lang=es', '', 'Libro'),
(58, 'La cordillera Norpatagónica se asocia principalmente al batolio norpatagonico (bnp), que constituye un núcleo de rocas intrusivas de amplio rango de edades además de basamento alzado. Hacia el oriente del eje Norte-Sur de la cordillera se desarroplla una secuencia de rocas volcano-sedim,entariasdel jurasico-crétacicoque ha sido registrada en Chile en Futalefú', 'Evolución geologica de la cordillera norpatagónica en el área del río Palena XI región de Aysen.Chile: nuevos antecedentes', 'uploads/books/caratula_6335be8b006d02.84111713.png', 'Urbina, O', '2003-10-06', 'https://biblioteca.sernageomin.cl/opac/datafiles/UrbinaO.pdf', '', 'Artículo académico'),
(59, 'Los resultados muestran que las aguas superficiales analizadas de los dos sectores fluviales de la cuenca del río Valdivia analizados presentan diferencias en la concentración de elementos minerales, en la presencia de compuestos orgánicos e inorgánicos y sales disueltas a lo largo de los sectores analizados (variación en el río) y entre ellos (variación entre ríos). Además existe una mayor concentración en el sector 2, con respecto del sector 1, en la mayoría de los parámetros en estudio, a través de sus estaciones. También cabe mencionar que de acuerdo a las normas, la concentración de plomo no cumple con los niveles obligatorios, en ambos sectores, en ciertas estaciones puntuales, y para el sector 2 la concentración de hierro (dentro del humedal) se encuentra muy cercano al límite permitido, con respecto a la calidad de agua para uso potable. Además, las aguas superficiales del sector lago Riñihue, presentan una concentración de DQO sobre el límite permitido en la norma de la CEE para aguas superficiales de consumo potable. También los resultados muestran el efecto de mareas (alta y baja), que se reflejó en las últimas estaciones de cada sector evaluado. Ello fue mostrado en la variación de las concentraciones de estaciones cercanas, muestreadas en distinto momento del día de evaluación, mostrando la tendencia estuarial que poseen tanto el río Cruces, como el río Calle Calle (hasta cierto tramo).', 'Monitoreo y diagnóstico de las aguas superficiales asociadas a la cuenca hidrográfica del río Valdivia', 'uploads/books/caratula_6335c001591b54.70685067.png', 'José Mauricio Heredia Carrasco', '2008-01-01', 'http://cybertesis.uach.cl/tesis/uach/2008/fah542m/doc/fah542m.pdf', '', 'Artículo académico'),
(60, 'La metodología aplicada en este proyecto está basada en el uso de secuencias temporales de imágenes satelitales que permiten realizar un monitoreo del desarrollo de los cultivos y estimar las necesidades de riego asociadas. El proyecto permite que la información esté disponible oportunamente para los usuarios y administradores del agua de riego, mediante el sistema de información geográfica en línea SPIDERwebGIS®. El sistema SPIDER potencia la difusión abierta y transparente de la información disminuyendo las asimetrías entre los usuarios del agua. Los productos generados a través del proyecto como la superficie agrícola de regadío, evapotranspiración y necesidades de riego entre otros, están orientados a diversos usuarios en función de las necesidades y escalas de análisis (cuenca, subcuenca, parcelas individuales, entre otros), siendo de utilidad tanto para la administración (gobierno, juntas de vigilancia, comunidades de usuarios), como para agricultores, profesionales del agro, investigadores, técnicos, entre otros. El proyecto fue desarrollado en la cuenca del Río Elqui y cuenta con información de las temporadas agrícolas 2013-2014, 2014-2015 y 2015-2016', 'Uso de herramientas de Teledetección y Sig para el manejo del riego en los cultivos', 'uploads/books/caratula_6335c38e37d6c7.90007766.jpg', 'Instituto De Investigaciones Agropecuarias', '2016-01-01', 'https://agronomia.uc.cl/proyectos/290-herramientas-de-teledeteccion-para-el-manejo-del-riego/file', '', 'Guías o manuales'),
(61, 'La Universidad San Sebastián requiere estudiar la hidrodinámica del Lago Llanquihue al interior de la bahía de Puerto Varas con el fin de entender cómo podrían circular los contaminantes al interior de la bahía. Dentro de las fuentes de contaminación se encuentra la pluma proveniente del aliviadero de tormenta de la planta elevadora de aguas servidas (PEAS) de la ciudad, y una descarga de aguas lluvias en el sector de Puerto Chico que pudo haber sido afectada por posible contacto con aguas servidas.\r\nEn este contexto, se realizó un estudio hidrodinámico basado en modelación numérica que ayude a caracterizar la hidrodinámica de la bahía y el comportamiento de los contaminantes al interior de esta.', 'Estudio hidrodinámico para el monitoreo de la calidad del agua en la bahía de Puerto Varas', 'uploads/books/caratula_6346f1d4962c40.28777674.png', 'Juan Carlos Dominguez, Ignacio Beyá, Teresita Scheuch', '2022-08-19', '', 'uploads/books/book_6346f1d4965044.61490125.pdf', 'Informes'),
(62, 'El estudio evaluación del estado ambiental de los lagos utilizados para actividades de acuicultura, en la zona sur de Chile VII etapa, cuenta con información de calidad ambiental de los lagos, Araucanos: Ranco, Puyehue, Rupanco, Llanquihue y Chapo; Chilotes: Popetán, Natri, Tarahuín, Huillinco-Cucao, San Antonio, y Tepuhueico; Patagónicos: Yelcho, Riesco, y Sofía. Son 14 lagos distribuidos entre las regiones de Los Ríos y Magallanes, contando así con un monitoreo de la red completa de lagos donde se ha realizado acuicultura in situ en el sur de Chile.', 'Evaluación del estado ambiental de los lagos utilizados para actividades de acuicultura en la zona sur de Chile (Séptima Etapa). IFOP Instituto de Fomento Pesquero.', 'uploads/books/caratula_641c6744003ae9.21547758.png', 'IFOP Instituto de Fomento Pesquero', '2021-05-03', '', 'uploads/books/book_641c6744be45d4.24331339.pdf', 'Informes'),
(64, 'Durante noviembre de 1996 y octubre de 1997 mensualmente se estudió la cuenca de cinco lagos húmicos localizados en la Isla de Chiloé: Lagos Natri, Tepuhueico, Tarahuín, Huillinco y Cucao. El estudio tuvo como objetivo conocer el área de la cuenca, la cuenca hidrográfica y las principales características físicas, químicas y biológicas de estos lagos húmicos. Se determinó el estado trófico, como también la carga actual y el balance másico de fósforo y nitrógeno total, en relación a actividades antrópicas.', 'Estudio de la cuenca y limnología en cinco lagos húmicos de la Isla Chiloé (L. VILLALOBOS, O. PARRA, M. GRANDJEAN, E. JAQUE, S. WOELFL & H. CAMPOS)', 'uploads/books/caratula_641c7283a97bd5.48810037.png', 'L. VILLALOBOS, O. PARRA, M. GRANDJEAN, E. JAQUE, S. WOELFL & H. CAMPOS.', '2003-06-27', '', 'uploads/books/book_641c7283aa9b99.80897646.pdf', 'Informes'),
(66, 'En Chile, de acuerdo a las disposiciones establecidas en el art. 129 bis 3 del Código de Aguas, la Dirección General de Aguas (DGA), se realiza un monitoreo del fitoplancton de los cuerpos de agua (lóticos y lénticos) del país, con el objeto de controlar la calidad, cantidad y niveles de las aguas tanto superficiales como subterráneas.', 'ANÁLISIS DE FITOPLANCTON EN MUESTRAS DE AGUA (U. de Concepción y MOP).', 'uploads/books/caratula_641c83eb5fd8f1.09501654.png', 'Universidad de Concepción y Ministerio de Obras Públicas.', '2018-12-03', '', 'uploads/books/book_641c83eb607da8.59930808.pdf', 'Informes'),
(67, 'Este estudio analiza el comportamiento de los drenes que fluyen hacia el lago Ranco, con el objeto de determinar de acuerdo a su comportamiento y caracteres físicos, la probabilidad de generar riesgos para la población. A partir del análisis comparativo de los índices morfométricos y los factores naturales que forman parte del patrón físico que los rodea, se determinaron sectores de riesgo en las vías de acceso que circundan el lago Ranco. ', 'ANALISIS DE SUBCUENCAS EN TORNO AL LAGO RANCO, PROVINCIA DE VALDIVIA, X REGION (ALINA HUECHAN).', 'uploads/books/caratula_641c85a9401ad6.91969660.png', 'ALINA MARISOL HUECHAN QUINTANA', '1997-01-01', '', 'uploads/books/book_641c85a94055a3.78008352.pdf', 'Informes'),
(83, 'Propuesta de índices de calidad físico-químicos de agua superficial para ecosistemas hídricos de Chile para el Departamento de Recursos Hídricos del Ministerio del Medio Ambiente, con el objeto de clasificar la calidad de las aguas mediante una metodología que se adapte y represente específicamente las condiciones de cada ecosistema (Mariela Arévalo y Jorge Castillo). \r\n', 'PROPUESTA DE ÍNDICES DE CALIDAD DE AGUA PARA ECOSISTEMAS HÍDRICOS DE CHILE', 'uploads/books/caratula_641df2877465e9.34799805.png', 'MARIELA ARÉVALO HIGUERAS y JORGE CASTILLO GONZÁLEZ.', '2012-11-01', '', 'uploads/books/book_641df287751135.52957202.pdf', 'Informes'),
(88, 'El índice de calidad de agua (ICA) incorpora parámetros fisicoquímicos en una ecuación, para determinar la calidad de agua en un lugar y tiempo fijados. Como objetivo analizar espacio-temporalmente el índice de calidad de agua del sector Guaymaral, a través dos metodologías de medición de cálculo: UWQI y CWQI. ', 'Determinación del Índice de Calidad de Agua para el sector occidental del humedal Torca-Guaymaral empleando las metodologías UWQI y CWQI1 (Carlos Caho y Ellie López).', 'uploads/books/caratula_641df944c76978.74568394.png', 'Carlos Andrés Caho Rodríguez y Ellie Anne López Barrera.', '2017-09-25', '', 'uploads/books/book_641df944c853e7.59708195.pdf', 'Informes'),
(87, 'En el marco del proceso constitucional que actualmente se desarrolla en Chile, presentamos un especial sobre “Agua y Constitución”, en que identificaremos cómo el tema del agua se recoge en las Constituciones del mundo.', 'El agua en las Constituciones de Oceanía ( Centro de Derecho y Gestión de Aguas UC).', 'uploads/books/caratula_641df82638ac98.15126805.png', 'Centro de Derecho y Gestión de Aguas UC (CDGA).', '2021-01-23', '', 'uploads/books/book_641df826397b28.38517148.pdf', 'Informes'),
(89, 'En los ecosistemas límnicos de Chile, al igual que en los de otros países del cono sur de Sudamérica, existen especies de crustáceos malacostráceos endémicos (Cavalieri 1977, Manning & Hobbs 1977, Bond- Buckup & Buckup 1994), con relaciones zoogeográficas arcaicas de tipo gondwánico, que constituyen elementos funcionalmente importantes de las comunidades bentónicas de tales ecosistemas.', 'ESTADO DE CONOCIMIENTO DE LOS MALACOSTRACEOS DULCEACUICOLAS DE CHILE (Carlos G., Erich H. & Exequiel R.)', 'uploads/books/caratula_641dffc1eea814.18790530.png', 'Carlos G. Jara, Erich H. Rudolph & Exequiel R. González.', '2005-11-25', '', 'uploads/books/book_641dffc1ef49f0.26440931.pdf', 'Informes'),
(90, 'Monitoreo estacional en 20 cuerpos lénticos a lo largo de Chile, los cuales se distribuyen entre la IV Región de Coquimbo y la X Región de Los Lagos.', 'EVALUACIÓN DE LA CONDICIÓN TRÓFICA DE LA RED DE CONTROL DE LAGOS DE LA DGA (MINISTERIO DE OBRAS PÚBLICAS).', 'uploads/books/caratula_6421e4f835e3a6.21092099.png', 'MINISTERIO DE OBRAS PÚBLICAS, DIRECCIÓN GENERAL DE AGUAS DEPARTAMENTO DE CONSERVACIÓN Y PROTECCIÓN DE RECURSOS HÍDRICOS.', '2014-11-03', '', 'uploads/books/book_6421e4f8363af2.23638540.pdf', 'Informes'),
(100, 'Caracterizar geológica y geotécnicamente los sedimentos glaciolacustres ubicados en la base de los deslizamientos del Río San Pedro.', 'ANÁLISIS GEOLÓGICO-GEOTÉCNICO DE SEDIMENTOS GLACIOLACUSTRES ASOCIADOS A LOS DESLIZAMIENTOS DEL RÍO SAN PEDRO, REGIÓN DE LOS RÍOS (ANDRÉS ZÚÑIGA)', 'uploads/books/caratula_6421f245b9ffc9.97366741.png', 'ANDRÉS IGNACIO ZÚÑIGA ÁLVAREZ.', '2019-11-21', '', 'uploads/books/book_6421f245ba6a13.70046188.pdf', 'Informes'),
(101, '', '', '', '', '0000-00-00', '', '', ''),
(102, '', '', '', '', '0000-00-00', '', '', ''),
(96, 'Efecto que tienen los cambios en los patrones espaciales del paisaje sobre los procesos ecológicos que ocurren a la escala de una cuenca lacustre, y como esta relación patrón-proceso impacta sobre los componentes hidrológicos de esta cuenca, afectando su capacidad de producción de bienes y servicios ecosistémicos. ', 'Modelamiento de impactos del cambio de uso de suelo en la carga de sedimentos y nutrientes en la cuenca lacustre del lago Rupanco, Región de Los Lagos, Chile (Rodrigo Fuentes). ', 'uploads/books/caratula_6421e6b6d487f8.86880405.png', 'RODRIGO ELIAS FUENTES ROBLES.', '2013-01-01', 'http://repositorio.udec.cl/bitstream/11594/1571/1/Tesis_Modelamiento_de_Impactos_del_Cambio_de_UsoImage.Marked.pdf', '', 'Informes'),
(97, 'Diversos principios, conceptos, modelos y metodologías para desarrollar planes de acción de carácter local y/o regional (Directiva Marco de Agua, 2000; EPA, 2009), destinados a reducir y/o detener la degradación ambiental de las fuentes naturales de agua dulce a través del manejo de las actividades humanas en la cuenca hidrológica del lago.', 'Diagnóstico de la calidad de las aguas del Lago Rupanco (Universidad de los Lagos).', 'uploads/books/caratula_6421e8ec09ca29.46271209.png', 'Universidad de los Lagos.', '2019-05-01', 'http://cparupanco.org/wp-content/uploads/2020/11/Diagnostico-de-la-aguas-del-Rupanco.pdf', '', 'Informes'),
(98, 'Un cuerpo de agua en proceso de eutrofización requiere planes de acción a mediano y largo plazo, que incluyan un monitoreo permanente de toda la masa de agua, sedimentos y una estimación de balance de masas y nutrientes. Por esta razón, la Dirección General de Aguas (DGA) ha llamado a licitación el siguiente estudio técnico \"ANALISIS y REFORMULACIÓN DE RED DE MONITOREO DE LAGOS REGION DE LOS RIOS\", la cual está orientada a diagnosticar el estado actual de trofía en seis lagos de la región de los Ríos, a saber, Panguipulli, Riñihue, Calafquén, Neltume, Pirehueico y Puyehue.', 'ANÁLISIS Y REFORMULACIÓN RED DE MONITOREO DE LAGOS REGIÓN DE LOS RÍOS (MINISTERIO DE OBRAS PÚBLICAS).', 'uploads/books/caratula_6421eca57e73c1.96325637.png', 'MINISTERIO DE OBRAS PÚBLICAS, DIRECCIÓN GENERAL DE AGUAS DEPARTAMENTO DE CONSERVACIÓN Y PROTECCIÓN DE RECURSOS HÍDRICOS.', '2017-01-02', 'https://bibliotecadigital.ciren.cl/bitstream/handle/20.500.13082/33084/DGA_2017_analisis_reformulacion_red_monitoreo_lagos_Region_de_Los_Rios.pdf?sequence=1&isAllowed=y', '', 'Informes'),
(99, 'revisión de los trabajos publicados más recientes en relación a la gestión de los recursos hídricos en Chile bajo el concepto de calidad ecológica, resumiendo información para la gestión sostenible del agua en la cuenca hidrográfica del río Bueno de la Décima Región de Chile, donde se ha conformado la primera (julio 2015).', 'ANTECEDENTES Y MARCO CONCEPTUAL PARA UNA GESTIÓN SOSTENIBLE DE LA CALIDAD DEL AGUA EN LA CUENCA DEL RÍO BUENO, X REGIÓN DE LOS LAGOS. CHILE (SARA ZELADA)', 'uploads/books/caratula_6421ee8b7c4ba5.91049214.png', 'Sara Zelada Muñoz.', '2017-09-04', '', 'uploads/books/book_6421ee8b7de282.90613714.pdf', 'Artículo académico'),
(103, 'Debido a las circunstancias generadas por el Cambio Climático y las actividades que se ven involucradas en las intervenciones dentro de las diferentes cuencas hidrográficas, se entrega este trabajo que considera la gran preocupación por los cambios climáticos que se ha avistado dentro del Lago Llanquihue.', 'GUÍA DE TECNOLOGÍAS IMPLEMENTADAS EN MONITOREO DE CALIDAD DE AGUA DEL LAGO LLANQUIHUE EN PLATAFORMA “LAGO EN LÍNEA”.', 'uploads/books/caratula_65412568f2ba26.90782544.png', 'Ing. Consuelo Fernández V., MV. Catherine Opitz R., Ing. Pedro Riquelme R. y Geogr. Gino Sandoval V.', '2022-09-01', '', 'uploads/books/book_65412568f35d71.78009863.pdf', 'Informes'),
(104, 'Trata sobre la importancia de los indicadores microbianos, como el Escherichia coli, para evaluar la calidad del agua y detectar contaminación fecal, un problema crucial para la salud pública. Expone avances recientes en la detección de fuentes de contaminación, como el uso de métodos moleculares avanzados como la PCR para identificar riesgos con mayor precisión. Estos indicadores ayudan a prevenir enfermedades relacionadas con el agua contaminada, especialmente en zonas donde la infraestructura de alcantarillado es deficiente o en riesgo por eventos climáticos extremos.\r\nEste paper es valioso para los lectores interesados en proteger los cuerpos de agua, como un lago, porque proporciona información científica y actualizada sobre cómo monitorear y garantizar la calidad del agua. Su aplicación puede ayudar a prevenir problemas de salud en comunidades que dependen de estos recursos, y es fundamental para quienes desean conocer más sobre métodos avanzados de control ambiental.\r\n', 'Indicadores microbianos de la contaminación fecal', 'uploads/books/caratula_673ce4414dd491.57809214.png', 'David A. Holcomb & Jill R. Stewart.', '2020-06-15', 'https://link.springer.com/article/10.1007/s40572-020-00278-1#Sec10', 'uploads/books/book_673ce4414e18d2.75810441.pdf', 'Artículo académico'),
(105, 'Este estudio investiga los factores que afectan la supervivencia de *Escherichia coli* en sedimentos lacustres. A través de experimentos comparativos, los autores examinan cómo factores como la temperatura, el pH, los sólidos disueltos totales extraíbles en agua, los microbios coexistentes y los sitios de muestreo influyen en la supervivencia de *E. coli*. Se encontró que el pH y los microbios coexistentes son los factores más significativos que afectan la supervivencia de la bacteria. Los autores sugieren que los modelos numéricos que simulan la supervivencia de *E. coli* deberían considerar estos factores, además de las interacciones entre ellos, para mejorar la precisión en la predicción de la contaminación fecal en ambientes acuáticos.', 'Factores significativos para la conspiración de la supervivencia de Escherichia coli en los sedimentos del lago', 'uploads/books/caratula_673ce573033568.67047727.png', 'Ichiro Yoneda, Masateru Nishiyama and Toru Watanabe.', '2024-06-13', 'https://www.mdpi.com/2076-2607/12/6/1192 ', 'uploads/books/book_673ce573037619.57913738.pdf', 'Informes'),
(106, 'Este estudio evaluó los factores que mejor predicen los niveles de contaminación fecal (E. coli) en dos playas populares del lago Winnipeg, Manitoba: Gimli y Grand Beach. Analizando datos de calidad del agua y del medio ambiente entre 2007 y 2021, se desarrollaron modelos que mostraron cómo las condiciones climáticas y ambientales influyen en la presencia de E. coli. Los resultados indicaron que eventos climáticos extremos, como lluvias intensas en las 48 horas previas y temperaturas altas del día anterior, aumentan el riesgo de superar los niveles seguros de E. coli, lo que podría representar un riesgo para la salud.\r\nEn Grand Beach, los niveles bajos de radiación UV y días secos previos también se asociaron con un mayor riesgo. Los modelos sugieren que las variaciones en la contaminación pueden ser específicas de cada año, lo que subraya la importancia de adaptar las estrategias de monitoreo. Estos hallazgos podrían mejorar los sistemas de alerta en tiempo real, ayudando a las autoridades a gestionar mejor las playas y a responder a eventos climáticos extremos, clave en la preparación ante el cambio climático.\r\n', 'Factores ambientales asociados con la concentración de Escherichia coli en las playas de agua dulce del lago Winnipeg, Manitoba, Canadá', 'uploads/books/caratula_673ce6bde13ec9.96058755.png', 'Binyam N. Desta, Johanna Sanchez, Cole Heasley, Ian Young and Jordan Tustin.', '2024-04-04', 'https://journals.plos.org/water/article?id=10.1371/journal.pwat.0000143 ', 'uploads/books/book_673ce6bde16505.63169956.pdf', 'Artículo académico'),
(107, 'Este estudio analiza los factores que influyen en la dinámica de E. coli y proyecta cambios futuros en un arroyo urbano de Indianápolis, EE. UU. (Pleasant Run), entre 1999 y 2019. Utilizando análisis estadísticos, se encontró que las concentraciones de E. coli aumentaron de 111 NMP/100 mL en 1999 a 911 NMP/100 mL en 2019, superando los estándares de calidad del agua. Los niveles más altos de E. coli se observaron en verano y en áreas con desbordamientos de alcantarillado combinado. Las precipitaciones y el caudal influyeron significativamente en estas concentraciones. Según las proyecciones bajo un escenario de altas emisiones (RCP 8.5), las concentraciones de E. coli seguirán aumentando debido a los cambios en temperatura y patrones de precipitación causados por el cambio climático, lo que plantea un futuro desfavorable para la calidad del agua.', 'Precipitation and discharge changes drive increases in Escherichia coli concentrations in an urban stream', 'uploads/books/caratula_673ce88fc240c8.07599456.png', 'Rui Li, Gabriel Filippelli, Lixin Wang', '2023-05-04', 'https://www.sciencedirect.com/science/article/abs/pii/S0048969723025135#preview-section-abstract', '', 'Artículo académico'),
(108, 'El estudio se enfocó en evaluar el impacto de las precipitaciones en la calidad de las aguas de baño en dos áreas urbanas costeras del mar Adriático, Split y Kaštela, donde se usan sistemas de alcantarillado combinados (CSO). Se realizó durante las temporadas de los años 2020 y 2021, con muestras recolectadas cada dos semanas y después de precipitaciones superiores a 2 mm. Aunque no se observó un impacto significativo de las lluvias en la calidad del agua en ambas áreas, la calidad del agua en Kaštela resultó ser considerablemente peor que en Split. Esto se atribuyó principalmente al mal estado del sistema de alcantarillado en Kaštela, en lugar de a las precipitaciones. Además, el estudio mostró que la calidad del agua varía según el momento del muestreo y el indicador utilizado.\r\nEste estudio es relevante en el marco de la gestión ambiental costera, ya que destaca cómo las infraestructuras de saneamiento afectan la calidad de las aguas de baño, incluso más que los factores climáticos. La importancia de elegir los indicadores bacterianos adecuados según el momento del día refuerza la necesidad de monitoreos precisos para asegurar la seguridad de los bañistas y la salud pública. Este tipo de investigación es esencial para la planificación urbana y el diseño de sistemas de alcantarillado en zonas costeras, en particular en áreas con un turismo dependiente de playas limpias.\r\n', 'Efecto de la precipitación sobre la calidad microbiológica de las aguas de baño en zonas sometidas a impacto antropogénico', 'uploads/books/caratula_673ce939a4fe17.20002043.png', 'Marin Ordulj, Slaven Jozic, Mateja Baranovic and Maja Krzelj', '2022-02-10', 'https://www.mdpi.com/2073-4441/14/4/527  ', 'uploads/books/book_673ce939a53662.45654017.pdf', 'Artículo académico'),
(109, 'Este artículo explora cómo la teledetección (Remote Sensing, RS) puede utilizarse para monitorear la diversidad del agua y su calidad. La investigación se centra en cinco características clave de la diversidad del agua: diversidad de rasgos del agua, diversidad de génesis del agua, diversidad estructural, diversidad taxonómica y diversidad funcional. A través del uso de sensores en plataformas aéreas y espaciales, la teledetección permite realizar un monitoreo continuo, a gran escala y estandarizado de estas características en ecosistemas acuáticos.\r\nLos enfoques tradicionales de monitoreo in situ, aunque son detallados, no logran cubrir grandes áreas o capturar variaciones dinámicas a lo largo del tiempo. Por tanto, este estudio sugiere una combinación de mediciones in situ con tecnologías de teledetección para optimizar la evaluación y gestión sostenible de los recursos hídricos. Además, se destacan ejemplos de tecnologías recientes, como los satélites hiperespectrales y sistemas de detección LiDAR, para analizar indicadores como clorofila, turbidez y floraciones algales.\r\n', 'Monitoreo de la diversidad y la calidad del agua mediante teledetección y rasgos', 'uploads/books/caratula_673ceb1eeee029.65717726.png', 'Angela Lausch and others', '2024-07-01', 'https://www.mdpi.com/2072-4292/16/13/2425', 'uploads/books/book_673ceb1eef1765.34480939.pdf', 'Informes'),
(110, 'El artículo presenta un análisis comparativo de varios índices de sostenibilidad del agua, destacando sus principios subyacentes, metodologías y aplicaciones potenciales. A través de una revisión sistemática de 124 publicaciones, se identificaron seis clusters distintos de índices, subrayando la necesidad de una selección cuidadosa de los mismos. Los resultados muestran que los índices, aunque tengan nombres similares, pueden variar significativamente en alcance y metodología. Además, se identificaron brechas en la investigación existente, como la falta de aplicaciones históricas y proyecciones futuras para muchos indicadores actuales. A pesar de estas limitaciones, los índices siguen siendo herramientas valiosas para la evaluación y gestión sostenible de los recursos hídricos.', 'Análisis comparativo de índices de sostenibilidad del agua: Una revisión sistemática', 'uploads/books/caratula_673cebe5d23ce6.40569530.png', ' Marcin Pawel Jarzebski and others.', '2024-03-27', 'https://www.mdpi.com/2073-4441/16/7/961', 'uploads/books/book_673cebe5d27214.36229577.pdf', 'Informes'),
(111, 'Este artículo aborda el uso de tecnologías del Internet de las Cosas (IoT) para el monitoreo de la calidad del agua en aplicaciones domésticas. Se examinan las limitaciones de los métodos tradicionales de laboratorio y las ventajas que ofrecen los sistemas basados en IoT, que proporcionan monitoreo en tiempo real, reducción de costos y mayor eficiencia. El artículo propone un marco comparativo para evaluar sistemas de monitoreo de calidad del agua basados en IoT, enfocándose en parámetros comunes como el pH, la turbidez, la temperatura, el oxígeno disuelto y la conductividad eléctrica. Además, destaca las tendencias recientes y los desafíos que enfrenta el desarrollo de estos sistemas, como la gestión de energía y la seguridad de datos.', 'IoT Based Smart Water Quality Monitoring: Técnicas recientes, tendencias y desafíos para aplicaciones domésticas', 'uploads/books/caratula_673cec8fdcf9b2.65274916.png', 'Farmanullah Jan, Nasro Min-Allah and Dilek Düstegór', '2021-06-22', 'https://www.mdpi.com/2073-4441/13/13/1729', 'uploads/books/book_673cec8fdd24d0.68607464.pdf', 'Informes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtros`
--

CREATE TABLE `filtros` (
  `DocumentoID` int(11) NOT NULL,
  `Filtro` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Valor` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `filtros`
--

INSERT INTO `filtros` (`DocumentoID`, `Filtro`, `Valor`) VALUES
(8, 'cuenca', 'Calafquén'),
(8, 'cuenca', 'Villarrica'),
(8, 'idioma', 'Inglés'),
(8, 'institucion', 'Centro de investigación'),
(8, 'materia', 'Hidrodinámica'),
(8, 'materia', 'Tecnologías'),
(8, 'pais', 'Extranjero'),
(8, 'region', 'Los Lagos'),
(16, 'cuenca', 'Caburgua'),
(16, 'cuenca', 'Neltume'),
(16, 'idioma', 'Inglés'),
(16, 'institucion', 'Empresa privada'),
(16, 'materia', 'Boyas'),
(16, 'pais', 'Extranjero'),
(16, 'region', 'Los Ríos'),
(17, 'cuenca', 'Llanquihue'),
(17, 'idioma', 'Español'),
(17, 'institucion', 'Academia'),
(17, 'materia', 'Calidad de agua'),
(17, 'materia', 'Monitoreo'),
(17, 'pais', 'Chile'),
(17, 'region', 'Los Lagos'),
(19, 'cuenca', 'Llanquihue'),
(19, 'idioma', 'Español'),
(19, 'institucion', 'Academia'),
(19, 'materia', 'Hidrodinámica'),
(19, 'materia', 'Tecnologías'),
(19, 'pais', 'Chile'),
(19, 'region', 'Los Lagos'),
(20, 'cuenca', 'Llanquihue'),
(20, 'cuenca', 'Ranco'),
(20, 'cuenca', 'Todos los Santos'),
(20, 'idioma', 'Español'),
(20, 'institucion', 'Academia'),
(20, 'materia', 'Teledección'),
(20, 'pais', 'Chile'),
(20, 'region', 'Los Lagos'),
(20, 'region', 'Los Ríos'),
(21, 'cuenca', 'Caburgua'),
(21, 'cuenca', 'Calafquén'),
(21, 'cuenca', 'Chapo'),
(21, 'cuenca', 'Collico'),
(21, 'cuenca', 'Llanquihue'),
(21, 'cuenca', 'Maihue'),
(21, 'cuenca', 'Neltume'),
(21, 'cuenca', 'Otro'),
(21, 'cuenca', 'Panguipulli'),
(21, 'cuenca', 'Pirihueico'),
(21, 'cuenca', 'Puyehue'),
(21, 'cuenca', 'Ranco'),
(21, 'cuenca', 'Riñihue'),
(21, 'cuenca', 'Rupanco'),
(21, 'cuenca', 'Todos los Santos'),
(21, 'cuenca', 'Villarrica'),
(21, 'idioma', 'Español'),
(21, 'institucion', 'Sector público'),
(21, 'materia', 'Calidad de agua'),
(21, 'pais', 'Chile'),
(21, 'region', 'Araucanía'),
(21, 'region', 'Los Lagos'),
(21, 'region', 'Los Ríos'),
(21, 'region', 'Otra'),
(22, 'cuenca', 'Llanquihue'),
(22, 'idioma', 'Español'),
(22, 'institucion', 'Academia'),
(22, 'pais', 'Chile'),
(22, 'region', 'Los Lagos'),
(23, 'cuenca', 'Llanquihue'),
(23, 'idioma', 'Español'),
(23, 'institucion', 'Academia'),
(23, 'materia', 'Teledección'),
(23, 'pais', 'Chile'),
(23, 'region', 'Los Lagos'),
(24, 'cuenca', 'Llanquihue'),
(24, 'idioma', 'Español'),
(24, 'institucion', 'Academia'),
(24, 'materia', 'Teledección'),
(24, 'pais', 'Chile'),
(24, 'region', 'Los Lagos'),
(25, 'cuenca', 'Llanquihue'),
(25, 'idioma', 'Español'),
(25, 'institucion', 'Academia'),
(25, 'materia', 'Teledección'),
(25, 'pais', 'Chile'),
(25, 'region', 'Los Lagos'),
(27, 'cuenca', 'Llanquihue'),
(27, 'idioma', 'Español'),
(27, 'institucion', 'Academia'),
(27, 'materia', 'Teledección'),
(27, 'pais', 'Chile'),
(27, 'region', 'Los Lagos'),
(28, 'cuenca', 'Llanquihue'),
(28, 'idioma', 'Español'),
(28, 'institucion', 'Academia'),
(28, 'materia', 'Teledección'),
(28, 'pais', 'Chile'),
(28, 'region', 'Los Lagos'),
(29, 'cuenca', 'Llanquihue'),
(29, 'idioma', 'Español'),
(29, 'institucion', 'Academia'),
(29, 'materia', 'Teledección'),
(29, 'pais', 'Chile'),
(29, 'region', 'Los Lagos'),
(30, 'cuenca', 'Llanquihue'),
(30, 'idioma', 'Español'),
(30, 'institucion', 'Academia'),
(30, 'materia', 'Teledección'),
(30, 'pais', 'Chile'),
(30, 'region', 'Los Lagos'),
(31, 'cuenca', 'Llanquihue'),
(31, 'idioma', 'Español'),
(31, 'institucion', 'Academia'),
(31, 'materia', 'Teledección'),
(31, 'pais', 'Chile'),
(31, 'region', 'Los Lagos'),
(32, 'cuenca', 'Llanquihue'),
(32, 'idioma', 'Español'),
(32, 'institucion', 'Academia'),
(32, 'materia', 'Metagenómica'),
(32, 'pais', 'Chile'),
(32, 'region', 'Los Lagos'),
(33, 'cuenca', 'Llanquihue'),
(33, 'idioma', 'Español'),
(33, 'institucion', 'Academia'),
(33, 'materia', 'Metagenómica'),
(33, 'pais', 'Chile'),
(33, 'region', 'Los Lagos'),
(34, 'cuenca', 'Llanquihue'),
(34, 'idioma', 'Español'),
(34, 'institucion', 'Academia'),
(34, 'materia', 'Metagenómica'),
(34, 'pais', 'Chile'),
(34, 'region', 'Los Lagos'),
(35, 'cuenca', 'Llanquihue'),
(35, 'idioma', 'Español'),
(35, 'institucion', 'Academia'),
(35, 'materia', 'Metagenómica'),
(35, 'pais', 'Chile'),
(35, 'region', 'Los Lagos'),
(36, 'cuenca', 'Llanquihue'),
(36, 'idioma', 'Español'),
(36, 'institucion', 'Academia'),
(36, 'materia', 'Metagenómica'),
(36, 'pais', 'Chile'),
(36, 'region', 'Los Lagos'),
(37, 'cuenca', 'Llanquihue'),
(37, 'idioma', 'Español'),
(37, 'institucion', 'Academia'),
(37, 'materia', 'Boyas'),
(37, 'materia', 'Monitoreo'),
(37, 'pais', 'Chile'),
(37, 'region', 'Los Lagos'),
(38, 'cuenca', 'Llanquihue'),
(38, 'idioma', 'Español'),
(38, 'institucion', 'Academia'),
(38, 'materia', 'Boyas'),
(38, 'materia', 'Monitoreo'),
(38, 'pais', 'Chile'),
(38, 'region', 'Los Lagos'),
(39, 'cuenca', 'Llanquihue'),
(39, 'idioma', 'Español'),
(39, 'institucion', 'Academia'),
(39, 'materia', 'Boyas'),
(39, 'materia', 'Monitoreo'),
(39, 'pais', 'Chile'),
(39, 'region', 'Los Lagos'),
(40, 'cuenca', 'Llanquihue'),
(40, 'idioma', 'Español'),
(40, 'institucion', 'Academia'),
(40, 'materia', 'Metagenómica'),
(40, 'pais', 'Chile'),
(40, 'region', 'Los Lagos'),
(41, 'cuenca', 'Llanquihue'),
(41, 'idioma', 'Español'),
(41, 'institucion', 'Academia'),
(41, 'materia', 'Boyas'),
(41, 'materia', 'Monitoreo'),
(41, 'pais', 'Chile'),
(41, 'region', 'Los Lagos'),
(42, 'materia', 'Calidad de agua'),
(45, 'cuenca', 'Llanquihue'),
(45, 'idioma', 'Español'),
(45, 'institucion', 'Academia'),
(45, 'materia', 'Teledección'),
(45, 'pais', 'Chile'),
(45, 'region', 'Los Lagos'),
(46, 'cuenca', 'Llanquihue'),
(46, 'idioma', 'Español'),
(46, 'institucion', 'Academia'),
(46, 'materia', 'Teledección'),
(46, 'pais', 'Chile'),
(46, 'region', 'Los Lagos'),
(49, 'cuenca', 'Llanquihue'),
(49, 'idioma', 'Español'),
(49, 'institucion', 'Academia'),
(49, 'materia', 'Teledección'),
(49, 'pais', 'Chile'),
(49, 'region', 'Los Lagos'),
(50, 'cuenca', 'Llanquihue'),
(50, 'idioma', 'Español'),
(50, 'institucion', 'Academia'),
(50, 'materia', 'Teledección'),
(50, 'pais', 'Chile'),
(50, 'region', 'Los Lagos'),
(51, 'cuenca', 'Llanquihue'),
(51, 'idioma', 'Español'),
(51, 'institucion', 'Sector público'),
(51, 'materia', 'Calidad de agua'),
(51, 'pais', 'Chile'),
(51, 'region', 'Los Lagos'),
(52, 'cuenca', 'Llanquihue'),
(52, 'idioma', 'Español'),
(52, 'institucion', 'Sector público'),
(52, 'materia', 'Calidad de agua'),
(52, 'pais', 'Chile'),
(52, 'region', 'Los Lagos'),
(53, 'cuenca', 'Llanquihue'),
(53, 'idioma', 'Español'),
(53, 'institucion', 'Sociedad Civil'),
(53, 'materia', 'Calidad de agua'),
(53, 'pais', 'Chile'),
(53, 'region', 'Los Lagos'),
(54, 'idioma', 'Español'),
(54, 'institucion', 'Academia'),
(54, 'materia', 'Cultura y patrimonio'),
(54, 'materia', 'Hidrodinámica'),
(54, 'pais', 'Chile'),
(55, 'idioma', 'Inglés'),
(55, 'institucion', 'Academia'),
(55, 'institucion', 'Centro de investigación'),
(55, 'institucion', 'Sector público'),
(55, 'materia', 'Biodiversidad'),
(55, 'materia', 'Monitoreo'),
(55, 'materia', 'Usos de suelo'),
(55, 'pais', 'Chile'),
(55, 'region', 'Araucanía'),
(56, 'idioma', 'Español'),
(56, 'institucion', 'Sector público'),
(56, 'materia', 'Calidad de agua'),
(56, 'materia', 'Planificación territorial'),
(56, 'pais', 'Chile'),
(56, 'region', 'Araucanía'),
(56, 'region', 'Los Lagos'),
(56, 'region', 'Los Ríos'),
(57, 'cuenca', 'Otro'),
(57, 'idioma', 'Español'),
(57, 'institucion', 'Academia'),
(57, 'institucion', 'Sector público'),
(57, 'materia', 'Cultura y patrimonio'),
(57, 'materia', 'Hidrodinámica'),
(57, 'pais', 'Chile'),
(57, 'region', 'Los Ríos'),
(58, 'cuenca', 'Otro'),
(58, 'idioma', 'Español'),
(58, 'institucion', 'Sector público'),
(58, 'materia', 'Cultura y patrimonio'),
(58, 'materia', 'Usos de suelo'),
(58, 'pais', 'Chile'),
(58, 'region', 'Otra'),
(60, 'cuenca', 'Otro'),
(60, 'idioma', 'Español'),
(60, 'institucion', 'Sector público'),
(60, 'materia', 'Educación ambiental'),
(60, 'materia', 'Hidrodinámica'),
(60, 'materia', 'Tecnologías'),
(60, 'materia', 'Teledección'),
(60, 'materia', 'Usos de suelo'),
(60, 'pais', 'Chile'),
(60, 'region', 'Otra'),
(61, 'cuenca', 'Llanquihue'),
(61, 'idioma', 'Español'),
(61, 'institucion', 'Empresa privada'),
(61, 'materia', 'Calidad de agua'),
(61, 'materia', 'Cambio climático'),
(61, 'materia', 'Hidrodinámica'),
(61, 'materia', 'Monitoreo'),
(61, 'pais', 'Chile'),
(61, 'region', 'Los Lagos'),
(62, 'cuenca', 'Llanquihue'),
(62, 'idioma', 'Español'),
(62, 'institucion', 'Centro de investigación'),
(62, 'materia', 'Calidad de agua'),
(62, 'materia', 'Ciencia ciudadana'),
(62, 'materia', 'Hidrodinámica'),
(62, 'materia', 'Metagenómica'),
(62, 'materia', 'Monitoreo'),
(62, 'materia', 'Tecnologías'),
(62, 'materia', 'Teledección'),
(62, 'materia', 'Telemetría'),
(62, 'pais', 'Chile'),
(62, 'region', 'Los Lagos'),
(63, 'cuenca', 'Llanquihue'),
(63, 'idioma', 'Español'),
(63, 'institucion', 'Centro de investigación'),
(63, 'materia', 'Calidad de agua'),
(63, 'materia', 'Ciencia ciudadana'),
(63, 'materia', 'Educación ambiental'),
(63, 'materia', 'Hidrodinámica'),
(63, 'materia', 'Metagenómica'),
(63, 'materia', 'Monitoreo'),
(63, 'materia', 'Tecnologías'),
(63, 'materia', 'Teledección'),
(63, 'materia', 'Telemetría'),
(63, 'materia', 'Usos de suelo'),
(63, 'pais', 'Chile'),
(63, 'region', 'Los Lagos'),
(64, 'cuenca', 'Otro'),
(64, 'idioma', 'Inglés'),
(64, 'institucion', 'Academia'),
(64, 'institucion', 'Centro de investigación'),
(64, 'materia', 'Calidad de agua'),
(64, 'materia', 'Cambio climático'),
(64, 'materia', 'Ciencia ciudadana'),
(64, 'materia', 'Cultura y patrimonio'),
(64, 'materia', 'Educación ambiental'),
(64, 'materia', 'Hidrodinámica'),
(64, 'materia', 'Monitoreo'),
(64, 'materia', 'Planificación territorial'),
(64, 'materia', 'Usos de suelo'),
(64, 'pais', 'Chile'),
(64, 'region', 'Los Lagos'),
(66, 'cuenca', 'Collico'),
(66, 'cuenca', 'Llanquihue'),
(66, 'cuenca', 'Otro'),
(66, 'cuenca', 'Villarrica'),
(66, 'idioma', 'Español'),
(66, 'institucion', 'Centro de investigación'),
(66, 'institucion', 'Sector público'),
(66, 'materia', 'Calidad de agua'),
(66, 'materia', 'Cambio climático'),
(66, 'materia', 'Cultura y patrimonio'),
(66, 'materia', 'Educación ambiental'),
(66, 'materia', 'Monitoreo'),
(66, 'pais', 'Chile'),
(66, 'region', 'Otra'),
(67, 'cuenca', 'Ranco'),
(67, 'idioma', 'Español'),
(67, 'institucion', 'Academia'),
(67, 'institucion', 'Centro de investigación'),
(67, 'materia', 'Calidad de agua'),
(67, 'materia', 'Cambio climático'),
(67, 'materia', 'Ciencia ciudadana'),
(67, 'materia', 'Cultura y patrimonio'),
(67, 'materia', 'Educación ambiental'),
(67, 'materia', 'Hidrodinámica'),
(67, 'materia', 'Monitoreo'),
(67, 'materia', 'Planificación territorial'),
(67, 'materia', 'Usos de suelo'),
(67, 'pais', 'Chile'),
(67, 'region', 'Los Ríos'),
(68, 'cuenca', 'Chapo'),
(68, 'cuenca', 'Llanquihue'),
(68, 'cuenca', 'Puyehue'),
(68, 'cuenca', 'Ranco'),
(68, 'cuenca', 'Rupanco'),
(68, 'idioma', 'Español'),
(68, 'institucion', 'Empresa privada'),
(68, 'materia', 'Calidad de agua'),
(68, 'materia', 'Cambio climático'),
(68, 'materia', 'Cultura y patrimonio'),
(68, 'materia', 'Educación ambiental'),
(68, 'materia', 'Monitoreo'),
(68, 'materia', 'Planificación territorial'),
(68, 'materia', 'Usos de suelo'),
(68, 'pais', 'Chile'),
(68, 'region', 'Los Lagos'),
(78, 'cuenca', 'Chapo'),
(78, 'cuenca', 'Llanquihue'),
(78, 'cuenca', 'Otro'),
(78, 'cuenca', 'Puyehue'),
(78, 'cuenca', 'Ranco'),
(78, 'cuenca', 'Rupanco'),
(78, 'cuenca', 'Villarrica'),
(78, 'idioma', 'Español'),
(78, 'institucion', 'Empresa privada'),
(78, 'materia', 'Calidad de agua'),
(78, 'materia', 'Cambio climático'),
(78, 'materia', 'Cultura y patrimonio'),
(78, 'materia', 'Educación ambiental'),
(78, 'materia', 'Monitoreo'),
(78, 'materia', 'Planificación territorial'),
(78, 'materia', 'Usos de suelo'),
(78, 'pais', 'Chile'),
(78, 'region', 'Los Lagos'),
(83, 'cuenca', 'Otro'),
(83, 'idioma', 'Español'),
(83, 'institucion', 'Academia'),
(83, 'institucion', 'Sector público'),
(83, 'materia', 'Biodiversidad'),
(83, 'materia', 'Calidad de agua'),
(83, 'materia', 'Cambio climático'),
(83, 'materia', 'Ciencia ciudadana'),
(83, 'materia', 'Cultura y patrimonio'),
(83, 'materia', 'Educación ambiental'),
(83, 'materia', 'Hidrodinámica'),
(83, 'materia', 'Monitoreo'),
(83, 'materia', 'Planificación territorial'),
(83, 'materia', 'Tecnologías'),
(83, 'materia', 'Usos de suelo'),
(83, 'pais', 'Chile'),
(83, 'region', 'Otra'),
(87, 'cuenca', 'Otro'),
(87, 'idioma', 'Inglés'),
(87, 'institucion', 'Centro de investigación'),
(87, 'institucion', 'Empresa privada'),
(87, 'materia', 'Biodiversidad'),
(87, 'materia', 'Calidad de agua'),
(87, 'materia', 'Cambio climático'),
(87, 'materia', 'Ciencia ciudadana'),
(87, 'materia', 'Cultura y patrimonio'),
(87, 'materia', 'Educación ambiental'),
(87, 'materia', 'Hidrodinámica'),
(87, 'materia', 'Metagenómica'),
(87, 'materia', 'Monitoreo'),
(87, 'materia', 'Planificación territorial'),
(87, 'materia', 'Tecnologías'),
(87, 'materia', 'Teledección'),
(87, 'materia', 'Telemetría'),
(87, 'pais', 'Extranjero'),
(87, 'region', 'Otra'),
(88, 'cuenca', 'Otro'),
(88, 'idioma', 'Español'),
(88, 'institucion', 'Academia'),
(88, 'materia', 'Biodiversidad'),
(88, 'materia', 'Calidad de agua'),
(88, 'materia', 'Cambio climático'),
(88, 'materia', 'Ciencia ciudadana'),
(88, 'materia', 'Cultura y patrimonio'),
(88, 'materia', 'Educación ambiental'),
(88, 'materia', 'Hidrodinámica'),
(88, 'materia', 'Monitoreo'),
(88, 'materia', 'Planificación territorial'),
(88, 'materia', 'Tecnologías'),
(88, 'materia', 'Usos de suelo'),
(88, 'pais', 'Extranjero'),
(88, 'region', 'Otra'),
(89, 'cuenca', 'Otro'),
(89, 'idioma', 'Español'),
(89, 'institucion', 'Academia'),
(89, 'institucion', 'Centro de investigación'),
(89, 'materia', 'Calidad de agua'),
(89, 'materia', 'Ciencia ciudadana'),
(89, 'materia', 'Cultura y patrimonio'),
(89, 'materia', 'Educación ambiental'),
(89, 'materia', 'Monitoreo'),
(89, 'materia', 'Planificación territorial'),
(89, 'materia', 'Usos de suelo'),
(89, 'pais', 'Chile'),
(89, 'region', 'Otra'),
(90, 'cuenca', 'Caburgua'),
(90, 'cuenca', 'Calafquén'),
(90, 'cuenca', 'Maihue'),
(90, 'cuenca', 'Panguipulli'),
(90, 'cuenca', 'Puyehue'),
(90, 'cuenca', 'Ranco'),
(90, 'cuenca', 'Riñihue'),
(90, 'cuenca', 'Villarrica'),
(90, 'idioma', 'Español'),
(90, 'institucion', 'Sector público'),
(90, 'materia', 'Biodiversidad'),
(90, 'materia', 'Calidad de agua'),
(90, 'materia', 'Cambio climático'),
(90, 'materia', 'Ciencia ciudadana'),
(90, 'materia', 'Cultura y patrimonio'),
(90, 'materia', 'Educación ambiental'),
(90, 'materia', 'Hidrodinámica'),
(90, 'materia', 'Monitoreo'),
(90, 'materia', 'Planificación territorial'),
(90, 'materia', 'Tecnologías'),
(90, 'materia', 'Usos de suelo'),
(90, 'pais', 'Chile'),
(90, 'region', 'Araucanía'),
(90, 'region', 'Los Lagos'),
(90, 'region', 'Los Ríos'),
(90, 'region', 'Otra'),
(96, 'cuenca', 'Rupanco'),
(96, 'idioma', 'Español'),
(96, 'institucion', 'Academia'),
(96, 'materia', 'Biodiversidad'),
(96, 'materia', 'Calidad de agua'),
(96, 'materia', 'Cambio climático'),
(96, 'materia', 'Ciencia ciudadana'),
(96, 'materia', 'Cultura y patrimonio'),
(96, 'materia', 'Educación ambiental'),
(96, 'materia', 'Hidrodinámica'),
(96, 'materia', 'Monitoreo'),
(96, 'materia', 'Planificación territorial'),
(96, 'materia', 'Tecnologías'),
(96, 'materia', 'Usos de suelo'),
(96, 'pais', 'Chile'),
(96, 'region', 'Los Lagos'),
(97, 'cuenca', 'Rupanco'),
(97, 'idioma', 'Español'),
(97, 'institucion', 'Academia'),
(97, 'materia', 'Biodiversidad'),
(97, 'materia', 'Calidad de agua'),
(97, 'materia', 'Cambio climático'),
(97, 'materia', 'Ciencia ciudadana'),
(97, 'materia', 'Cultura y patrimonio'),
(97, 'materia', 'Educación ambiental'),
(97, 'materia', 'Hidrodinámica'),
(97, 'materia', 'Monitoreo'),
(97, 'materia', 'Planificación territorial'),
(97, 'materia', 'Tecnologías'),
(97, 'materia', 'Usos de suelo'),
(97, 'pais', 'Chile'),
(97, 'region', 'Los Lagos'),
(98, 'cuenca', 'Calafquén'),
(98, 'cuenca', 'Neltume'),
(98, 'cuenca', 'Panguipulli'),
(98, 'cuenca', 'Pirihueico'),
(98, 'cuenca', 'Puyehue'),
(98, 'cuenca', 'Riñihue'),
(98, 'idioma', 'Español'),
(98, 'institucion', 'Academia'),
(98, 'institucion', 'Sector público'),
(98, 'materia', 'Biodiversidad'),
(98, 'materia', 'Calidad de agua'),
(98, 'materia', 'Cambio climático'),
(98, 'materia', 'Ciencia ciudadana'),
(98, 'materia', 'Cultura y patrimonio'),
(98, 'materia', 'Educación ambiental'),
(98, 'materia', 'Hidrodinámica'),
(98, 'materia', 'Monitoreo'),
(98, 'materia', 'Planificación territorial'),
(98, 'materia', 'Tecnologías'),
(98, 'materia', 'Usos de suelo'),
(98, 'pais', 'Chile'),
(98, 'region', 'Los Ríos'),
(99, 'cuenca', 'Chapo'),
(99, 'cuenca', 'Llanquihue'),
(99, 'cuenca', 'Maihue'),
(99, 'cuenca', 'Puyehue'),
(99, 'cuenca', 'Ranco'),
(99, 'cuenca', 'Rupanco'),
(99, 'cuenca', 'Todos los Santos'),
(99, 'idioma', 'Español'),
(99, 'institucion', 'Academia'),
(99, 'materia', 'Biodiversidad'),
(99, 'materia', 'Calidad de agua'),
(99, 'materia', 'Cambio climático'),
(99, 'materia', 'Ciencia ciudadana'),
(99, 'materia', 'Cultura y patrimonio'),
(99, 'materia', 'Educación ambiental'),
(99, 'materia', 'Hidrodinámica'),
(99, 'materia', 'Monitoreo'),
(99, 'materia', 'Planificación territorial'),
(99, 'materia', 'Tecnologías'),
(99, 'materia', 'Usos de suelo'),
(99, 'pais', 'Chile'),
(99, 'region', 'Los Lagos'),
(100, 'cuenca', 'Riñihue'),
(100, 'idioma', 'Español'),
(100, 'institucion', 'Academia'),
(100, 'materia', 'Biodiversidad'),
(100, 'materia', 'Calidad de agua'),
(100, 'materia', 'Cambio climático'),
(100, 'materia', 'Ciencia ciudadana'),
(100, 'materia', 'Cultura y patrimonio'),
(100, 'materia', 'Educación ambiental'),
(100, 'materia', 'Hidrodinámica'),
(100, 'materia', 'Monitoreo'),
(100, 'materia', 'Tecnologías'),
(100, 'materia', 'Usos de suelo'),
(100, 'pais', 'Chile'),
(100, 'region', 'Los Ríos'),
(103, 'cuenca', 'Llanquihue'),
(103, 'idioma', 'Español'),
(103, 'institucion', 'Academia'),
(103, 'materia', 'Biodiversidad'),
(103, 'materia', 'Calidad de agua'),
(103, 'materia', 'Cambio climático'),
(103, 'materia', 'Hidrodinámica'),
(103, 'materia', 'Metagenómica'),
(103, 'materia', 'Monitoreo'),
(103, 'materia', 'Planificación territorial'),
(103, 'materia', 'Tecnologías'),
(103, 'materia', 'Teledección'),
(103, 'materia', 'Usos de suelo'),
(103, 'pais', 'Chile'),
(103, 'region', 'Los Lagos'),
(104, 'cuenca', 'Otro'),
(104, 'idioma', 'Inglés'),
(104, 'institucion', 'Academia'),
(104, 'materia', 'Metagenómica'),
(104, 'pais', 'Extranjero'),
(104, 'region', 'Otra'),
(105, 'cuenca', 'Otro'),
(105, 'idioma', 'Inglés'),
(105, 'institucion', 'Empresa privada'),
(105, 'materia', 'Calidad de agua'),
(105, 'materia', 'Monitoreo'),
(105, 'pais', 'Extranjero'),
(105, 'region', 'Otra'),
(106, 'cuenca', 'Otro'),
(106, 'idioma', 'Inglés'),
(106, 'institucion', 'Academia'),
(106, 'materia', 'Calidad de agua'),
(106, 'pais', 'Extranjero'),
(106, 'region', 'Otra'),
(107, 'cuenca', 'Otro'),
(107, 'idioma', 'Inglés'),
(107, 'institucion', 'Academia'),
(107, 'materia', 'Metagenómica'),
(107, 'pais', 'Extranjero'),
(107, 'region', 'Otra'),
(108, 'cuenca', 'Otro'),
(108, 'idioma', 'Inglés'),
(108, 'institucion', 'Academia'),
(108, 'materia', 'Calidad de agua'),
(108, 'pais', 'Extranjero'),
(108, 'region', 'Otra'),
(110, 'cuenca', 'Otro'),
(110, 'idioma', 'Inglés'),
(110, 'institucion', 'Centro de investigación'),
(110, 'materia', 'Calidad de agua'),
(110, 'pais', 'Extranjero'),
(110, 'region', 'Otra'),
(111, 'cuenca', 'Otro'),
(111, 'idioma', 'Inglés'),
(111, 'institucion', 'Centro de investigación'),
(111, 'materia', 'Calidad de agua'),
(111, 'materia', 'Tecnologías'),
(111, 'pais', 'Extranjero'),
(111, 'region', 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE `incidentes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Autor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Lugar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Lat` double DEFAULT NULL,
  `Lng` double DEFAULT NULL,
  `Estado` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `File1` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `File2` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `File3` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `incidentes`
--

INSERT INTO `incidentes` (`ID`, `Nombre`, `Fecha`, `Autor`, `Email`, `Lugar`, `Categoria`, `Descripcion`, `Lat`, `Lng`, `Estado`, `File1`, `File2`, `File3`) VALUES
(20, 'Relleno humedal borde lago', '2022-10-18 00:00:00', '', '', 'Costanera, cercano al Hostal Climbhouse', 'Relleno', 'Relleno de humedal próximo a Climbhouse', -41.3282044, -72.9572423, 'Publicado', 'incidents_images/Foto_634ec58507be63.76960318.jpeg', 'incidents_images/Foto_634ec58507e0c3.16151012.jpeg', ''),
(21, 'Vertido de combustible en el lago Llanquihue', '2022-10-18 00:00:00', '', '', 'Lago Llanquihue frente a Club de Rodeo Puerto Varas', 'Vertido/Descarga', 'Si observan manchas iridiscentes ocupando una gran área en el lago Llanquihue frente a Club de Rodeo', -41.3061473, -72.929661, 'Publicado', 'incidents_images/Foto_634ec6801234f5.04854941.jpeg', 'incidents_images/Foto_634ec680125d94.10112889.jpeg', ''),
(28, 'Relleno quebrada honda', '2022-12-22 00:00:00', 'Jorge Guzmán', 'jorge@indaga.me', 'Quebrada honda', 'Relleno', 'Tras constatar el grave daño ambiental del relleno ilegal en el humedal urbano Quebrada Honda, la Municipalidad de Puerto Varas presentó una denuncia ante la Superintendencia de Medio Ambiente, entregando además antecedentes a la Dirección General de Aguas (DGA).\r\n\r\nEl área de más de 3,5 hectáreas, es parte de la Red Comunal de Humedales registrados en el Inventario Nacional de Humedales Urbanos del Ministerio del Medio Ambiente y desde 2016 organizaciones sociales y municipios trabajan colaborativamente para recuperar el espacio de biodiversidad a través de la creación de un parque urbano.\r\n\r\nDe acuerdo a lo señalado por la casa edil, la destrucción del sector se confirmó el 21 de noviembre cuando diversos camiones rellenaron con tierra el lugar ubicado en calle Puntiagudo con avenida Colón, en pleno humedal, haciendo desaparecer la vegetación nativa y destruyendo el hábitat de aves, insectos y animales.', -41.3326285, -72.9633863, 'Publicado', 'incidents_images/Foto_63a45ca96db1a4.75162540.jpeg', 'incidents_images/Foto_63a45ca96ea1d2.97893205.jpeg', 'incidents_images/Foto_63a45ca96f37c6.44919169.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lagosinhuella-biblioteca`
--

CREATE TABLE `lagosinhuella-biblioteca` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ArchivoDescargar` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `lagosinhuella-biblioteca`
--

INSERT INTO `lagosinhuella-biblioteca` (`ID`, `Titulo`, `ArchivoDescargar`) VALUES
(25, 'Informe Trimestral SEREMI Medioambiente (Sept.-Nov 2022)', 'uploads/lagosinhuella/file_63f512488d78c3.76108955.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metagenomica`
--

CREATE TABLE `metagenomica` (
  `ID` int(11) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Cicle` int(11) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `ImagePath` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Titulo` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FilePath1` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FilePath2` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `metagenomica`
--

INSERT INTO `metagenomica` (`ID`, `Year`, `Cicle`, `Type`, `ImagePath`, `Fecha`, `Titulo`, `FilePath1`, `FilePath2`) VALUES
(98, 2021, 3, 3, 'uploads/metagenomica-2021-3-3_6320add0865da8.21651464.png', '2021-03-19', 'Puerto Varas', '', ''),
(97, 2021, 3, 2, 'uploads/metagenomica-2021-2-3_6320adc2917499.52637299.PNG', '2021-03-19', 'Puerto Varas', '', ''),
(91, 2020, 9, 2, 'uploads/metagenomica-2020-2-9_6320acdc1e5372.61581241.PNG', '2020-09-03', 'Puerto Varas', '', ''),
(92, 2020, 9, 3, 'uploads/metagenomica-2020-3-9_6320ace737edc8.37505064.jpg', '2020-09-03', 'Puerto Varas', '', ''),
(57, 2020, 6, 1, 'uploads/metagenomica-2020-1-6_630fdc91b5b941.18817422.png', '2020-06-10', 'Puerto Varas', '', ''),
(95, 2020, 6, 2, 'uploads/metagenomica-2020-2-6_6320ad5dbf3ee7.67973956.jpg', '2020-06-10', 'Puerto Varas', '', ''),
(96, 2020, 6, 3, 'uploads/metagenomica-2020-3-6_6320ad7347d534.59283966.png', '2020-06-10', 'Puerto Varas', '', ''),
(61, 2021, 3, 1, 'uploads/metagenomica-2021-1-3_630fddeece4f95.37510706.png', '2021-03-19', 'Puerto Varas', '', ''),
(54, 2020, 9, 1, 'uploads/metagenomica-2020-1-9_630fdbd2569594.43873361.png', '2020-09-03', 'Puerto Varas', '', ''),
(51, 2020, 10, 1, 'uploads/metagenomica-2020-1-10_630fdb63e73e60.80451657.png', '2020-10-29', 'Puerto Varas', '', ''),
(93, 2020, 10, 2, 'uploads/metagenomica-2020-2-10_6320ad30d40511.65033608.PNG', '2020-10-29', 'LocaciÃ³n de toma de muestras en Puerto Varas', '', ''),
(94, 2020, 10, 3, 'uploads/metagenomica-2020-3-10_6320ad3c218716.29439094.jpg', '2020-10-29', 'ComposiciÃ³n sanitaria de microorganismos', '', ''),
(64, 2019, 11, 1, 'uploads/metagenomica-2019-1-11_630fde97bae543.73996401.png', '2019-11-26', 'Puerto Varas', '', ''),
(87, 2019, 11, 2, 'uploads/metagenomica-2019-2-11_6320ac46f17b02.51695661.jpg', '2019-11-26', 'Puerto Varas', '', ''),
(88, 2019, 11, 3, 'uploads/metagenomica-2019-3-11_6320ac559050f8.05241040.png', '2019-11-26', 'Puerto Varas', '', ''),
(67, 2021, 9, 1, 'uploads/metagenomica-2021-1-9_631fa310c2f788.64448339.PNG', '2021-09-13', 'Frutillar', '', ''),
(99, 2021, 9, 2, 'uploads/metagenomica-2021-2-9_6320ae01d79fa0.36807770.PNG', '2021-09-13', 'Frutillar', '', ''),
(100, 2021, 9, 3, 'uploads/metagenomica-2021-3-9_6320ae10e5cab4.39407314.png', '2021-09-13', 'Frutillar', '', ''),
(80, 2021, 5, 1, 'uploads/metagenomica-2021-1-5_631fb145271aa2.31932038.PNG', '2021-05-19', 'Frutillar', '', ''),
(103, 2021, 5, 2, 'uploads/metagenomica-2021-2-5_6320ae8638c019.13323947.PNG', '2021-05-19', 'Frutillar', '', ''),
(104, 2021, 5, 3, 'uploads/metagenomica-2021-3-5_6320ae90323ca9.20144866.png', '2021-05-19', 'Frutillar', '', ''),
(83, 2021, 4, 1, 'uploads/metagenomica-2021-1-4_631fb3bd1b4dc0.10845011.png', '2021-04-30', 'Llanquihue', '', ''),
(84, 2021, 4, 2, 'uploads/metagenomica-2021-2-4_631fb3eb8a1af0.64458443.PNG', '2021-04-30', 'Llanquihue', '', ''),
(85, 2020, 4, 3, 'uploads/metagenomica-2020-3-4_631fb4040c2450.39128967.png', '2021-04-30', 'Llanquihue', '', ''),
(86, 2021, 4, 3, 'uploads/metagenomica-2021-3-4_631fb477a71c28.27667285.png', '2021-04-30', 'Llanquihue', '', ''),
(89, 2020, 4, 1, 'uploads/metagenomica-2020-1-4_6320ac8e548ab4.94094055.png', '2021-04-30', 'Llanquihue', '', ''),
(90, 2020, 4, 2, 'uploads/metagenomica-2020-2-4_6320acacbe0b89.10832112.PNG', '2021-04-30', 'Llanquihue', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metagenomica-tablas`
--

CREATE TABLE `metagenomica-tablas` (
  `ID` int(11) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Cicle` int(11) DEFAULT NULL,
  `Tabla1` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Tabla2` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `metagenomica-tablas`
--

INSERT INTO `metagenomica-tablas` (`ID`, `Year`, `Cicle`, `Tabla1`, `Tabla2`) VALUES
(4, 2021, 12, 'uploads/tablataxonomica-2021-12_61aa24c5348641.52612256.xlsx', 'uploads/tablataxonomica-2021-12_61aa24caaaa8a3.21912772.xlsx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_mediciones`
--

CREATE TABLE `puntos_mediciones` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Lat` double DEFAULT NULL,
  `Lng` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `puntos_mediciones`
--

INSERT INTO `puntos_mediciones` (`ID`, `Nombre`, `Lat`, `Lng`) VALUES
(1, 'Santa Rosa Final', -41.31181944444444, -72.97767777777779),
(2, 'Cerro Philippi ', -41.312805555555556, -72.97817222222223),
(3, 'Aliviadero Santa Rosa', -41.315488888888886, -72.98222222222222),
(4, 'Diego Portales ', -41.31612777777777, -72.98223888888889),
(5, 'Walker Martínez', -41.31676111111111, -72.98194444444445),
(6, 'Muelle', -41.31756388888889, -72.9814638888889),
(7, 'Hotel Radisson', -41.31803333333334, -72.98105555555556),
(8, 'Hotel Bellavista', -41.31916944444445, -72.97945833333334),
(9, 'Vicente Pérez Rosales', -41.32541944444445, -72.97068888888889),
(10, 'Antonio Varas', -41.32637777777778, -72.96740555555556),
(11, 'Eleuterio Ramírez', -41.326863888888894, -72.9654388888889),
(12, 'Freire', -41.32718333333334, -72.9639638888889),
(13, 'Aliviadero Pto. Chico', -41.32779722222222, -72.96060833333334),
(14, 'Quebrada Honda', -41.327802777777784, -72.95788611111111),
(15, 'Marina de Puerto Varas', -41.32531666666667, -72.95573888888889),
(16, 'Doña Ema', -41.32245833333334, -72.95302222222223);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_muestras`
--

CREATE TABLE `puntos_muestras` (
  `ID` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Valor` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `PuntoID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `puntos_muestras`
--

INSERT INTO `puntos_muestras` (`ID`, `Fecha`, `Valor`, `PuntoID`) VALUES
(53, '2022-11-07', '7.8', 2),
(54, '2022-12-26', '170', 3),
(52, '2022-10-03', '11', 2),
(51, '2022-09-05', '79', 2),
(21, '2022-09-05', '49', 16),
(22, '2022-10-03', '170', 16),
(23, '2022-11-07', '1700', 16),
(24, '2022-09-05', '2', 15),
(25, '2022-10-03', '7.8', 15),
(26, '2022-11-07', '2', 15),
(27, '2022-09-05', '70', 14),
(28, '2022-10-03', '16000', 14),
(29, '2022-11-07', '2', 14),
(30, '2022-09-05', '46', 13),
(31, '2022-10-03', '170', 13),
(32, '2022-11-07', '1700', 13),
(33, '2022-09-05', '230', 10),
(34, '2022-10-03', '1700', 10),
(35, '2022-11-07', '23', 10),
(36, '2022-09-05', '16000', 7),
(37, '2022-10-03', '16000', 7),
(38, '2022-11-07', '230', 7),
(39, '2022-09-05', '490', 6),
(40, '2022-10-03', '16000', 6),
(41, '2022-11-07', '16000', 6),
(42, '2022-09-05', '23', 5),
(43, '2022-10-03', '110', 5),
(44, '2022-11-07', '5400', 5),
(45, '2022-09-05', '7.8', 4),
(46, '2022-10-03', '220', 4),
(47, '2022-11-07', '140', 4),
(48, '2022-09-05', '11', 3),
(49, '2022-10-03', '33', 3),
(50, '2022-11-07', '7.8', 3),
(55, '2023-01-16', '303', 3),
(56, '2023-01-16', '304', 2),
(57, '2022-12-26', '33', 2),
(58, '2022-12-13', '330', 4),
(59, '2023-01-16', '302', 4),
(60, '2022-12-13', '6.1', 6),
(61, '2023-01-16', '1700', 6),
(62, '2022-12-13', '1700', 5),
(63, '2023-01-16', '2', 5),
(64, '2022-12-26', '16000', 7),
(65, '2023-01-16', '5400', 7),
(66, '2022-12-26', '9200', 10),
(67, '2023-01-16', '460', 10),
(68, '2022-12-26', '7.8', 11),
(69, '2022-12-26', '4.5', 12),
(70, '2022-12-26', '4.5', 13),
(71, '2023-01-16', '33', 13),
(72, '2022-12-13', '33', 14),
(73, '2023-01-16', '790', 14),
(74, '2022-12-26', '4.5', 15),
(75, '2023-01-16', '79', 15),
(76, '2022-12-26', '49', 16),
(77, '2023-01-16', '16000', 16),
(78, '2023-02-07', '79', 1),
(79, '2023-02-07', '4.5', 2),
(80, '2023-02-07', '49', 3),
(81, '2023-02-07', '16000', 4),
(82, '2023-02-07', '70', 5),
(83, '2023-02-07', '490', 6),
(84, '2023-02-07', '16000', 7),
(85, '2023-02-07', '23', 8),
(86, '2023-02-07', '2', 9),
(87, '2023-02-07', '23', 10),
(88, '2023-02-07', '4.5', 11),
(89, '2023-02-07', '49', 12),
(90, '2023-02-07', '1300', 13),
(91, '2023-02-07', '110', 14),
(92, '2023-02-07', '2', 15),
(93, '2023-02-07', '230', 16),
(94, '2023-03-21', '3500', 16),
(95, '2023-03-21', '33', 15),
(96, '2023-03-21', '79', 14),
(97, '2023-04-17', '21', 13),
(98, '2023-03-21', '27', 12),
(99, '2023-03-21', '7.8', 11),
(100, '2023-03-21', '490', 10),
(101, '2023-03-21', '14', 9),
(102, '2023-03-21', '33', 8),
(103, '2023-03-21', '16000', 7),
(104, '2023-03-21', '9200', 6),
(105, '2023-03-21', '490', 5),
(106, '2023-03-21', '4.5', 4),
(107, '2023-03-21', '23', 3),
(108, '2023-03-21', '13', 2),
(109, '2023-03-21', '2.0', 1),
(110, '2023-04-17', '110', 16),
(111, '2023-04-17', '17', 15),
(112, '2023-04-17', '46', 14),
(113, '2023-04-17', '2400', 12),
(114, '2023-04-17', '79', 11),
(115, '2023-04-17', '23', 10),
(116, '2023-04-17', '23', 9),
(117, '2023-04-17', '170', 8),
(118, '2023-04-17', '9200', 7),
(119, '2023-04-17', '9200', 6),
(120, '2023-04-17', '49', 5),
(121, '2023-04-17', '130', 4),
(122, '2023-04-17', '280', 3),
(123, '2023-04-17', '23', 2),
(124, '2023-04-17', '330', 1),
(125, '2023-05-31', '130', 16),
(126, '2023-05-31', '4.5', 15),
(127, '2023-05-31', '130', 14),
(128, '2023-05-31', '1300', 13),
(129, '2023-05-31', '1100', 12),
(130, '2023-05-31', '790', 11),
(131, '2023-05-31', '16000', 10),
(132, '2023-05-31', '230', 9),
(133, '2023-05-31', '16000', 8),
(134, '2023-05-31', '9200', 7),
(135, '2023-05-31', '16000', 6),
(136, '2023-05-31', '3500', 5),
(137, '2023-05-31', '16000', 4),
(138, '2023-05-31', '490', 3),
(139, '2023-05-31', '490', 2),
(140, '2023-05-31', '490', 1),
(141, '2023-06-30', '1100', 1),
(142, '2023-06-30', '330', 2),
(143, '2023-06-30', '1300', 3),
(144, '2023-06-30', '9200', 4),
(145, '2023-06-30', '16000', 5),
(146, '2023-06-30', '16000', 6),
(147, '2023-06-30', '16000', 7),
(148, '2023-06-30', '16000', 8),
(149, '2023-06-30', '9200', 9),
(150, '2023-06-29', '16000', 10),
(151, '2023-06-29', '1100', 11),
(152, '2023-06-29', '2400', 12),
(153, '2023-06-29', '2200', 13),
(154, '2023-06-29', '220', 14),
(155, '2023-06-29', '33', 15),
(156, '2023-06-29', '23', 15),
(157, '2023-07-05', '230', 16),
(158, '2023-07-05', '33', 15),
(159, '2023-07-05', '79', 14),
(160, '2023-07-05', '2400', 13),
(161, '2023-07-05', '3500', 12),
(162, '2023-07-05', '5400', 11),
(163, '2023-07-05', '16000', 10),
(164, '2023-07-05', '16000', 9),
(165, '2023-07-05', '16000', 8),
(166, '2023-07-05', '2400', 7),
(167, '2023-07-05', '16000', 6),
(168, '2023-07-05', '16000', 5),
(169, '2023-07-05', '16000', 4),
(170, '2023-07-05', '16000', 3),
(171, '2023-07-05', '46', 2),
(172, '2023-07-05', '79', 1),
(173, '2023-08-09', '26', 1),
(174, '2023-08-09', '33', 2),
(175, '2023-08-09', '5400', 3),
(176, '2023-08-09', '2400', 4),
(177, '2023-08-09', '16000', 5),
(178, '2023-08-09', '5400', 6),
(179, '2023-08-09', '1700', 7),
(180, '2023-08-09', '79', 8),
(181, '2023-08-09', '16000', 9),
(182, '2023-08-09', '16000', 10),
(183, '2023-08-09', '330', 11),
(184, '2023-08-09', '700', 12),
(185, '2023-08-09', '700', 13),
(186, '2023-08-09', '130', 14),
(187, '2023-08-09', '49', 15),
(188, '2023-08-09', '490', 16),
(189, '2023-09-27', '22', 1),
(190, '2023-09-27', '1300', 2),
(191, '2023-09-27', '790', 3),
(192, '2023-09-27', '490', 4),
(193, '2023-09-27', '5400', 5),
(194, '2023-09-27', '16000', 6),
(195, '2023-09-27', '5400', 7),
(196, '2023-09-27', '1700', 8),
(197, '2023-09-27', '5400', 9),
(198, '2023-09-27', '16000', 10),
(199, '2023-09-27', '310', 11),
(200, '2023-09-27', '70', 12),
(201, '2023-09-27', '790', 13),
(202, '2023-09-27', '49', 14),
(203, '2023-09-27', '130', 15),
(204, '2023-09-27', '230', 16),
(205, '2023-10-23', '23', 16),
(206, '2023-10-23', '2.0', 15),
(207, '2023-10-23', '2.0', 14),
(208, '2023-10-23', '2.0', 13),
(209, '2023-10-23', '2.0', 13),
(210, '2023-10-23', '2.0', 12),
(211, '2023-10-23', '2.0', 11),
(212, '2023-10-23', '16000', 10),
(213, '2023-10-23', '4.0', 9),
(214, '2023-10-23', '7.8', 8),
(215, '2023-10-23', '1300', 7),
(216, '2023-10-23', '16000', 6),
(217, '2023-10-23', '4.5', 5),
(218, '2023-10-23', '11', 4),
(219, '2023-10-23', '9.3', 3),
(220, '2023-10-23', '4.5', 2),
(221, '2023-10-23', '23', 1),
(222, '2023-11-13', '49', 16),
(223, '2023-11-13', '13', 15),
(224, '2023-11-13', '49', 14),
(225, '2023-11-13', '110', 13),
(226, '2023-11-13', '2400', 12),
(227, '2023-11-13', '2200', 11),
(228, '2023-11-13', '2400', 10),
(229, '2023-11-13', '2400', 9),
(230, '2023-11-13', '790', 7),
(231, '2023-11-13', '1300', 8),
(232, '2023-11-13', '3500', 6),
(233, '2023-11-13', '3500', 5),
(234, '2023-11-13', '49', 4),
(235, '2023-11-13', '33', 3),
(236, '2023-11-13', '46', 2),
(237, '2023-12-12', '23', 16),
(238, '2023-12-12', '11', 15),
(239, '2023-12-12', '3500', 14),
(240, '2023-12-12', '33', 13),
(241, '2023-12-12', '49', 12),
(242, '2023-12-12', '49', 11),
(243, '2023-12-12', '16000', 10),
(244, '2023-12-12', '2200', 9),
(245, '2023-12-12', '16000', 8),
(246, '2023-12-12', '2400', 7),
(247, '2023-12-12', '16000', 6),
(248, '2023-12-12', '230', 5),
(249, '2023-12-12', '13', 4),
(250, '2023-12-12', '330', 3),
(251, '2023-12-12', '2', 2),
(252, '2023-12-12', '7.8', 1),
(253, '2024-01-29', '7', 1),
(254, '2024-01-29', '330', 2),
(255, '2024-01-29', '70', 3),
(256, '2024-01-29', '22', 4),
(257, '2024-01-29', '2400', 5),
(258, '2024-01-29', '2200', 6),
(259, '2024-01-29', '230', 7),
(260, '2024-01-29', '5400', 8),
(261, '2024-01-29', '33', 9),
(262, '2024-01-29', '16000', 10),
(263, '2024-01-29', '14', 11),
(264, '2024-01-29', '16000', 12),
(265, '2024-01-29', '79', 13),
(266, '2024-01-29', '330', 14),
(267, '2024-01-29', '230', 15),
(268, '2024-01-29', '490', 16),
(269, '2024-02-26', '2', 1),
(270, '2024-02-26', '2', 2),
(271, '2024-02-26', '7.8', 3),
(272, '2024-02-26', '2', 4),
(273, '2024-02-26', '330', 5),
(274, '2024-02-26', '490', 6),
(275, '2024-02-26', '130', 7),
(276, '2024-02-26', '230', 8),
(277, '2024-02-26', '33', 9),
(278, '2024-02-26', '46', 10),
(279, '2024-02-26', '16000', 11),
(280, '2024-02-26', '11', 12),
(281, '2024-02-26', '1300', 13),
(282, '2024-02-26', '23', 14),
(283, '2024-02-26', '79', 15),
(284, '2024-02-26', '130', 16),
(285, '2024-04-16', '2', 2),
(286, '2024-04-16', '79', 1),
(358, '2024-10-28', '49', 4),
(360, '2024-10-28', '220', 5),
(289, '2024-04-16', '130', 8),
(290, '2024-04-16', '13', 9),
(291, '2024-04-16', '5400', 10),
(292, '2024-04-16', '33', 12),
(293, '2024-04-16', '33', 13),
(294, '2024-04-16', '540', 14),
(295, '2024-05-23', '49', 2),
(296, '2024-06-26', '33', 2),
(297, '2024-04-16', '79', 3),
(298, '2024-05-23', '14', 3),
(299, '2024-06-26', '920', 3),
(359, '2024-11-26', '7.8', 4),
(361, '2024-11-26', '240', 5),
(304, '2024-05-23', '350', 8),
(305, '2024-06-26', '350', 8),
(306, '2024-05-23', '8', 9),
(307, '2024-06-26', '240', 9),
(308, '2024-05-23', '2400', 10),
(309, '2024-06-26', '160000', 10),
(310, '2024-05-23', '11', 12),
(311, '2024-06-26', '3500', 12),
(312, '2024-05-23', '220', 13),
(313, '2024-06-26', '350000', 13),
(314, '2024-05-23', '13', 14),
(315, '2024-06-26', '540', 14),
(316, '2024-07-24', '1.8', 2),
(317, '2024-08-27', '4.5', 2),
(318, '2024-07-24', '280', 3),
(319, '2024-08-27', '14', 3),
(363, '2024-10-28', '4.5', 8),
(362, '2024-09-24', '2400', 8),
(324, '2024-07-24', '23', 8),
(325, '2024-08-27', '13', 8),
(326, '2024-07-24', '4.5', 9),
(327, '2024-08-27', '13', 9),
(328, '2024-07-24', '13', 10),
(329, '2024-08-27', '1600', 10),
(330, '2024-07-24', '2', 12),
(331, '2024-08-27', '1.8', 12),
(332, '2024-07-24', '79', 13),
(333, '2024-08-27', '79', 13),
(334, '2024-07-24', '920', 14),
(335, '2024-08-27', '13', 14),
(336, '2024-09-24', '130', 2),
(337, '2024-10-28', '1.8', 2),
(338, '2024-09-24', '220', 3),
(339, '2024-10-28', '49', 3),
(340, '2024-11-26', '49', 3),
(341, '2024-11-26', '2', 2),
(342, '2024-04-16', '23', 6),
(343, '2024-05-23', '350', 6),
(344, '2024-06-26', '54000', 6),
(345, '2024-07-25', '33', 6),
(346, '2024-08-27', '1600', 6),
(347, '2024-09-24', '5400', 6),
(365, '2024-09-24', '240', 9),
(350, '2024-04-16', '2', 7),
(351, '2024-05-23', '3500', 7),
(352, '2024-06-26', '9200', 7),
(353, '2024-07-25', '170', 7),
(354, '2024-08-27', '5400', 7),
(355, '2024-09-24', '3500', 7),
(364, '2024-11-26', '33', 8),
(366, '2024-10-28', '1.8', 9),
(367, '2024-11-26', '33', 9),
(368, '2024-09-24', '2400', 10),
(369, '2024-10-28', '220', 10),
(370, '2024-11-26', '540000', 10),
(371, '2024-09-24', '2400', 12),
(372, '2024-10-28', '1.8', 12),
(373, '2024-11-26', '1700', 12),
(374, '2024-09-24', '920', 13),
(375, '2024-10-28', '350', 13),
(376, '2024-11-26', '920', 13),
(377, '2024-09-24', '240', 14),
(378, '2024-10-28', '11', 14),
(379, '2024-11-26', '49', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teledeteccion`
--

CREATE TABLE `teledeteccion` (
  `ID` int(11) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Cicle` int(11) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `ImagePath` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Titulo` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FilePath1` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `FilePath2` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `teledeteccion`
--

INSERT INTO `teledeteccion` (`ID`, `Year`, `Cicle`, `Type`, `ImagePath`, `Fecha`, `Titulo`, `FilePath1`, `FilePath2`) VALUES
(44, 2017, 1, 2, 'uploads/teledeteccion-2017-2-1_62334071a9bcd1.80139073.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(67, 2021, 2, 2, 'uploads/teledeteccion-2021-2-2_623344c96f70a4.41157089.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(45, 2017, 5, 2, 'uploads/teledeteccion-2017-2-5_623341a7534e09.23552120.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(133, 2021, 12, 3, 'uploads/teledeteccion-2021-3-12_6234a4357dd5d7.70003830.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(66, 2021, 12, 2, 'uploads/teledeteccion-2021-2-12_62334406bbdc76.85557051.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(102, 2021, 12, 1, 'uploads/teledeteccion-2021-1-12_6234a15e002c23.96348492.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(105, 2021, 3, 1, 'uploads/teledeteccion-2021-1-3_6234a18f2ce3c5.85299818.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(69, 2021, 3, 2, 'uploads/teledeteccion-2021-2-3_62334503397b13.42411919.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(136, 2021, 3, 3, 'uploads/teledeteccion-2021-3-3_6234a462b866d2.84672456.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(73, 2017, 10, 2, 'uploads/teledeteccion-2017-2-10_623345d81186b7.21002005.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(47, 2018, 12, 2, 'uploads/teledeteccion-2018-2-12_623341ff32d523.76023738.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(48, 2018, 2, 2, 'uploads/teledeteccion-2018-2-2_62334217a53853.73021852.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(49, 2018, 7, 2, 'uploads/teledeteccion-2018-2-7_62334233c8a738.98668644.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(50, 2018, 11, 2, 'uploads/teledeteccion-2018-2-11_62334249a0ace5.53017057.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(51, 2019, 12, 2, 'uploads/teledeteccion-2019-2-12_6233426375dee2.68298816.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(52, 2019, 1, 2, 'uploads/teledeteccion-2019-2-1_6233428bae8a37.96367968.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(53, 2019, 2, 2, 'uploads/teledeteccion-2019-2-2_623342c1740112.53997934.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(54, 2019, 3, 2, 'uploads/teledeteccion-2019-2-3_623342d51d3929.61942284.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(55, 2019, 10, 2, 'uploads/teledeteccion-2019-2-10_623342ecde36d7.86836549.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(56, 2019, 9, 2, 'uploads/teledeteccion-2019-2-9_6233432b069ac1.32734772.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(57, 2020, 8, 2, 'uploads/teledeteccion-2020-2-8_6233435276b073.51947067.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(58, 2020, 2, 2, 'uploads/teledeteccion-2020-2-2_623343670abb44.81963218.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(59, 2020, 7, 2, 'uploads/teledeteccion-2020-2-7_6233437d596b40.31668083.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(60, 2020, 3, 2, 'uploads/teledeteccion-2020-2-3_6233438c713330.67073544.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(61, 2020, 5, 2, 'uploads/teledeteccion-2020-2-5_6233439dc9fcb1.87785126.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(62, 2020, 11, 2, 'uploads/teledeteccion-2020-2-11_623343af1ec0e9.30166626.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(63, 2020, 10, 2, 'uploads/teledeteccion-2020-2-10_623343c0201920.94877127.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(64, 2020, 9, 2, 'uploads/teledeteccion-2020-2-9_623343cf22c995.82385597.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(65, 2021, 4, 2, 'uploads/teledeteccion-2021-2-4_623343f81055c5.73864718.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(68, 2021, 6, 2, 'uploads/teledeteccion-2021-2-6_623344f4094f57.00036256.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(70, 2021, 11, 2, 'uploads/teledeteccion-2021-2-11_6233452cbd8050.20304596.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(71, 2021, 10, 2, 'uploads/teledeteccion-2021-2-10_6233453f3b4695.27901053.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(74, 2017, 9, 2, 'uploads/teledeteccion-2017-2-9_623345e8851329.26248126.jpeg', '2022-03-17', 'Sentinel 3', '', ''),
(75, 2017, 1, 1, 'uploads/teledeteccion-2017-1-1_62348fe88fcab4.42175723.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(76, 2017, 5, 1, 'uploads/teledeteccion-2017-1-5_62349ebc0601b4.50973965.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(77, 2017, 10, 1, 'uploads/teledeteccion-2017-1-10_62349ed3ccbad1.39178990.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(78, 2017, 9, 1, 'uploads/teledeteccion-2017-1-9_62349ee515ec55.82171521.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(79, 2018, 12, 1, 'uploads/teledeteccion-2018-1-12_62349f11da0f05.17610166.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(80, 2018, 2, 1, 'uploads/teledeteccion-2018-1-2_62349f2116f761.10284374.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(81, 2018, 7, 1, 'uploads/teledeteccion-2018-1-7_62349f33cd0a36.81226354.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(82, 2018, 11, 1, 'uploads/teledeteccion-2018-1-11_62349f47cc0660.71499327.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(91, 2019, 12, 1, 'uploads/teledeteccion-2019-1-12_6234a048852538.72772030.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(84, 2019, 1, 1, 'uploads/teledeteccion-2019-1-1_62349f99e52c35.90313227.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(86, 2019, 2, 1, 'uploads/teledeteccion-2019-1-2_62349fc18da041.67711504.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(87, 2019, 3, 1, 'uploads/teledeteccion-2019-1-3_62349fd4613569.03853842.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(88, 2019, 10, 1, 'uploads/teledeteccion-2019-1-10_62349fe36b8995.25695418.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(89, 2019, 9, 1, 'uploads/teledeteccion-2019-1-9_62349ff9ee9c03.28330158.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(92, 2020, 8, 1, 'uploads/teledeteccion-2020-1-8_6234a06f8d9e03.64907147.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(93, 2020, 2, 1, 'uploads/teledeteccion-2020-1-2_6234a0830d90b8.00936413.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(94, 2020, 7, 1, 'uploads/teledeteccion-2020-1-7_6234a096ce5af6.17941470.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(95, 2020, 3, 1, 'uploads/teledeteccion-2020-1-3_6234a0a9d6bcf3.00470057.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(96, 2020, 5, 1, 'uploads/teledeteccion-2020-1-5_6234a0bab6ec32.51516495.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(98, 2020, 11, 1, 'uploads/teledeteccion-2020-1-11_6234a0ddda2269.60838077.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(99, 2020, 10, 1, 'uploads/teledeteccion-2020-1-10_6234a0f0060e89.10558670.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(100, 2020, 9, 1, 'uploads/teledeteccion-2020-1-9_6234a130df55a7.45489447.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(101, 2021, 4, 1, 'uploads/teledeteccion-2021-1-4_6234a14e258c07.51067815.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(103, 2021, 2, 1, 'uploads/teledeteccion-2021-1-2_6234a171b3d205.53505123.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(104, 2021, 6, 1, 'uploads/teledeteccion-2021-1-6_6234a17f724818.66203084.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(106, 2021, 11, 1, 'uploads/teledeteccion-2021-1-11_6234a1a0b8e694.96224606.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(107, 2021, 10, 1, 'uploads/teledeteccion-2021-1-10_6234a1b5511397.48007834.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(108, 2017, 1, 3, 'uploads/teledeteccion-2017-3-1_6234a1db463b29.32625476.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(109, 2017, 5, 3, 'uploads/teledeteccion-2017-3-5_6234a1ef5455d0.86844853.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(110, 2017, 10, 3, 'uploads/teledeteccion-2017-3-10_6234a20277b954.36234363.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(111, 2017, 9, 3, 'uploads/teledeteccion-2017-3-9_6234a2125411b8.83989070.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(112, 2018, 12, 3, 'uploads/teledeteccion-2018-3-12_6234a26b0039f8.86409678.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(113, 2018, 2, 3, 'uploads/teledeteccion-2018-3-2_6234a2788e7646.79869005.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(114, 2018, 7, 3, 'uploads/teledeteccion-2018-3-7_6234a28a6033c5.99770146.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(115, 2018, 11, 3, 'uploads/teledeteccion-2018-3-11_6234a29a489962.88489017.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(116, 2019, 12, 3, 'uploads/teledeteccion-2019-3-12_6234a2b59219b4.11647595.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(117, 2019, 1, 3, 'uploads/teledeteccion-2019-3-1_6234a2c630f866.39092274.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(118, 2019, 2, 3, 'uploads/teledeteccion-2019-3-2_6234a2d49a69f1.88846975.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(119, 2019, 3, 3, 'uploads/teledeteccion-2019-3-3_6234a2eb6fff08.16897995.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(120, 2019, 10, 3, 'uploads/teledeteccion-2019-3-10_6234a2fba3bb24.02086994.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(121, 2019, 9, 3, 'uploads/teledeteccion-2019-3-9_6234a30eb39f92.58110628.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(122, 2020, 8, 3, 'uploads/teledeteccion-2020-3-8_6234a32c782c70.37165026.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(124, 2020, 2, 3, 'uploads/teledeteccion-2020-3-2_6234a354485140.13580420.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(125, 2020, 7, 3, 'uploads/teledeteccion-2020-3-7_6234a36290bad5.92604032.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(126, 2020, 3, 3, 'uploads/teledeteccion-2020-3-3_6234a3719eb670.43247456.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(127, 2020, 5, 3, 'uploads/teledeteccion-2020-3-5_6234a380b7b4b0.88042877.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(128, 2020, 11, 3, 'uploads/teledeteccion-2020-3-11_6234a3963f2577.78637185.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(129, 2020, 10, 3, 'uploads/teledeteccion-2020-3-10_6234a3a6515dd1.60072947.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(130, 2020, 9, 3, 'uploads/teledeteccion-2020-3-9_6234a3b730b357.13457458.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(132, 2021, 4, 3, 'uploads/teledeteccion-2021-3-4_6234a41e7a1b09.62862259.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(134, 2021, 2, 3, 'uploads/teledeteccion-2021-3-2_6234a446273df6.39135426.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(135, 2021, 6, 3, 'uploads/teledeteccion-2021-3-6_6234a454759ae3.05718836.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(137, 2021, 11, 3, 'uploads/teledeteccion-2021-3-11_6234a471dbb378.66302518.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(138, 2021, 10, 3, 'uploads/teledeteccion-2021-3-10_6234a4805a9631.40193377.jpeg', '2022-03-18', 'Sentinel 3', '', ''),
(162, 2022, 1, 3, 'uploads/teledeteccion-2022-3-1_634efaa79db419.90155163.jpg', '2022-01-27', 'Sentinel 3', '', ''),
(166, 2022, 1, 1, 'uploads/teledeteccion-2022-1-1_6357ff46adf0d8.41974213.jpg', '2022-01-27', 'Sentinel 3', '', ''),
(167, 2022, 1, 2, 'uploads/teledeteccion-2022-2-1_6357fffc6870e0.12294336.jpg', '2022-01-27', 'Sentinel 3', '', ''),
(168, 2022, 2, 3, 'uploads/teledeteccion-2022-3-2_636935b73febe2.22010530.jpg', '2022-02-17', 'Sentinel 3', '', ''),
(169, 2022, 2, 2, 'uploads/teledeteccion-2022-2-2_63693626e224a3.30789270.jpg', '2022-01-27', 'Sentinel 3', '', ''),
(170, 2022, 2, 1, 'uploads/teledeteccion-2022-1-2_636936dc501eb4.81980182.jpg', '2022-02-17', 'Sentinel 3', '', ''),
(171, 2022, 6, 1, 'uploads/teledeteccion-2022-1-6_637907c270c287.67079214.jpg', '2022-06-24', 'Sentinel 3', '', ''),
(172, 2022, 5, 2, 'uploads/teledeteccion-2022-2-5_6379086c7b9330.70491893.jpg', '2022-05-16', 'Sentinel 3', '', ''),
(173, 2022, 6, 2, 'uploads/teledeteccion-2022-2-6_637908b3b63eb8.97729386.jpg', '2022-06-24', 'Sentinel 3', '', ''),
(174, 2022, 4, 3, 'uploads/teledeteccion-2022-3-4_637909c3c7cf14.71297758.jpg', '2022-04-29', 'Sentinel 3', '', ''),
(175, 2022, 4, 2, 'uploads/teledeteccion-2022-2-4_63790a34365d26.49959900.jpg', '2022-04-29', 'Sentinel 3', '', ''),
(176, 2022, 5, 3, 'uploads/teledeteccion-2022-3-5_63790ad63d7fe2.26700699.jpg', '2022-05-16', 'Sentinel 3', '', ''),
(177, 2022, 6, 3, 'uploads/teledeteccion-2022-3-6_63790afea45081.41474338.jpg', '2022-06-24', 'Sentinel 3', '', ''),
(293, 2022, 10, 2, 'uploads/teledeteccion-2022-2-10_64a7438ccd06e3.12120794.jpg', '2022-10-18', 'Sentinel 3', '', ''),
(294, 2022, 10, 3, 'uploads/teledeteccion-2022-3-10_64a743a61c40b0.92341577.jpg', '2022-10-18', 'Sentinel 3', '', ''),
(287, 2022, 8, 1, 'uploads/teledeteccion-2022-1-8_64a60878bdfc55.47558195.jpg', '2022-08-28', 'Sentinel 3', '', ''),
(288, 2022, 8, 2, 'uploads/teledeteccion-2022-2-8_64a608afe0cba9.80466212.jpg', '2022-08-28', 'Sentinel 3', '', ''),
(289, 2022, 8, 3, 'uploads/teledeteccion-2022-3-8_64a608c3844717.02563767.jpg', '2022-08-28', 'Sentinel 3', '', ''),
(290, 2022, 9, 2, 'uploads/teledeteccion-2022-2-9_64a742d4b8afe3.22813072.jpg', '2022-09-27', 'Sentinel 3', '', ''),
(291, 2022, 9, 3, 'uploads/teledeteccion-2022-3-9_64a742ece76cd5.76452006.jpg', '2022-09-27', 'Sentinel 3', '', ''),
(292, 2022, 10, 1, 'uploads/teledeteccion-2022-1-10_64a7435998c060.79930427.jpg', '2022-10-18', 'Sentinel 3', '', ''),
(295, 2022, 11, 1, 'uploads/teledeteccion-2022-1-11_64a7441ac1c236.00248398.jpg', '2022-11-03', 'Sentinel 3', '', ''),
(296, 2022, 11, 2, 'uploads/teledeteccion-2022-2-11_64a7443309a405.18811171.jpg', '2022-11-03', 'Sentinel 3', '', ''),
(297, 2022, 11, 3, 'uploads/teledeteccion-2022-3-11_64a744477643f9.06317389.jpg', '2022-11-03', 'Sentinel 3', '', ''),
(298, 2022, 12, 2, 'uploads/teledeteccion-2022-2-12_64a744af518d97.32945512.jpg', '2022-12-29', 'Sentinel 3', '', ''),
(299, 2022, 12, 3, 'uploads/teledeteccion-2022-3-12_64a744c418df23.45593781.jpg', '2022-12-29', 'Sentinel 3', '', ''),
(300, 2023, 1, 1, 'uploads/teledeteccion-2023-1-1_64a7452424de85.26266490.jpg', '2023-01-28', 'Sentinel 3', '', ''),
(302, 2023, 1, 2, 'uploads/teledeteccion-2023-2-1_64a74552b69853.04989385.jpg', '2023-01-28', 'Sentinel 3', '', ''),
(303, 2023, 1, 3, 'uploads/teledeteccion-2023-3-1_64a7458154f3d8.87331597.jpg', '2023-01-28', 'Sentinel 3', '', ''),
(304, 2023, 2, 1, 'uploads/teledeteccion-2023-1-2_64a745dbb47478.78038550.jpg', '2023-02-17', 'Sentinel 3', '', ''),
(305, 2023, 2, 2, 'uploads/teledeteccion-2023-2-2_64a745ec61dc65.39727554.jpg', '2023-02-17', 'Sentinel 3', '', ''),
(306, 2023, 2, 3, 'uploads/teledeteccion-2023-3-2_64a7460135f7f6.27931678.jpg', '2023-02-17', 'Sentinel 3', '', ''),
(307, 2023, 4, 1, 'uploads/teledeteccion-2023-1-4_64a74681b1eb73.27430192.jpg', '2023-04-04', 'Sentinel 3', '', ''),
(308, 2023, 4, 2, 'uploads/teledeteccion-2023-2-4_64a74692821330.10195160.jpg', '2023-04-04', 'Sentinel 3', '', ''),
(309, 2023, 4, 3, 'uploads/teledeteccion-2023-3-4_64a746a4e6d678.66113633.jpg', '2023-04-04', 'Sentinel 3', '', ''),
(311, 2023, 6, 3, 'uploads/teledeteccion-2023-3-6_656e2302874175.70607335.jpg', '2023-06-19', 'SENTINEL 3', '', ''),
(312, 2023, 6, 2, 'uploads/teledeteccion-2023-2-6_656e236533f286.82418248.jpg', '2023-06-19', 'SENTINEL 3', '', ''),
(313, 2023, 7, 3, 'uploads/teledeteccion-2023-3-7_656e251ca39a66.23358089.jpg', '2023-07-17', 'SENTINEL 3', '', ''),
(314, 2023, 7, 2, 'uploads/teledeteccion-2023-2-7_656e253200fac1.08875673.jpg', '2023-07-17', 'SENTINEL 3', '', ''),
(315, 2023, 8, 3, 'uploads/teledeteccion-2023-3-8_656e25d794b795.15825971.jpg', '2023-08-07', 'SENTINEL 3', '', ''),
(317, 2023, 8, 2, 'uploads/teledeteccion-2023-2-8_656e25f184dae5.24174061.jpg', '2023-08-07', 'SENTINEL 3', '', ''),
(318, 2023, 8, 1, 'uploads/teledeteccion-2023-1-8_656e2602aef267.42807856.jpg', '2023-08-07', 'SENTINEL 3', '', ''),
(319, 2023, 9, 1, 'uploads/teledeteccion-2023-1-9_656e3b58edea66.61676986.jpg', '2023-09-25', 'SENTINEL 3', '', ''),
(320, 2023, 9, 2, 'uploads/teledeteccion-2023-2-9_656e3b6ce48387.82288344.jpg', '2023-09-25', 'SENTINEL 3', '', ''),
(321, 2023, 9, 3, 'uploads/teledeteccion-2023-3-9_656e3b7c359490.12136986.jpg', '2023-09-25', 'SENTINEL 3', '', ''),
(322, 2023, 10, 1, 'uploads/teledeteccion-2023-1-10_656e3b951ccb88.57118607.jpg', '2023-10-25', 'SENTINEL 3', '', ''),
(323, 2023, 10, 2, 'uploads/teledeteccion-2023-2-10_656e3ba55e49d3.50595215.jpg', '2023-10-25', 'SENTINEL 3', '', ''),
(324, 2023, 10, 3, 'uploads/teledeteccion-2023-3-10_656e3bb6f28608.74853809.jpg', '2023-10-25', 'SENTINEL 3', '', ''),
(326, 2023, 12, 3, 'uploads/teledeteccion-2023-3-12_663e4bf53546d5.49619260.jpg', '2023-12-19', 'SENTINEL 3', '', ''),
(327, 2023, 12, 2, 'uploads/teledeteccion-2023-2-12_663e4c0c2a19c1.80671565.jpg', '2023-12-19', 'SENTINEL 3', '', ''),
(328, 2023, 12, 1, 'uploads/teledeteccion-2023-1-12_663e4c2b7e2e78.57731289.jpg', '2023-12-19', 'SENTINEL 3', '', ''),
(329, 2024, 1, 1, 'uploads/teledeteccion-2024-1-1_663e4d0226f646.15910735.jpg', '2024-01-25', 'SENTINEL 3', '', ''),
(330, 2024, 1, 2, 'uploads/teledeteccion-2024-2-1_663e4d128e7587.77547463.jpg', '2024-01-25', 'SENTINEL 3', '', ''),
(331, 2024, 1, 3, 'uploads/teledeteccion-2024-3-1_663e4d215f4cc7.85652704.jpg', '2024-01-25', 'SENTINEL 3', '', ''),
(332, 2024, 2, 2, 'uploads/teledeteccion-2024-2-2_663e4d751d5b95.22792280.jpg', '2024-02-14', 'SENTINEL 3', '', ''),
(333, 2024, 2, 3, 'uploads/teledeteccion-2024-3-2_663e4d844cc494.78646286.jpg', '2024-02-14', 'SENTINEL 3', '', ''),
(334, 2024, 3, 1, 'uploads/teledeteccion-2024-1-3_663e4ddfc11392.78450105.jpg', '2024-03-07', 'SENTINEL 3', '', ''),
(335, 2024, 3, 2, 'uploads/teledeteccion-2024-2-3_663e4df15284f7.98701672.jpg', '2024-03-07', 'SENTINEL 3', '', ''),
(336, 2024, 3, 3, 'uploads/teledeteccion-2024-3-3_663e4e03a63899.01109673.jpg', '2024-03-07', 'SENTINEL 3', '', ''),
(361, 2024, 4, 2, 'uploads/teledeteccion-2024-2-4_673e4fa9368990.17324195.jpg', '2024-04-10', 'SENTINEL 3', '', ''),
(360, 2024, 4, 3, 'uploads/teledeteccion-2024-3-4_673e4f96477073.40449168.jpg', '2024-04-10', 'SENTINEL 3', '', ''),
(343, 2024, 5, 3, 'uploads/teledeteccion-2024-3-5_673e4d7ad023d1.71185793.jpg', '2024-05-26', 'SENTINEL 3', '', ''),
(344, 2024, 5, 2, 'uploads/teledeteccion-2024-2-5_673e4d94a6f744.37210404.jpg', '2024-05-26', 'SENTINEL 3', '', ''),
(345, 2024, 5, 1, 'uploads/teledeteccion-2024-1-5_673e4da651f3b3.95846593.jpg', '2024-05-26', 'SENTINEL 3', '', ''),
(346, 2024, 6, 3, 'uploads/teledeteccion-2024-3-6_673e4dc7e5ad23.45034310.jpg', '2024-06-02', 'SENTINEL 3', '', ''),
(347, 2024, 6, 2, 'uploads/teledeteccion-2024-2-6_673e4dd7422795.23388174.jpg', '2024-06-02', 'SENTINEL 3', '', ''),
(348, 2024, 7, 3, 'uploads/teledeteccion-2024-3-7_673e4df2b6bb89.95380778.jpg', '2024-07-19', 'SENTINEL 3', '', ''),
(349, 2024, 7, 2, 'uploads/teledeteccion-2024-2-7_673e4e1e2973d6.71816968.jpg', '2024-07-19', 'SENTINEL ', '', ''),
(362, 2024, 7, 1, 'uploads/teledeteccion-2024-1-7_673e509ca0a5a5.81045118.jpg', '2024-07-19', 'SENTINEL 3', '', ''),
(351, 2024, 8, 3, 'uploads/teledeteccion-2024-3-8_673e4e55c4d795.25835805.jpg', '2024-08-29', 'SENTINEL 3', '', ''),
(352, 2024, 8, 2, 'uploads/teledeteccion-2024-2-8_673e4e6b35fb76.47950821.jpg', '2024-08-29', 'SENTINEL 3', '', ''),
(353, 2024, 8, 1, 'uploads/teledeteccion-2024-1-8_673e4e80189166.03812699.jpg', '2024-08-29', 'SENTINEL 3', '', ''),
(354, 2024, 9, 3, 'uploads/teledeteccion-2024-3-9_673e4ea135ad60.17522745.jpg', '2024-09-26', 'SENTINEL 3', '', ''),
(355, 2024, 9, 2, 'uploads/teledeteccion-2024-2-9_673e4eb73a63c7.42945870.jpg', '2024-09-26', 'SENTINEL 3', '', ''),
(356, 2024, 9, 1, 'uploads/teledeteccion-2024-1-9_673e4ec48ae326.79156490.jpg', '2024-09-26', 'SENTINEL 3', '', ''),
(357, 2024, 10, 3, 'uploads/teledeteccion-2024-3-10_673e4f21e0ce53.04951814.jpg', '2024-10-28', 'SENTINEL 3', '', ''),
(358, 2024, 10, 2, 'uploads/teledeteccion-2024-2-10_673e4f2f93caa2.97421651.jpg', '2024-10-28', 'SENTINEL 3', '', ''),
(359, 2024, 10, 1, 'uploads/teledeteccion-2024-1-10_673e4f4042ef53.27523048.jpg', '2024-10-28', 'SENTINEL 3', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `Lng` double DEFAULT NULL,
  `Lat` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`Lng`, `Lat`) VALUES
(-72.9703588, -41.3193549);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `dateregistered` datetime DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `referer` int(10) UNSIGNED DEFAULT 0,
  `firstname` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `city` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `country` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT 0,
  `lastname` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `onlymuestras` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `nickname`, `password`, `description`, `email`, `dateregistered`, `lastlogin`, `referer`, `firstname`, `address`, `lat`, `lng`, `city`, `state`, `country`, `phone`, `UserID`, `admin`, `lastname`, `onlymuestras`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, '2024-01-08 12:38:08', 0, '', '', NULL, NULL, '', NULL, '', '', NULL, 1, 'Administrador', 0),
(15, 'alberto', 'a3fcc90aa69cc7119fe638809617ea0a', '', 'alberto.fernandez@uss.cl', '2021-12-16 14:48:07', '2024-11-20 18:12:17', 0, 'Alberto', 'Pto Varas', NULL, NULL, 'Pto Varas', NULL, 'Chile', '000', 1, 1, 'Fernandez', 0),
(16, 'jorge', 'bc2e28580a2eb681a80f27967b40c7f1', '', 'jorge@indaga.me', '2022-02-16 16:19:31', '2023-12-12 17:01:22', 0, 'Jorge', 'EstaciÃ³n 140', NULL, NULL, 'Puerto Varas', NULL, 'Chile', '', 1, 1, 'GuzmÃ¡n', 0),
(17, 'edgardo', '27d72e23d11fc354f718c4b0e0c12da5', 'Indaga', 'edgardo@indaga.me', '2022-03-16 12:52:20', NULL, 0, 'Edgardo', 'Pedro Montt 816', NULL, NULL, 'Castro', NULL, 'Chile', '967553841', 1, 0, 'Ruotolo', 0),
(20, 'TomÃ¡s', '64e292343d2831cb049fa6e4bab9b293', '', 'tomas@indaga.me', '2022-09-15 12:53:12', '2022-10-03 13:16:44', 0, 'TomÃ¡s', '', NULL, NULL, 'Puerto Varas', NULL, '', '', 1, 0, 'Valdivieso', 1),
(33, 'Julieta', 'e8bb09601013bac6f9a1f5d23e9f1f86', '', 'julieta@indaga.me', '2023-02-20 12:37:52', '2023-02-21 12:37:01', 0, 'Julieta', '', NULL, NULL, '', NULL, '', '', 1, 0, 'Torres', 1),
(54, 'Matias', 'fe929b45baa69be6e13af8ef86e3a5d3', '', 'matias.domeyko@ptovaras.cl', '2023-02-21 12:38:05', '2024-12-17 15:12:51', 0, 'Matias', '', NULL, NULL, '', NULL, '', '', 1, 0, 'Domeyko', 1),
(57, 'Daniel', '5fcc5bb88ab9ac739f3799a0e7e5e37f', '', 'edgardoruotolo@outlook.com', '2023-03-01 23:57:04', NULL, 0, 'Daniel', '', NULL, NULL, '', NULL, '', '', 1, 0, 'Chacon', 0),
(58, 'nachodeleon77@gmail.com', '4f8a84c87acdd39b0554528a47e155d3', '', 'nachodeleon77@gmail.com', '2023-03-01 23:57:36', NULL, 0, 'nachodeleon77@gmail.com', '', NULL, NULL, '', NULL, '', '', 1, 0, 'nachodeleon77@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos-complementarios`
--
ALTER TABLE `documentos-complementarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `filtros`
--
ALTER TABLE `filtros`
  ADD PRIMARY KEY (`DocumentoID`,`Filtro`,`Valor`);

--
-- Indices de la tabla `incidentes`
--
ALTER TABLE `incidentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `lagosinhuella-biblioteca`
--
ALTER TABLE `lagosinhuella-biblioteca`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `metagenomica`
--
ALTER TABLE `metagenomica`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `metagenomica-tablas`
--
ALTER TABLE `metagenomica-tablas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `puntos_mediciones`
--
ALTER TABLE `puntos_mediciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `puntos_muestras`
--
ALTER TABLE `puntos_muestras`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `teledeteccion`
--
ALTER TABLE `teledeteccion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos-complementarios`
--
ALTER TABLE `documentos-complementarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `incidentes`
--
ALTER TABLE `incidentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `lagosinhuella-biblioteca`
--
ALTER TABLE `lagosinhuella-biblioteca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `metagenomica`
--
ALTER TABLE `metagenomica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `metagenomica-tablas`
--
ALTER TABLE `metagenomica-tablas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `puntos_mediciones`
--
ALTER TABLE `puntos_mediciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `puntos_muestras`
--
ALTER TABLE `puntos_muestras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT de la tabla `teledeteccion`
--
ALTER TABLE `teledeteccion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
