<?php
/**
 * @author Carlos García Cachón
 * @version 1.0
 * @since 04/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cMiCuenta'
 * 
 */

//Si el usuario pulsa el botón 'Cambiar Contraseña', mando al usuario al index de DWES
if(isset($_REQUEST['cambiarContraseña'])){ 
    $_SESSION['paginaEnCurso'] = 'miCuenta'; // Asigno a la página en curso la pagina de miCuenta
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

// Declaracion de la variable de confirmación de envio de formulario correcto
$entradaOK = true;

// Declaramos el array de errores y lo inicializamos vacío
$aErrores['T01_DescUsuario'] = "";

//Si el usuario pulsa el botón 'Confirmar Cambios', mando al usuario al index de DWES
if(isset($_REQUEST['confirmarCambios'])){ 
    $aErrores['T01_DescUsuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['T01_DescUsuario'], 255, 3, 0);

    // Recorremos el array de errores
    foreach ($aErrores as $campo => $error) {
        if ($error != null) { // Comprobamos que el campo no esté vacio
            $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario
            $_REQUEST[$campo] = ""; // Limpiamos los campos del formulario
        }
    }

} else {
    $entradaOK = false; // Si el usuario no ha enviado el formulario asignamos a entradaOK el valor false para que rellene el formulario
}
// Si la entrada esta correcta iniciamos la modificación del la descripción del usuario
if ($entradaOK) { 
    $_SESSION['user214DWESLoginLogoutMulticapaPOO'] = UsuarioPDO::modificarUsuario($_SESSION['user214DWESLoginLogoutMulticapaPOO'], $_REQUEST['T01_DescUsuario']);
    $_SESSION['paginaEnCurso'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit; 
}

//Si el usuario pulsa el botón 'Cancelar', mando al usuario al index de DWES
if(isset($_REQUEST['salirMiCuenta'])){ 
    $_SESSION['paginaEnCurso'] = 'inicioPrivado'; // Asigno a la página en curso la pagina de inicioPrivado
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

//Si el usuario pulsa el botón 'Eliminar Usuario', mando al usuario al index de DWES
if(isset($_REQUEST['eliminarU'])){ 
    $_SESSION['paginaEnCurso'] = 'borrarCuenta'; // Asigno a la página en curso la pagina de borrarCuenta
    header('Location: indexLoginLogoutMulticapaPOO.php'); // Redirecciono al index de la APP
    exit;
}

// Almaceno...
$codigoUsuarioActual = $_SESSION['user214DWESLoginLogoutMulticapaPOO']->get_codUsuario(); // Código del usuario actual
$contraseñaUsuarioActual = $_SESSION['user214DWESLoginLogoutMulticapaPOO']->get_password(); // Contraseña del usuario actual
$descripcionUsuarioActual = $_SESSION['user214DWESLoginLogoutMulticapaPOO']->get_descUsuario(); // Descripción del usuario actual
$nConexionesUsuarioActual = $_SESSION['user214DWESLoginLogoutMulticapaPOO']->get_numAcceso(); // Número de conexiones del usuario actual
$fechaHoraUltimaConexionAnteriorUsuarioActual = $_SESSION['user214DWESLoginLogoutMulticapaPOO']->get_fechaHoraUltimaConexionAnterior(); // Fecha y hora de la última conexión del usuario actual

require_once $view[$_COOKIE['idioma']]['layout']; // Cargo la vista de 'miCuenta'

