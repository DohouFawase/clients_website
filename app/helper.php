<?php

if (!function_exists('getPriceInCFA')) {
    function getPriceInCFA($price)
    {
        // Coefficient de conversion en franc CFA
        $conversionRate = 655.957;

        // Transforme le prix en nombre flottant
        $priceFloat = floatval($price);

        // Calcule le prix en franc CFA
        $priceInCFA = $priceFloat * $conversionRate;

        // Formate le prix avec un séparateur de milliers et ajoute "CFA"
        $formattedPriceCFA = number_format($priceInCFA, 0, ',', ' ') . ' CFA';

        return $formattedPriceCFA;
    }
}
