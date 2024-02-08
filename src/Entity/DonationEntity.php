<?php

namespace App\Entity;

use App\Repository\DonationEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonationEntityRepository::class)]
class DonationEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 32)]
    private ?string $customerPhoneNumber = null;

    #[ORM\Column(length: 12)]
    private ?string $amount = null;

    #[ORM\Column]
    private ?int $serviceId = null;

    #[ORM\Column]
    private ?int $quoteId = null;

    #[ORM\Column]
    private ?int $tansactionId = null;

    #[ORM\Column(nullable: true)]
    private ?bool $collectStatus = null;

    #[ORM\Column(length: 24, nullable: true)]
    private ?string $verifyCode = null;

    #[ORM\Column(nullable: true)]
    private ?bool $verifyStatus = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $payItemDesc = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $errorCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(nullable: true)]
    private ?bool $dedicated = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerPhoneNumber(): ?string
    {
        return $this->customerPhoneNumber;
    }

    public function setCustomerPhoneNumber(string $customerPhoneNumber): static
    {
        $this->customerPhoneNumber = $customerPhoneNumber;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getServiceId(): ?int
    {
        return $this->serviceId;
    }

    public function setServiceId(int $serviceId): static
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }

    public function setQuoteId(int $quoteId): static
    {
        $this->quoteId = $quoteId;

        return $this;
    }

    public function getTansactionId(): ?int
    {
        return $this->tansactionId;
    }

    public function setTansactionId(int $tansactionId): static
    {
        $this->tansactionId = $tansactionId;

        return $this;
    }

    public function isCollectStatus(): ?bool
    {
        return $this->collectStatus;
    }

    public function setCollectStatus(?bool $collectStatus): static
    {
        $this->collectStatus = $collectStatus;

        return $this;
    }

    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    public function setVerifyCode(?string $verifyCode): static
    {
        $this->verifyCode = $verifyCode;

        return $this;
    }

    public function isVerifyStatus(): ?bool
    {
        return $this->verifyStatus;
    }

    public function setVerifyStatus(?bool $verifyStatus): static
    {
        $this->verifyStatus = $verifyStatus;

        return $this;
    }

    public function getPayItemDesc(): ?string
    {
        return $this->payItemDesc;
    }

    public function setPayItemDesc(?string $payItemDesc): static
    {
        $this->payItemDesc = $payItemDesc;

        return $this;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): static
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function isDedicated(): ?bool
    {
        return $this->dedicated;
    }

    public function setDedicated(?bool $dedicated): static
    {
        $this->dedicated = $dedicated;

        return $this;
    }
}
