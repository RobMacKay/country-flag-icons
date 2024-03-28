<?php

use Rscmedia\PhpCountryFlagIcons;

it('displays the correct flag', function () {
    $countryCode = 'US';
    $expectedFlag = '<img src="/vendor/rscmedia/php-country-flag-icons/flags/3x2/US.svg" alt="US Flag" />';

    $displayFlag = new PhpCountryFlagIcons();
    $actualFlag = $displayFlag->getFlag($countryCode);

    expect($actualFlag)->toBe($expectedFlag);
});

