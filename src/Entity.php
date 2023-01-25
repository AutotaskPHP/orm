<?php

namespace Autotask\Orm;

abstract class Entity
{
    private array $attributes = [];

    /**
     * @param array<string,mixed> $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function getAttribute(string $name, mixed $default = null): mixed
    {
        return $this->attributes[$name] ?? $default;
    }

    public function setAttribute(string $name, mixed $value): static
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * @param array<string,mixed> $attributes
     */
    public function fill(array $attributes): static
    {
        /**
         * @var mixed $attributeValue
         */
        foreach ($attributes as $attributeName => $attributeValue) {
            $this->setAttribute($attributeName, $attributeValue);
        }

        return $this;
    }
}