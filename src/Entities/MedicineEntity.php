<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\Entities;

use Danilocgsilva\ElderlyCareCore\EntitiesData\MedicineData;

class MedicineEntity
{
    public readonly string $name;
    
    public function __construct(MedicineData $data)
    {
        $this->name = $data->getName();
    }
}
