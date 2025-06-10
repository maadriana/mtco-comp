<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class Hero extends Controller
{
    public function index()
    {
        // Fetch hero-related content keys all at once
        $keys = ['hero_title', 'hero_subtitle', 'hero_button'];
        
        $contents = Content::whereIn('key', $keys)->get()->keyBy('key');

        // Prepare an array with defaults if content not found
        $heroContent = [
            'hero_title' => $contents['hero_title']->value ?? 'Welcome to <span>Mendoza Tugano & Co., CPAs</span>',
            'hero_subtitle' => $contents['hero_subtitle']->value ?? 'Preserving a legacy of excellence',
            'hero_button' => $contents['hero_button']->value ?? 'Connect with us',
        ];

        return view('partials.hero', compact('heroContent'));
    }
}