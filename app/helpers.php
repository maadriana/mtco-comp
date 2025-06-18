<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getContent')) {
    /**
     * Retrieve content by key from `contents` table.
     * If binary image is stored, return base64 data URI.
     * If text value is stored, return that instead.
     */
    function getContent(string $key, string $default = ''): string
    {
        $content = DB::table('contents')->where('key', $key)->first();

        if (!$content) {
            return $default;
        }

        if (!empty($content->image)) {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->buffer($content->image);
            $base64 = base64_encode($content->image);
            return "data:{$mimeType};base64,{$base64}";
        }

        return $content->value ?? $default;
    }
}

if (!function_exists('hasImageContent')) {
    /**
     * Check if a content record has an image binary.
     */
    function hasImageContent(string $key): bool
    {
        $content = DB::table('contents')->where('key', $key)->first();
        return $content && !empty($content->image);
    }
}
