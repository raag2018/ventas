<?php 
	include ('ws/service.php');
	$obj = new service();
	$rs = $obj->datos('hora actual ');
	echo $rs;
	//ini_set('soap_wsdl_cache', '0');
	//$dirwsdl = 'wsdl/miwsdl.wsdl';
	//$parametro = array(
	//	"uri": "http://localhost/ventas/",
	//	"soap_version"=> SOAP_1_1
	//	);
	//$Obj = new SoapServer($dirwsdl, $parametro);
	//$obj->setClass('ws/service');
	//$obj->handle();
 ?>