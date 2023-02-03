<?php

namespace Bookboon\ActionModels;

#[\Bookboon\JsonLDClient\Attributes\JsonLDEntity(url: '')]
class Attribute
{
    protected ?string $encoding = null;
    protected string $name = '';
    protected string $value = '';

    public function setEncoding(?string $encoding): void
    {
        $this->encoding = $encoding;
    }

    public function getEncoding(): ?string
    {
        return $this->encoding;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
