<?php

abstract class User {
    protected string $id;
    public string $name;
    protected string $email;
    protected string $password;
    protected bool $isActive;

    public function __construct(
        int $id,
        string $name,
        string $email,
        string $password,
        bool $isActive
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->isActive = $isActive;
    }

    public function getId(){
        return $this->id;
    }

    public function updateProfile(): bool {
        return true;
    }
}
