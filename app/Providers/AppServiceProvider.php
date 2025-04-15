<?php

namespace App\Providers;


use App\Exceptions\InvalidEntrySlugException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\Entry;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('entryBySlug',function(string $value) {
            $parts = explode('-',$value);
            $id = end($parts);
            $entry = Entry::findOrFail($id);


            if ($entry->slug.'-'.$entry->id === $value) {
                return $entry;
            } else {
                throw new InvalidEntrySlugException($entry);
            }
        });
    }
}
