<?php

namespace App\Entity;

use App\Repository\SettingsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SettingsRepository::class)
 */
class Settings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"settings"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"settings"})
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity=GroupsSettings::class, inversedBy="settings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupSetting;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"settings"})
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getGroupSetting(): ?GroupsSettings
    {
        return $this->groupSetting;
    }

    public function setGroupSetting(?GroupsSettings $groupSetting): self
    {
        $this->groupSetting = $groupSetting;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
