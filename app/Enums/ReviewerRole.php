<?php

declare(strict_types=1);

namespace App\Enums;

enum ReviewerRole: string
{
    case REVIEWER = 'REVIEWER';
    case SUPERVISOR = 'SUPERVISOR';

    public function label(): string
    {
        return match ($this) {
            self::REVIEWER => 'REVISOR',
            self::SUPERVISOR => 'SUPERVISOR',
        };
    }
}
