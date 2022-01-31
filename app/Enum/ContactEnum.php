<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

class ContactEnum extends Enum
{
    private const DDD_DF = 61;
    private const DDD_SAO_PAULO = 11;

    public static function estado($ddd) : string
    {
        $estados = [
            self::DDD_DF => 'Distrito Federal',
            self::DDD_SAO_PAULO => 'São Paulo',
        ];

        return $estados[$ddd] ?? 'Não encontrado';
    }
}
