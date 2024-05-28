<?php
 
 
 
// use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\OrderItemController;
// use App\Http\Controllers\ItemController;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

// // Authentication Routes
// Auth::routes();

// // Home route
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// // Resource Routes
// Route::middleware(['auth','super_admin'])->group(function () {
//     // Customers
//     Route::resource('customers', CustomerController::class)->except(['edit', 'show', 'update', 'destroy']);
//     Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit'); // Edit
//     Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customers.show'); // Show
//     Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update'); // Update
//     Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Destroy
    
//     // Orders
//     Route::resource('orders', OrderController::class)->except(['show', 'update', 'destroy']);
//     Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show'); // Show
//     Route::put('orders/{order}', [OrderController::class, 'update'])->name('orders.update'); // Update
//     Route::delete('orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy'); // Destroy

//     // Order Items
//     Route::resource('orders.items', OrderItemController::class)->except(['show', 'update', 'destroy']);
//     Route::get('orders/{order}/items/{item}', [OrderItemController::class, 'show'])->name('orderItems.show'); // Show
//     Route::put('orders/{order}/items/{item}', [OrderItemController::class, 'update'])->name('orderItems.update'); // Update
//     Route::delete('orders/{order}/items/{item}', [OrderItemController::class, 'destroy'])->name('orderItems.destroy'); // Destroy

//     // Items
//     Route::resource('items', ItemController::class)->except(['show', 'update', 'destroy']);
//     Route::get('items/{item}', [ItemController::class, 'show'])->name('items.show'); // Show
//     Route::put('items/{item}', [ItemController::class, 'update'])->name('items.update'); // Update
//     Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('items.destroy'); // Destroy
// });
 
 



 
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Resource Routes
Route::middleware(['auth', 'super_admin'])->group(function () {
    // Customers
    Route::resource('customers', CustomerController::class)->except(['edit', 'show', 'update', 'destroy']);
    Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit'); // Edit
    Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customers.show'); // Show
    Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update'); // Update
    Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Destroy
    
    // Orders
    Route::resource('orders', OrderController::class)->except(['show', 'update', 'destroy']);
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show'); // Show
    Route::put('orders/{order}', [OrderController::class, 'update'])->name('orders.update'); // Update
    Route::delete('orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy'); // Destroy

    // Order Items
    Route::resource('orders.items', OrderItemController::class)->except(['show', 'update', 'destroy']);
    Route::get('orders/{order}/items/{item}', [OrderItemController::class, 'show'])->name('orderItems.show'); // Show
    Route::put('orders/{order}/items/{item}', [OrderItemController::class, 'update'])->name('orderItems.update'); // Update
    Route::delete('orders/{order}/items/{item}', [OrderItemController::class, 'destroy'])->name('orderItems.destroy'); // Destroy

    // Items
    Route::resource('items', ItemController::class)->except(['show', 'update', 'destroy']);
    Route::get('items/{item}', [ItemController::class, 'show'])->name('items.show'); // Show
    Route::put('items/{item}', [ItemController::class, 'update'])->name('items.update'); // Update
    Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('items.destroy'); // Destroy
});

Route::middleware(['auth', 'staff'])->group(function () {
    Route::resource('orders', OrderController::class)->except(['show', 'update', 'destroy']);
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show'); // Show
   
    // Add routes accessible only to staff here
});
 