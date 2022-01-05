<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class ForgottenPassword
{

    /**
     * @Assert\Email
     * @Assert\NotBlank
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
