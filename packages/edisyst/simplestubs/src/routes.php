<?php

Route::get('/simplestubs', function () {
    echo "simple stubns";
});

Route::get('add/{a}/{b}', [\Edisyst\Simplestubs\SimplestubsController::class, 'add']);
Route::get('sub/{a}/{b}', [\Edisyst\Simplestubs\SimplestubsController::class, 'sub']);
