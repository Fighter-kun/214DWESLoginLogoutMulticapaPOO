<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 27/12/2023
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de configuración
 * 
 */
require_once 'core/231018libreriaValidacion.php'; // Incluimos la librería de validación

// Incluimos los archivos de la parte del MODELO
require_once 'model/DB.php';
require_once 'model/DBPDO.php';
require_once 'model/ErrorApp.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioDB.php';
require_once 'model/UsuarioPDO.php';

// Creamos dos 'arrays' para indicar el 'path' de los archivos del controlador y la vista
$aController = [
    'inicioPublico' => 'controller/cInicioPublico.php',
    'login' => 'controller/cLogin.php',
    'inicioPrivado' => 'controller/cInicioPrivado.php',
    'tecnologias' => 'controller/cTecnologias.php',
    'rss' => 'controller/cRSS.php',
    'registro' => 'controller/cRegistro.php',
    'miCuenta' => 'controller/cMiCuenta.php',
    'borrarCuenta' => 'controller/cBorrarCuenta.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php',
    'cambiarContraseña' => 'controller/cCambiarPassword.php'
];

// En el array de '$aView' almacenamos un array por idioma, para mostrar la vista en el idioma elegído por el usuario
$aView = [
    'SP' => [
        'layout' => 'view/SP/layout.php',
        'inicioPublico' => 'view/SP/vInicioPublico.php',
        'login' => 'view/SP/vLogin.php',
        'inicioPrivado' => 'view/SP/vInicioPrivado.php',
        'tecnologias' => 'view/SP/vTecnologias.php',
        'rss' => 'view/SP/vRSS.php',
        'registro' => 'view/SP/vRegistro.php',
        'miCuenta' => 'view/SP/vMiCuenta.php',
        'borrarCuenta' => 'view/SP/vBorrarCuenta.php',
        'wip' => 'view/SP/vWIP.php',
        'error' => 'view/SP/vError.php',
        'cambiarContraseña' => 'view/SP/vCambiarPassword.php'
    ],
    'UK' => [
        'layout' => 'view/UK/layout.php',
        'inicioPublico' => 'view/UK/vInicioPublico.php',
        'login' => 'view/UK/vLogin.php',
        'inicioPrivado' => 'view/UK/vInicioPrivado.php',
        'tecnologias' => 'view/UK/vTecnologias.php',
        'rss' => 'view/UK/vRSS.php',
        'registro' => 'view/UK/vRegistro.php',
        'miCuenta' => 'view/UK/vMiCuenta.php',
        'borrarCuenta' => 'view/UK/vBorrarCuenta.php',
        'wip' => 'view/UK/vWIP.php',
        'error' => 'view/UK/vError.php',
        'cambiarContraseña' => 'view/UK/vCambiarPassword.php'
    ]
];