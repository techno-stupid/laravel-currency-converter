<?php

namespace TechnoStupid\CurrencyConverter\Utility;

class CurrencyConvertUtility
{
    public static function convert($amount,$currencyTo='USD',$currencyFrom='USD')
    {
        try{
            $exchangeRates =  json_decode(file_get_contents('http://cdn.moneyconvert.net/api/latest.json'),true)['rates'];
            if($amount <= 0) return 'Amount should be a positive integer';
            if(!array_key_exists($currencyTo, $exchangeRates) || !array_key_exists($currencyFrom, $exchangeRates)) return 'Invalid Currency';
            $exchangedAmount = ($amount / $exchangeRates[$currencyTo]) * $exchangeRates[$currencyFrom];
            return $exchangedAmount;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
