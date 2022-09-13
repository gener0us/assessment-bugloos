<?php

namespace Modules\ResponseApi\DTO;

class ResponseApiDto
{
    private function __construct(
        private ?string $name,
        private string $id,
        private ?string $email
    ) {
    }

    /**
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data): self
    {
        //mapping data
        return new self(
            $data['team'] ?? null,
            $data['id'],
            $data['email'] ?? null
        );
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
}
