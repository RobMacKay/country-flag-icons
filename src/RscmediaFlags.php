<?php 

namespace Rscmedia;

class PhpCountryFlagIcons
{
    public function getFlag($countryCode)
    {
        return '<img src="/public/assets/flags/3x2/' . $countryCode . '.svg" alt="' . $countryCode . ' Flag" />';
    }
}