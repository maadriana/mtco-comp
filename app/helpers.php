<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getContent')) {
    function getContent($key, $default = '')
    {
        return DB::table('contents')->where('key', $key)->value('value') ?? $default;
    }
}
