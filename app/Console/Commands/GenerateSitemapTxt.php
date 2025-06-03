<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapTxt extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate a sitemap.xml file with all public GET routes ';

public function handle()
{
    $sitemap = Sitemap::create();

    $excludedBaseUris = [
        'email/verify',
        'reset-password',
        'user', 
        'sanctum/csrf-cookie',
        'livewire/livewire.js',
        'livewire/livewire.min.js.map',
        'livewire/preview-file',
        'up',          
    ];

    $routes = collect(Route::getRoutes())->filter(function ($route) use ($excludedBaseUris) {
        if (!in_array('GET', $route->methods())) {
            return false;
        }

        $uri = $route->uri();

        // Exclude if starts with excluded base URI
        foreach ($excludedBaseUris as $excluded) {
            if (str_starts_with($uri, $excluded)) {
                return false;
            }
        }

        // Exclude internal or api routes, etc.
        if (str_starts_with($uri, '_') || str_starts_with($uri, 'api')) {
            return false;
        }

        return true;
    });

    foreach ($routes as $route) {
        $uri = $route->uri();

        // Replace {param} placeholders with 'example' to create valid URLs
        if (str_contains($uri, '{')) {
            $uri = preg_replace('/\{[^}]+\}/', 'example', $uri);
        }

        $url = url($uri);
        $sitemap->add(
            Url::create($url)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
        );
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));
    $this->info('✅ sitemap.xml generated from web.php routes');
}



}
