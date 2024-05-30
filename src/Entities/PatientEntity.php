<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\Entities;

use Danilocgsilva\ElderlyCareCore\EntitiesData\PatientData;

class PatientEntity
{
    public readonly string $name;
    
    public function __construct(PatientData $data)
    {
        $this->name = $data->getName();
    }
}
