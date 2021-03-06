<?php
/**
 * Recursos utilizados
 */
require './../models/FuncionesBePickler.php';
require './InfoSolicitadaBy.php';
/**
 * Variables Utilizadas
 */
$solicitadoBy   = '';
$idtblciudad      = '';
$nombreciudad     = '';
$idtblpais      = '';
$activado       = '';
$emailmodifico  = '';
$resultado         = '';
/**
 * Validamos que el array $_POST no es null.
 */
if (!empty($_POST)){

	$solicitadoBy	= $_POST["solicitadoBy"];
    $idtblciudad      = $_POST['idtblciudad'];
	$nombreciudad		= $_POST['nombreciudad'];
	$idtblpais			= $_POST['idtblpais'];
	$activado		= $_POST['activado'];
	$emailmodifico	= $_POST['emailmodifico'];
    /**
     * Mandamos los parámetros y llamamos a la función que ejecutara la sentencia y retorna el resultado.
     */
    $resultado = FuncionesBePickler::setUpdateTblciudad($idtblciudad, $nombreciudad, $activado,$idtblpais, $emailmodifico);

    if($resultado)
    {
        /**
         * Si es éxitos le mandamos los resultados a quien lo solicito.
         */
    	InfoSolicitadaBy::solicitadaby($solicitadoBy, $resultado);

    }else
    {
        /**
         * Si fallo manda a la función de fallo a quien lo solicito.
         */
    	InfoSolicitadaBy::sinDatos($solicitadoBy);
    }
}
/**
 * Desctruimos las variables para liberar memoria
 */
unset($solicitadoBy);
unset($idtblciudad);
unset($nombreciudad);
unset($idtblpais);
unset($activado);
unset($emailmodifico);
unset($resultado);
?>