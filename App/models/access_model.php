<?php
class access_model
{
    private $db;
    private $productos;

    public function __construct()
    {
        require_once "models/conec.php";
        $this->db = Conectarse();
        $this->productos = array();
    }

    public function get_access()
    {
        $tableName = "productos";
        $sentencia = "select * from $tableName";
        $consulta = mysqli_query($this->db, $sentencia);
        while ($filas = mysqli_fetch_array($consulta)) { //por cada vuelta fila tranforma el contenido en un arreglo y lo almacena en productos
            $this->productos[] = $filas;
        }

        return $this->productos;
    }

    public function insert_access($pro, $pre)
    {
        $tableName = "productos";
        $sentencia = "insert into $tableName(producto, precio) values(?, ?)";
        $stmt = mysqli_prepare($this->db, $sentencia);
        mysqli_stmt_bind_param($stmt,"si",$pro, $pre);
        $executeQuery = mysqli_stmt_execute($stmt);
        //$ins = mysqli_query($this->db, $sentencia);
        if ($executeQuery) {
            return true; // La inserción fue exitosa
        } else {
            return false; // La inserción falló
        }
    }

    public function delete_access($id)
    {
        $tableName = "productos";

        $sql = "SELECT * FROM $tableName WHERE id = ?";
        $stmt = mysqli_prepare($this->db, $sql);
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        //$resultSql = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('No existe Stock')</script>";
            return false;//no se encontro registro, no continua
        } else {
            $sentencia = "delete from $tableName where id = ?";
            $stmt = mysqli_prepare($this->db, $sentencia);
            mysqli_stmt_bind_param($stmt,"i",$id);
            mysqli_stmt_execute($stmt);
            //$ins = mysqli_query($this->db, $sentencia);
            if(mysqli_stmt_affected_rows($stmt) == 0){
                echo "<script>alert('Error al eliminar el producto')</script>";
                return false;
            } else {
                return true; // Producto eliminado correctamente
            }
        }

    }

    public function update_access($id, $prod, $pre){
        
        $tableName = "productos";

        $sql = "SELECT * FROM $tableName WHERE id = ?";
        $stmt = mysqli_prepare($this->db, $sql);
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('No existe Stock')</script>";
            return false;//no se encontro registro, no continua
        } else {
            $sentencia = "UPDATE $tableName SET producto = ?, precio = ? WHERE id = ?";
            $stmt = mysqli_prepare($this->db, $sentencia);
            mysqli_stmt_bind_param($stmt,"sii",$prod, $pre, $id );
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt) == 0){
                echo "<script>alert('Error al modificar el producto')</script>";
                return false;
            } else {
                return true; // Producto eliminado correctamente
            }
        }
    }
}
