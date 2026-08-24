<?php

namespace WitnessData\FilamentCountry;

use Filament\Forms\Components\Select;

abstract class CountrySelect
{

    public static function make(?string $name = 'country'): Select
    {
        return Select::make($name)
            ->searchable()
            ->options(Country::class)
            // We override the default of 50 options to display all countries at once.
            ->optionsLimit(0);
    }

}
