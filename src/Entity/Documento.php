<?php

namespace App\Entity;

use App\Repository\DocumentoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentoRepository::class)]
class Documento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tipo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numero = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $fecha = null;

    #[ORM\Column(nullable: true)]
    private ?int $anio = null;

    #[ORM\Column(nullable: true)]
    private ?int $mes = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: 2, nullable: true)]
    private ?string $importe_total = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $notas = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ruta_pdf = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $creado_en = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $actualizado_en = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'documentos')]
    private ?self $cliente = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'cliente')]
    private Collection $documentos;

    public function __construct()
    {
        $this->documentos = new ArrayCollection();
    }

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

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTime $fecha): static
    {
        $this->fecha = $fecha;

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

    public function getMes(): ?int
    {
        return $this->mes;
    }

    public function setMes(?int $mes): static
    {
        $this->mes = $mes;

        return $this;
    }

    public function getImporteTotal(): ?string
    {
        return $this->importe_total;
    }

    public function setImporteTotal(?string $importe_total): static
    {
        $this->importe_total = $importe_total;

        return $this;
    }

    public function getNotas(): ?string
    {
        return $this->notas;
    }

    public function setNotas(?string $notas): static
    {
        $this->notas = $notas;

        return $this;
    }

    public function getRutaPdf(): ?string
    {
        return $this->ruta_pdf;
    }

    public function setRutaPdf(?string $ruta_pdf): static
    {
        $this->ruta_pdf = $ruta_pdf;

        return $this;
    }

    public function getCreadoEn(): ?\DateTime
    {
        return $this->creado_en;
    }

    public function setCreadoEn(?\DateTime $creado_en): static
    {
        $this->creado_en = $creado_en;

        return $this;
    }

    public function getActualizadoEn(): ?string
    {
        return $this->actualizado_en;
    }

    public function setActualizadoEn(?string $actualizado_en): static
    {
        $this->actualizado_en = $actualizado_en;

        return $this;
    }

    public function getCliente(): ?self
    {
        return $this->cliente;
    }

    public function setCliente(?self $cliente): static
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getDocumentos(): Collection
    {
        return $this->documentos;
    }

    public function addDocumento(self $documento): static
    {
        if (!$this->documentos->contains($documento)) {
            $this->documentos->add($documento);
            $documento->setCliente($this);
        }

        return $this;
    }

    public function removeDocumento(self $documento): static
    {
        if ($this->documentos->removeElement($documento)) {
            // set the owning side to null (unless already changed)
            if ($documento->getCliente() === $this) {
                $documento->setCliente(null);
            }
        }

        return $this;
    }
}
