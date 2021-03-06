<?php


namespace Dataedo\Enums\Tests\Enums;


use Dataedo\Enums\Enum;

final class RankEnum extends Enum
{
    public static function master(): self
    {
        return self::make(2, 'Master');
    }

    public static function gold(): self
    {
        return self::make(1, 'Gold');
    }

    public static function silver(): self
    {
        return self::make(0, 'Silver');
    }
}
