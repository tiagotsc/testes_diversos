<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
try{

    // ----------- CONEXÃO COM O ORACLE ----------- CONEXÃO COM O ORACLE ----------- //
    $conexao = oci_connect('supsiga', 'supsiga2012', '192.168.140.41/gxvsim');
    if (!$conexao) {//-------------------------------------------------------------- //
    	$erro = oci_error();//------------------------------------------------------ //
    	die('SEM CONEXAO');//-- //
    	exit;//--------------------------------------------------------------------- //
    }
    
    $sql="SELECT DISTINCT TO_CHAR(MES, 'MM/YYYY') AS MES FROM supsiga.v_SUPGXV_ASS_NODE_AUD_tot_6 ORDER BY MES DESC";
    $stid = oci_parse($conexao, $sql) or die ("erro");
    $exec    = oci_execute($stid);
    
    while($row = oci_fetch_row($stid)){
        echo $row[0];
    }

}catch( Exception $e ){
    
    echo $e->getMessage();
    
}
?>