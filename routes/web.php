<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BlogMiddleware;
use App\Http\Middleware\LocalMiddleware;
use App\Models\Division;
use App\Models\Department;
use App\Models\Team;
use App\Models\User;
// Route::get('/', function() {
//     return view('rendering');
// })->name('home');
// Route::middleware([LocalMiddleware::class])
//     ->group(function () {
//         Route::get('/page', function() {
//             return view('rendering');
//         })->name('page');
//         Route::middleware([BlogMiddleware::class])
//         ->get('/blog', function(){
//             return view('rendering');
//         })->name('blog');
//     });
Route::get('/', function() {
    $divisions = Division::query()->with(['departments'
    ])->get();
    return view('division', [
        'divisions' => $divisions
    ]);
})->name('division.list');

Route::get('/department/{id}', function ($id) {
    $department = Department::with(['teams.users'])->findOrFail($id);
    return view('department',[
        'department' => $department
    ]);
})->name('department.show');