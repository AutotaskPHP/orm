<?php

namespace Autotask\Orm\Concerns;

trait Creatable
{
    public static function create(array $attributes = []): static
    {
        return new static();
    }
}