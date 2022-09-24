<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/consultarTodosResponse.php';

$r = new ConsultarTodosResponse();
$r->ListProductos = Producto::BuscarTodas();

echo json_encode($r);
