<?php

namespace Autotask\Orm;

use Autotask\Orm\Concerns\Creatable;
use Autotask\Orm\Concerns\Deletable;
use Autotask\Orm\Concerns\Queryable;
use Autotask\Orm\Concerns\Updatable;

final class Ticket extends Entity
{
    use Creatable;
    use Deletable;
    use Queryable;
    use Updatable;
}