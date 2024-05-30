<?php

declare(strict_types=1);

namespace Danilocgsilva\ElderlyCareCore\EntitiesData;

class NotesData
{
    private string $notesText;   

    public function getNotesText(): string
    {
        return $this->notesText;
    }

    public function setNotesText(string $noteText): self
    {
        $this->notesText = $noteText;
        return $this;
    }
}
