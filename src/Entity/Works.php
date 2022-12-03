<?php

namespace App\Entity;

use App\Repository\WorksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorksRepository::class)]
class Works
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkgit = null;

    #[ORM\Column(length: 255)]
    private ?string $linkwork = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'works')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategoryWork $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLinkgit(): ?string
    {
        return $this->linkgit;
    }

    public function setLinkgit(?string $linkgit): self
    {
        $this->linkgit = $linkgit;

        return $this;
    }

    public function getLinkwork(): ?string
    {
        return $this->linkwork;
    }

    public function setLinkwork(string $linkwork): self
    {
        $this->linkwork = $linkwork;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?CategoryWork
    {
        return $this->category;
    }

    public function setCategory(?CategoryWork $category): self
    {
        $this->category = $category;

        return $this;
    }
}
