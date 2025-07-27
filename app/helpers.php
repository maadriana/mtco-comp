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
if (!function_exists('getContent')) {
    /**
     * Get content by key with optional default value
     */
    function getContent($key, $default = '') {
        static $cache = [];

        if (!isset($cache[$key])) {
            $content = \App\Models\Content::where('key', $key)->first();
            $cache[$key] = $content ? $content->value : $default;
        }

        return $cache[$key];
    }
}

if (!function_exists('hasImageContent')) {
    /**
     * Check if content key has an image
     */
    function hasImageContent($key) {
        static $cache = [];

        if (!isset($cache[$key])) {
            $content = \App\Models\Content::where('key', $key)->first();
            $cache[$key] = $content && !empty($content->image);
        }

        return $cache[$key];
    }
}

if (!function_exists('getImageContent')) {
    /**
     * Get image content as base64 data URL
     */
    function getImageContent($key) {
        $content = \App\Models\Content::where('key', $key)->first();

        if ($content && !empty($content->image)) {
            return 'data:image/jpeg;base64,' . base64_encode($content->image);
        }

        return null;
    }
}

if (!function_exists('getArticleRoute')) {
    /**
     * Get the correct route for an article (external link or internal route)
     */
    function getArticleRoute($articleNumber, $internalRoute) {
        $externalLink = getContent("news_article{$articleNumber}_external_link");

        if (!empty($externalLink)) {
            return $externalLink;
        }

        return $internalRoute;
    }
}

if (!function_exists('isExternalArticle')) {
    /**
     * Check if article has external link
     */
    function isExternalArticle($articleNumber) {
        $externalLink = getContent("news_article{$articleNumber}_external_link");
        return !empty($externalLink);
    }
}
