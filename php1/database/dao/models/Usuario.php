<?php

class Usuario
{
    private $id;
    private $nome;
    private $email;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Usuario
    {
        $this->id = trim($id);
        return $this;
    }

    public function getName(): string
    {
        return $this->nome;
    }

    public function setName(string $nome): Usuario
    {
        $this->nome = mb_convert_case(trim($nome), MB_CASE_TITLE);
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): Usuario
    {
        $this->email = mb_convert_case($email, MB_CASE_LOWER);
        return $this;
    }

}
