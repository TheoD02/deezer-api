<?php


namespace App\Types\SubTypes;


class ExplicitContentLyrics
{
    const EXPLICIT_CASES = [
        0 => 'Not Explicit',
        1 => 'Explicit',
        2 => 'Inconnu',
        3 => 'Contenu Edité',
        4 => 'Partially Explicit (Album "lyrics" only',
        5 => 'Partially Unknown (Album "lyrics" only)',
        6 => 'No Advice Available',
        7 => 'Partially No Advice Available (Album "lyrics" only)',
    ];

    public function __construct()
    {

    }

    public function getExplicitInfo(?int $explicit_content_lyrics): ?string
    {
        return self::EXPLICIT_CASES[$explicit_content_lyrics] ?? null;
    }
}