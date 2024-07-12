<?php

use Illuminate\Support\Facades\Route;
use Webkul\CustemCategory\Http\Controllers\Admin\CustemCategoryController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/custemcategory'], function () {
    Route::controller(CustemCategoryController::class)->group(function () {
        Route::get('', 'index')->name('admin.custemcategory.index');
    });
});