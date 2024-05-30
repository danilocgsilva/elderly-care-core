<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\Entities;

use Danilocgsilva\ElderlyCareCore\EntitiesData\NotesData;

class NotesEntity
{
    public readonly string $notesText;
    
    public function __construct(NotesData $data)
    {
        $this->notesText = $data->getNotesText();
    }
}
