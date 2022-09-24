<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/nuevoResponse.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$nuevoProducto = new Producto();
$nuevoProducto->Codigo = $req->Codigo;
$nuevoProducto->Nombre = $req->Nombre;
$nuevoProducto->Marca = $req->Marca;
$nuevoProducto->PrecioCompra = $req->PrecioCompra;
$nuevoProducto->PrecioVenta = $req->PrecioVenta;
$nuevoProducto->Categoria = $req->Categoria;
$nuevoProducto->Agregar();

$nr = new NuevoResponse();
$nr->IsOk = true;

echo json_encode($nr);
