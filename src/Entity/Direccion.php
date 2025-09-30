<?php

namespace App\Entity;

use App\Repository\DireccionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DireccionRepository::class)]
class Direccion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $calle = null;

    #[ORM\Column(nullable: true)]
    private ?int $numero = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $piso = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $puerta = null;

    #[ORM\Column(nullable: true)]
    private ?int $codigo_postal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $localidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $provincia = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pais = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?cliente $cliente = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(?string $calle): static
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPiso(): ?string
    {
        return $this->piso;
    }

    public function setPiso(?string $piso): static
    {
        $this->piso = $piso;

        return $this;
    }

    public function getPuerta(): ?string
    {
        return $this->puerta;
    }

    public function setPuerta(?string $puerta): static
    {
        $this->puerta = $puerta;

        return $this;
    }

    public function getCodigoPostal(): ?int
    {
        return $this->codigo_postal;
    }

    public function setCodigoPostal(?int $codigo_postal): static
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): static
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): static
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): static
    {
        $this->pais = $pais;

        return $this;
    }

    public function getCliente(): ?cliente
    {
        return $this->cliente;
    }

    public function setCliente(?cliente $cliente): static
    {
        $this->cliente = $cliente;

        return $this;
    }
}
