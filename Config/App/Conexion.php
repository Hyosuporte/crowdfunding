<?php
class Conexion
{
    private $conect;
    public function __construct()
    {
        $pdo = 'mysql:host=localhost;port=3306;dbname=bd_crowdfunding';
        $username = 'root';
        $password = '';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        );
        try {
            $this->conect = new PDO($pdo, $username, $password, $options);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexion" . $e->getMessage();
            die();
        }
    }
    public function conect()
    {
        return $this->conect;
        echo "Base de datos conectada";
    }
}
