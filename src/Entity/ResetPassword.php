<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class ResetPassword
{
    private $id;

    /**
     * @Assert\NotBlank
     */
    private $newPassword;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
