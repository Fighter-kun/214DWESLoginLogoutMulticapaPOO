<?php
/**
 * @author Original Alberto Fernandez Ramirez
 * @version 1.0
 * @since 13/01/2022
 * @copyright Copyright (c) 2022, Alberto Fernandez Ramirez
 * 
 * Modificado por @author Carlos García Cachón
 * @version 1.1
 * @since 03/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Clase ERROR
 * 
 */
class ERROR {
    /**
     * Codigo del ERROR
     * 
     * @var string 
     */
    private $codError;
    /**
     * Descripcion del ERROR
     * 
     * @var string 
     */
    private $descError;
    /**
     * Archivo del ERROR
     * 
     * @var string 
     */
    private $archivoError;
    /**
     * Línea del ERROR
     * 
     * @var int 
     */
    private $lineaError;
    /**
     * Página siguiente, es la página anterior a mostrar el ERROR
     * 
     * @var string 
     */
    private $paginaSiguiente;
    
    /**
     * Metodo magico __construct()
     * 
     * Metodo constructor de la clase AppError
     * 
     * @param string $codError Código de descripción del ERROR
     * @param string $descError Descripción del ERROR
     * @param string $archivoError Enlace del ERROR
     * @param int $lineaError Línea en la que se produjo el ERROR
     * @param string $paginaSiguiente Página siguiente, es la página anterior a mostrar el ERROR
     */
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    /**
     * Metodo getCodError()
     * 
     * Metodo get que devuelve el código del ERROR
     * 
     * @return string
     */
    function getCodError(){
        return $this->codError;
    }
    /**
     * Metodo getDescError()
     * 
     * Metodo get que devuelve la descripción del ERROR
     * 
     * @return string
     */
    function getDescError(){
       return $this->descError; 
    }
    /**
     * Metodo getArchivoError()
     * 
     * Metodo get que devuelve el archivo del ERROR
     * 
     * @return string
     */
    function getArchivoError(){
       return $this->archivoError; 
    }
    /**
     * Metodo getLineaError()
     * 
     * Metodo get que devuelve la línea en la que se produjo el ERROR
     * 
     * @return int 
     */
    function getLineaError(){
       return $this->lineaError; 
    }
    /**
     * Metodo getPaginaSiguiente()
     * 
     * Metodo get que devuelve la página siguiente, es la página anterior a mostrar el ERROR
     * 
     * @return string
     */
    function getPaginaSiguiente(){
       return $this->paginaSiguiente; 
    }
}
