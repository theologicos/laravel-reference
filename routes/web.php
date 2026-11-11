<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::resource('departments', DepartmentController::class);

/*
This automatically creates routes for:

    /departments - index
    /departments/create - create
    /departments - store
    /departments/{id} - show
    /departments/{id}/edit - edit
    /departments/{id} - update
    /departments/{id} - destroy

See https://laravel.com/framework/docs/13.x/controllers#resource-controllers
*/
