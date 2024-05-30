<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\Entities;

use Danilocgsilva\ElderlyCareCore\EntitiesData\ManagerData;

class ManagerEntity
{
    public readonly string $name;
    
    public function __construct(ManagerData $data)
    {
        $this->name = $data->getName();
    }
}
