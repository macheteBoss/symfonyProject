<?php

namespace App\Entity;

use App\Repository\BlockRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlockRepository::class)
 */
class Block
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $text;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $entity = [];

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="integer")
     */
    private $subsequence;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $titleMenu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $itemMenu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $button;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $urlButton;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titleButton;

    public function __construct()
    {
        $this->active = true;
        $this->itemMenu = true;
        $this->button = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getEntity(): ?array
    {
        return $this->entity;
    }

    public function setEntity(?array $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getSubsequence(): ?int
    {
        return $this->subsequence;
    }

    public function setSubsequence(int $subsequence): self
    {
        $this->subsequence = $subsequence;

        return $this;
    }

    public function getTitleMenu(): ?string
    {
        return $this->titleMenu;
    }

    public function setTitleMenu(string $titleMenu): self
    {
        $this->titleMenu = $titleMenu;

        return $this;
    }

    public function getItemMenu(): ?bool
    {
        return $this->itemMenu;
    }

    public function setItemMenu(bool $itemMenu): self
    {
        $this->itemMenu = $itemMenu;

        return $this;
    }

    public function getButton(): ?bool
    {
        return $this->button;
    }

    public function setButton(bool $button): self
    {
        $this->button = $button;

        return $this;
    }

    public function getUrlButton(): ?string
    {
        return $this->urlButton;
    }

    public function setUrlButton(?string $urlButton): self
    {
        $this->urlButton = $urlButton;

        return $this;
    }

    public function getTitleButton(): ?string
    {
        return $this->titleButton;
    }

    public function setTitleButton(?string $titleButton): self
    {
        $this->titleButton = $titleButton;

        return $this;
    }
}
