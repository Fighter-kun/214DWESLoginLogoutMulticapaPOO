<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 27/12/2023
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPublico'
 * 
 */

// Si el usuario pulsa el botón 'Iniciar Sesión', mando al usuario a la página del login
if(isset($_REQUEST['login'])){ 
    $_SESSION['paginaEnCurso'] = 'login'; // Asigno a la pagina en curso la pagina de login
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Salir', mando al usuario al index de DWES
if(isset($_REQUEST['salir'])){ 
    header('Location: ../214DWESProyectoDWES/indexProyectoDWES.html'); // Redirecciono al index de DWES
    exit;
}

require_once $view['layout']; // Cargo la vista de 'inicioPublico'