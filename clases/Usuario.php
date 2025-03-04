<?php
declare(strict_types=1);

namespace Clases;

/**
 * Clase Usuario
 *
 * Representa a un usuario del sistema.
 *
 * @package Clases
 */
class Usuario {
    /**
     * @var int $id Identificador del usuario.
     */
    private int $id;

    /**
     * @var string $nombre Nombre del usuario.
     */
    private string $nombre;

    /**
     * @var string $email Correo electrónico del usuario.
     */
    private string $email;

    /**
     * Constructor de la clase Usuario.
     *
     * @param int $id ID del usuario.
     * @param string $nombre Nombre del usuario.
     * @param string $email Email del usuario.
     */
    public function __construct(int $id, string $nombre, string $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Obtiene el nombre del usuario.
     *
     * @return string Nombre del usuario.
     */
    public function getNombre(): string {
        return $this->nombre;
    }

    /**
     * Obtiene el email del usuario.
     *
     * @return string Email del usuario.
     */
    public function getEmail(): string {
        return $this->email;
    }
}
?>
