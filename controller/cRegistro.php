<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 02/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cRegistro' 
 * 
 */

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if(isset($_REQUEST['cancelar'])){ 
    $_SESSION['paginaEnCurso'] = 'login'; // Asigno a la pagina en curso la pagina de login
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

require_once $view['layout']; // Cargo la vista de 'registro'
