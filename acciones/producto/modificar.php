<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/modificarResponse.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$modificarProducto = new Producto();
$modificarProducto->Codigo = $req->Codigo;
$modificarProducto->Nombre = $req->Nombre;
$modificarProducto->Marca = $req->Marca;
$modificarProducto->PrecioCompra = $req->PrecioCompra;
$modificarProducto->PrecioVenta = $req->PrecioVenta;
$modificarProducto->Categoria = $req->Categoria;
$modificarProducto->Id = $req->Id;
$modificarProducto->Agregar();

$mr = new ModificarResponse();
$mr->IsOk = true;

echo json_encode($mr);
