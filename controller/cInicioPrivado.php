<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 02/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPrivado' 
 * 
 */

//Si el usuario pulsa el botón 'Cerrar Sesion', mando al usuario al index de DWES
if(isset($_REQUEST['cerrarSesion'])){
    session_unset(); // Elimino la sesión
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

require_once $view['layout']; // Cargo la vista de 'inicioPrivado'