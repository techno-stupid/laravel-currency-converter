<?php

namespace TechnoStupid\CurrencyConverter\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    public function convert()
    {
        try{
            return 'It works!';
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
