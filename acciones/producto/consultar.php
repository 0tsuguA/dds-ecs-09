<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/consultarResponse.php';

$Id = $_GET['Id'];
$r = new ConsultarResponse();
$r->Producto = Producto::Buscar($Id);

echo json_encode($r);
