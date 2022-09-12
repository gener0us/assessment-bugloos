<?php

namespace Modules\ResponseApi\DTO;

class ResponseApiDto
{
    private function __construct(
        private ?string $name,
        private string  $id,
        private ?string $email
    )
    {
    }

    public static function fromArray(array $data): self
    {
        //mapping data
        return new self(
            $data['team'] ?? null,
            $data['id'],
            $data['email'] ?? null
        );
    }

    public function getKey(): string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

}
