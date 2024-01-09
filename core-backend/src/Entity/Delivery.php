<?php

namespace App\Entity;

use App\Repository\DeliveryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeliveryRepository::class)]
class Delivery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 50)]
    private ?string $delivery_number = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $orderId = null;

    #[ORM\Column]
    private ?float $distance = null;

    #[ORM\Column(length: 50)]
    private ?string $dayTime = null;

    #[ORM\Column(length: 50)]
    private ?string $weekTime = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDeliveryNumber(): ?string
    {
        return $this->delivery_number;
    }

    public function setDeliveryNumber(string $delivery_number): static
    {
        $this->delivery_number = $delivery_number;

        return $this;
    }

    public function getOrderId(): ?Order
    {
        return $this->orderId;
    }

    public function setOrderId(Order $orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): static
    {
        $this->distance = $distance;

        return $this;
    }

    public function getDayTime(): ?string
    {
        return $this->dayTime;
    }

    public function setDayTime(string $dayTime): static
    {
        $this->dayTime = $dayTime;

        return $this;
    }

    public function getWeekTime(): ?string
    {
        return $this->weekTime;
    }

    public function setWeekTime(string $weekTime): static
    {
        $this->weekTime = $weekTime;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
