<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\EntitiesData\Traits;

trait NameTrait
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
