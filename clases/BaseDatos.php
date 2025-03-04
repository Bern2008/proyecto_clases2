<?php
declare(strict_types=1);

namespace Clases;

use mysqli;

/**
 * Clase BaseDatos
 *
 * Gestiona la conexión a la base de datos.
 *
 * @package Clases
 */
class BaseDatos {
    /**
     * @var mysqli $conexion Instancia de la conexión a MySQL.
     */
    private mysqli $conexion;

    /**
     * Constructor de la clase BaseDatos.
     * Crea la conexión a la base de datos.
     */
    public function __construct() {
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    /**
     * Obtiene la conexión a la base de datos.
     *
     * @return mysqli Instancia de la conexión.
     */
    public function getConexion(): mysqli {
        return $this->conexion;
    }

    /**
     * Cierra la conexión a la base de datos.
     */
    public function cerrarConexion(): void {
        $this->conexion->close();
    }
}
?>
