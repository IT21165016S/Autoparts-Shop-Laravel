<?php
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('products', ProductController::class);
});
?>