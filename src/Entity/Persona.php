<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="personal")
 * @ORM\Entity
 */
class Persona implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=70, nullable=false)
     */
    private $dni;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=70, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=true)
     */
    private $email;

    public function __construct(string $dni = "", ?string $nombre = null, ?string $email = null)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getDni(): string
    {
        return $this->dni;
    }

    /**
     * @param int $dni
     * @return Persona
     */
    public function setDni(string $dni): Persona
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

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'persona' => [
                'nombre' => $this->getNombre(),
                'dni' => $this->getDni(),
                'e-mail' => $this->getEmail()
            ]
        ];
    }

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link https://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    public function __toString(): string
    {
        return $this->getNombre() ?? '';
    }
}
