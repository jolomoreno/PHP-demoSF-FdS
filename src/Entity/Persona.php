<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="personal")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     * @ORM\Id
     */
    private $dni;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=75, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * Persona constructor.
     * @param int $dni
     * @param string|null $nombre
     * @param string|null $email
     */
    public function __construct(int $dni, ?string $nombre, ?string $email)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getDni(): int
    {
        return $this->dni;
    }

    /**
     * @param int $dni
     * @return Persona
     */
    public function setDni(int $dni): Persona
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string|null $nombre
     * @return Persona
     */
    public function setNombre(?string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Persona
     */
    public function setEmail(?string $email): Persona
    {
        $this->email = $email;
        return $this;
    }

}
