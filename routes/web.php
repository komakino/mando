<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Komakino\Mando\Models\Character;

Route::prefix('mando')
    // In the vanilla Laravel 8 I used for this, SubstituteBindings was not included in the default middlewares for some reason so I explicitly included it here.
    ->middleware([SubstituteBindings::class])
    ->group(function () {
        Route::get('character/{character}', function (Character $character) {
            return view('mando::character-show', compact('character'));
        });
    });

