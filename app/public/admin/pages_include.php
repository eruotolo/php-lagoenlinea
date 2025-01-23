<?php
    if (isset($_GET['section'])) {
        if ($_GET['section'] == "user-profile") {
            $page = "user-profile.php";
            $title = "$lng_myprofile";
        } else if ($_GET['section'] == "configuration") {
            $page = "configuration.php";
            $title = "$lng_configuration";
        } else if ($_GET['section'] == "metagenomica-add") {
            $page = "metagenomica-add.php";
            $title = "Ingresar Gráfica Metagenómica";
        } else if ($_GET['section'] == "metagenomica-view") {
            $page = "metagenomica-view.php";
            $title = "Ver Gráficas Metagenómica";
        } else if ($_GET['section'] == "teledeteccion-add") {
            $page = "teledeteccion-add.php";
            $title = "Ingresar Gráfica Teledetección";
        } else if ($_GET['section'] == "teledeteccion-view") {
            $page = "teledeteccion-view.php";
            $title = "Ver Gráficas Teledetección";
        } else if ($_GET['section'] == "user-list") {
            $page = "user-list.php";
            $title = "Lista de Usuarios";
        } else if ($_GET['section'] == "employee-profile") {
            $page = "employee-profile.php";
            $title = "Perfil del Usuario";
        } else if ($_GET['section'] == "user-add") {
            $page = "user-add.php";
            $title = "Nuevo Usuario";
        } else if ($_GET['section'] == "library-general") {
            $page = "library-general.php";
            $title = "Biblioteca";
        }  else if ($_GET['section'] == "library-teledeteccion") {
            $page = "library-teledeteccion.php";
            $title = "Biblioteca";
        } else if ($_GET['section'] == "library-monitoreo") {
            $page = "library-monitoreo.php";
            $title = "Biblioteca";
        } else if ($_GET['section'] == "library-metagenomica") {
            $page = "library-metagenomica.php";
            $title = "Biblioteca";
        } else if ($_GET['section'] == "manual") {
            $page = "manual.php";
            $title = "Manual";
        } else if ($_GET['section'] == "documentos-complementatios") {
            $page = "documentos-complementatios.php";
            $title = "Documentos Complementarios";
        } else if ($_GET['section'] == "documentos-complementarios-add") {
            $page = "documentos-complementarios-add.php";
            $title = "Crear Documento Complementario";
        } else if ($_GET['section'] == "documentos-complementarios-edit") {
            $page = "documentos-complementarios-edit.php";
            $title = "Editar Documento Complementario";
        } else if ($_GET['section'] == "incidentes") {
            $page = "incidentes.php";
            $title = "Incidencias";
        } else if ($_GET['section'] == "incidentes-add") {
            $page = "incidentes-add.php";
            $title = "Nueva Incidencia";
        } else if ($_GET['section'] == "incidentes-edit") {
            $page = "incidentes-edit.php";
            $title = "Editar Incidencia";
        } else if ($_GET['section'] == "lagosinhuella") {
            $page = "lagosinhuella.php";
            $title = "Lago sin Huella";
        } else if ($_GET['section'] == "lagosinhuella-mediciones") {
            $page = "lagosinhuella-mediciones.php";
            $title = "Lago sin Huella";
        } else if ($_GET['section'] == "lagosinhuella-biblioteca") {
            $page = "lagosinhuella-biblioteca.php";
            $title = "Lago sin Huella: Biblioteca";
        } else if ($_GET['section'] == "lagosinhuella-biblioteca-add") {
            $page = "lagosinhuella-biblioteca-add.php";
            $title = "Lago sin Huella: Biblioteca";
        } else if ($_GET['section'] == "lagosinhuella-biblioteca-edit") {
            $page = "lagosinhuella-biblioteca-edit.php";
            $title = "Lago sin Huella: Biblioteca";
        }

    } else {
		if ($onlymuestras == 0) {
			$page = "dashboard.php";
			$title = "$lng_dashboard";
		} else {
			$page = "lagosinhuella.php";
			$title = "$lng_dashboard";
		}		

}
?>