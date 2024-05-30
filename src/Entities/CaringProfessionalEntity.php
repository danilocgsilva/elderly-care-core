<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\Entities;

use Danilocgsilva\ElderlyCareCore\EntitiesData\CaringProfessionalData;

class CaringProfessionalEntity
{
    public readonly string $name;
    
    public function __construct(CaringProfessionalData $data)
    {
        $this->name = $data->getName();
    }
}
