<?php

use Illuminate\Support\Facades\Route;
use Webkul\CustemCategory\Http\Controllers\Shop\CustemCategoryController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'custemcategory'], function () {
    Route::get('', [CustemCategoryController::class, 'index'])->name('shop.custemcategory.index');
});