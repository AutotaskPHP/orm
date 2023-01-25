<?php

namespace Autotask\Tests\Orm;

use Autotask\Tests\Orm\Fake\EntityFake;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function test_that_attributes_can_be_set_and_get()
    {
        $entity = new EntityFake;

        $entity
            ->setAttribute('firstName', 'Jim')
            ->setAttribute('lastName', 'Halpert');

        $this->assertSame('Jim', $entity->getAttribute('firstName'));
        $this->assertSame('Halpert', $entity->getAttribute('lastName'));
    }

    public function test_that_attributes_can_be_filled()
    {
        $entity = new EntityFake;

        $entity->fill([
            'firstName' => 'Jim',
            'lastName' => 'Halpert',
        ]);

        $this->assertSame('Jim', $entity->getAttribute('firstName'));
        $this->assertSame('Halpert', $entity->getAttribute('lastName'));
    }
}