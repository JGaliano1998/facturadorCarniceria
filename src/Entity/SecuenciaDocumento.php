<?php

namespace App\Entity;

use App\Repository\SecuenciaDocumentoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SecuenciaDocumentoRepository::class)]
class SecuenciaDocumento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tipo = null;

    #[ORM\Column(nullable: true)]
    private ?int $anio = null;

    #[ORM\Column(nullable: true)]
    private ?int $ultimoNumero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(?int $anio): static
    {
        $this->anio = $anio;

        return $this;
    }

    public function getUltimoNumero(): ?int
    {
        return $this->ultimoNumero;
    }

    public function setUltimoNumero(?int $ultimoNumero): static
    {
        $this->ultimoNumero = $ultimoNumero;

        return $this;
    }
}
