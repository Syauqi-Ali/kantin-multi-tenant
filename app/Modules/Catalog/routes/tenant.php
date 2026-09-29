<?php

use App\Support\Routing\PortalRoutes;

PortalRoutes::tenant(function (): void {
    Route::get('menus', MenuIndexController::class)->name('menus.index');
});
