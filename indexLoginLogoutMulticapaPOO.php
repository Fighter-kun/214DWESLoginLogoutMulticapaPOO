<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 27/12/2023
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'indexLoginLogoutMulticapaPOO' 
 * 
 */
// Incluyo la configuracion de la app, la Base de Datos y los idiomas
require_once 'config/confAPP.php'; 
require_once 'config/confDBPDO.php'; 
//require_once 'config/confIdiomas.php';

// Creo/Recupero la sesión
session_start(); 

// Si no hay una pagina en curso dentro de la sesión
if(!isset($_SESSION['paginaEnCurso'])){ 
    $_SESSION['paginaEnCurso'] = 'inicioPublico'; // Asigno a la pagina en curso la pagina de 'inicioPublico'
}

require_once $controller[$_SESSION['paginaEnCurso']]; // Cargo la pagina en curso