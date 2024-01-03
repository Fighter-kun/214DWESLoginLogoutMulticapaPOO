<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 02/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cLogin' 
 * 
 */

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if(isset($_REQUEST['cancelar'])){ 
    $_SESSION['paginaEnCurso'] = 'inicioPublico'; // Asigno a la pagina en curso la pagina de inicioPublico
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Registrarse', mando al usuario al index de DWES
if(isset($_REQUEST['registrarse'])){ 
    $_SESSION['paginaAnterior'] = 'login'; // Asigno a la página anterior la página de login
    $_SESSION['paginaEnCurso'] = 'registro'; // Asigno a la pagina en curso la pagina de registro
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'IniciarSesion', mando al usuario al index de DWES
if(isset($_REQUEST['iniciarSesion'])){ 
    $_SESSION['paginaEnCurso'] = 'inicioPrivado'; // Asigno a la pagina en curso la pagina de inicioPrivado
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

require_once $view['layout']; // Cargo la vista de 'login'