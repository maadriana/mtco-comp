<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getContent')) {
    function getContent($key, $default = '')
    {
        $content = DB::table('contents')->where('key', $key)->first();

        if (!$content) {
            return $default;
        }

        // For images, return the base64 encoded data URL
        if ($key === 'about_image' && $content->image) {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->buffer($content->image);
            return 'data:' . $mimeType . ';base64,' . base64_encode($content->image);
        }

        // For text content, return the value
        return $content->value ?? $default;
    }
}

if (!function_exists('hasImageContent')) {
    function hasImageContent($key)
    {
        $content = DB::table('contents')->where('key', $key)->first();
        return $content && $content->image;
    }
}
