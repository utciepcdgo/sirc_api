<?php

declare(strict_types=1);

namespace App\Enums;

enum RegistrationStatus: string
{
    case FORMALLY_PRESENTED = 'FORMALLY_PRESENTED';
    case AWAITING_PRESENTATION = 'AWAITING_PRESENTATION';
    case SUBSTITUTED = 'SUBSTITUTED';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';

    public function label(): string
    {
        return match ($this) {
            self::FORMALLY_PRESENTED => 'PRESENTADO FORMALMENTE',
            self::AWAITING_PRESENTATION => 'EN ESPERA DE SER PRESENTADO',
            self::SUBSTITUTED => 'SUSTITUIDO',
            self::APPROVED => 'APROBADO',
            self::REJECTED => 'RECHAZADO',
        };
    }
}
