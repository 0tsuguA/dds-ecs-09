<?php
class Producto
{
    public $Codigo;
    public $Nombre;
    public $Marca;
    public $PrecioCompra;
    public $PrecioVenta;
    public $Categoria;

    public static function BuscarTodas()
    {
        $con  = Database::getInstance();
        $sql = "select * from productos";
        $queryProductos = $con->db->prepare($sql);
        $queryProductos->execute();
        $queryProductos->setFetchMode(PDO::FETCH_CLASS, 'Producto');

        $listProductosADevolver = array();

        foreach ($queryProductos as $m) {
            $listProductosADevolver[] = $m;
        }

        return $listProductosADevolver;
    }

    public static function Buscar($id)
    {
        $con  = Database::getInstance();
        $sql = "select * from productos where Id = :p1";
        $queryProductos = $con->db->prepare($sql);
        $params = array("p1" => $id);
        $queryProductos->execute($params);
        $queryProductos->setFetchMode(PDO::FETCH_CLASS, 'Producto');
        foreach ($queryProductos as $m) {
            return $m;
        }
    }

    public function Agregar()
    {
        $con  = Database::getInstance();
        $sql = "insert into productos (Codigo, Nombre,Marca, PrecioCompra, PrecioVenta, Categoria) values (:p1,:p2,:p3,:p4,:p5,:p6)";
        $Producto = $con->db->prepare($sql);
        $params = array("p1" => $this->Codigo, "p2" => $this->Nombre, "p3" => $this->Marca, "p4" => $this->PrecioCompra, "p5" => $this->PrecioVenta, "p6" => $this->Categoria);
        $Producto->execute($params);
    }

    public function Modificar()
    {
        $con = Database::getInstance();
        $sql = "UPDATE productos
                    SET
                    Codigo = :p1,
                    Nombre = :p2,
                    Marca = :p3,
                    PrecioCompra = :p4,
                    PrecioVenta = :p5,
                    Categoria = :p6
                    WHERE Id = :p7";
        $Producto = $con->db->prepare($sql);
        $params = array("p1" => $this->Codigo, "p2" => $this->Nombre, "p3" => $this->Marca, "p4" => $this->PrecioCompra, "p5" => $this->PrecioVenta, "p6" => $this->Categoria, "p7" => $this->Id);
        $Producto->execute($params);
    }
}
