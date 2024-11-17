<?php

namespace App\Enums;

enum RegionEnum: int
{
    case BRESTSKAYA_OBL = 1;
    case VITEBSKAYA_OBL = 2;
    case HOMELSKAYA_OBL = 3;
    case GRODNENSKAYA_OBL = 4;
    case MINSKAYA_OBL = 5;
    case MOHILEUSKAYA_OBL = 6;
    case MINSK = 7;
    case RESPUBLICAN = 8;
    case DEPARTMENTAL = 9;

    public function toHuman(): string
    {
        return match ($this) {
            self::BRESTSKAYA_OBL => 'Брестская область',
            self::VITEBSKAYA_OBL => 'Витебская область',
            self::HOMELSKAYA_OBL => 'Гомельская область',
            self::GRODNENSKAYA_OBL => 'Гродненская область',
            self::MINSKAYA_OBL => 'Минская область',
            self::MOHILEUSKAYA_OBL => 'Могилевская область',
            self::MINSK => 'Город Минск',
            self::RESPUBLICAN => 'Республиканское',
            self::DEPARTMENTAL => 'Ведомственное',
        };
    }
}
