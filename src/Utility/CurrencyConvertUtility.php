<?php

namespace TechnoStupid\CurrencyConverter\Utility;

class CurrencyConvertUtility
{
    public static function convert($amount,$currencyTo='USD',$currencyFrom='USD')
    {
        try{
            return $amount*3;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
