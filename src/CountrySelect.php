<?php

namespace WitnessData\FilamentCountry;

use Filament\Forms\Components\Select;

abstract class CountrySelect
{

    public static function make(?string $name = 'country'): Select
    {
        return Select::make($name)
            ->searchable()
            ->optionsLimit(0)
            ->options(Country::class);
    }

}
