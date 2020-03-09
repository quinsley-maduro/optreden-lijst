<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptredenRepository")
 */
class Optreden
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Artiest", inversedBy="optredens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Arties_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Zaal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Maxseats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArtiesId(): ?Artiest
    {
        return $this->Arties_id;
    }

    public function setArtiesId(?Artiest $Arties_id): self
    {
        $this->Arties_id = $Arties_id;

        return $this;
    }

    public function getDatum(): ?string
    {
        return $this->Datum;
    }

    public function setDatum(string $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getZaal(): ?string
    {
        return $this->Zaal;
    }

    public function setZaal(string $Zaal): self
    {
        $this->Zaal = $Zaal;

        return $this;
    }

    public function getMaxseats(): ?string
    {
        return $this->Maxseats;
    }

    public function setMaxseats(string $Maxseats): self
    {
        $this->Maxseats = $Maxseats;

        return $this;
    }
}
