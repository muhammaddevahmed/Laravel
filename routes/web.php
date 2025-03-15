<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',function(){
    return view('home');
});
Route::get('about',function(){
    return view('about');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('testimonial',function(){
    return view('testimonial');
});
Route::get('table',function(){
    return view('table');
});
Route::get('index', function () {
    return app(MyController::class)->selectArray();
});

Route::get('users', function () {
    return app(MyController::class)->selectUsers();
});

Route::get('insert',function(){
        return view('insertData');
});
Route::post( "insert",[MyController::class,'insertData']);

Route::get('selectUsers', function () {
    return app(MyController::class)->selectStudents();
});

Route::get("edit/{id}", [MyController::class, 'editData']);

Route::post("edit/{id}", [MyController::class, 'updateData']);

Route::get("delete/{id}", [MyController::class, 'deleteData'])->name('deleteUser');


