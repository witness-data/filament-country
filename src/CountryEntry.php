<?php

namespace WitnessData\FilamentCountry;

use Filament\Infolists\Components\TextEntry;

abstract class CountryEntry
{

    public static function make(?string $name = 'country'): TextEntry
    {
        return TextEntry::make($name);
    }

}
