<?php

namespace App\Entity;

class EditPassword
{
    private $id;

    private $oldPassword;

    private $newPassword;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }

    public function setOldPassword(?string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }
    public function getnewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setnewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
