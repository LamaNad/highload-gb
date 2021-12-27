<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class ExampleCacheController extends Controller
{

    public function index()
    {
        Cache::add('key', 'value');
        if (Cache::has('key')) {
            var_dump('key');
        } else {
            die('Cache is empty');
        }
    }
}
