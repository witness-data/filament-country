<?php

namespace WitnessData\FilamentCountry;

use Filament\Forms\Components\Select;

class CountrySelect extends Select
{
    protected bool $displayFlagEmojis = true;

    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->displayFlagEmojis()
            ->searchable()
            ->optionsLimit(0);
    }

    public function displayFlagEmojis(bool $condition = true): static
    {
        $this->displayFlagEmojis = $this->evaluate($condition);

        $options = [];
        foreach (Country::cases() as $country)
            $options[$country->value] = $this->display($country);

        $this->options($options);

        return $this;
    }

    protected function display(Country $country): string
    {
        return match ($this->displayFlagEmojis) {
            true => $country->getFlagEmoji() . ' ' . $country->getName(),
            default => $country->getName(),
        };
    }

}
