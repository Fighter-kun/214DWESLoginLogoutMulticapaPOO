<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 04/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cWIP' 
 * 
 */

// Si el usuario pulsa el botón 'Salir', mando al usuario a la página 'inicioPublico'
if(isset($_REQUEST['salirDeWIP'])){ 
    $_SESSION['paginaEnCurso'] = 'inicioPrivado'; // Asigno a la página en curso la página inicioPublico
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

require_once $view['layout']; // Cargo la vista de 'WIP'