<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\CareerTypeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnviromentTypeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LearningEnviromentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SchedulingEnviromentController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::prefix('enviroment_type')->group(function(){
    Route::get('/index', [EnviromentTypeController::class, 'index'])->name('enviroment_type.index');
    Route::get('/create', [EnviromentTypeController::class, 'create'])->name('enviroment_type.create');
    Route::get('/edit/{id}', [EnviromentTypeController::class, 'edit'])->name('enviroment_type.edit');
    Route::post('/create', [EnviromentTypeController::class, 'store'])->name('enviroment_type.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [EnviromentTypeController::class, 'update'])->name('enviroment_type.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [EnviromentTypeController::class, 'destroy'])->name('enviroment_type.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('scheduling_enviroment')->group(function(){
    Route::get('/index', [SchedulingEnviromentController::class, 'index'])->name('scheduling_enviroment.index');
    Route::get('/create', [SchedulingEnviromentController::class, 'create'])->name('scheduling_enviroment.create');
    Route::get('/edit/{id}', [SchedulingEnviromentController::class, 'edit'])->name('scheduling_enviroment.edit');
    Route::post('/create', [SchedulingEnviromentController::class, 'store'])->name('scheduling_enviroment.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [SchedulingEnviromentController::class, 'update'])->name('scheduling_enviroment.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [SchedulingEnviromentController::class, 'destroy'])->name('scheduling_enviroment.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('learning_enviroment')->group(function(){
    Route::get('/index', [LearningEnviromentController::class, 'index'])->name('learning_enviroment.index');
    Route::get('/create', [LearningEnviromentController::class, 'create'])->name('learning_enviroment.create');
    Route::get('/edit/{id}', [LearningEnviromentController::class, 'edit'])->name('learning_enviroment.edit');
    Route::post('/create', [LearningEnviromentController::class, 'store'])->name('learning_enviroment.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [LearningEnviromentController::class, 'update'])->name('learning_enviroment.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [LearningEnviromentController::class, 'destroy'])->name('learning_enviroment.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('course')->group(function(){
    Route::get('/index', [CourseController::class, 'index'])->name('course.index');
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/create', [CourseController::class, 'store'])->name('course.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [CourseController::class, 'update'])->name('course.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('career')->group(function(){
    Route::get('/index', [CareerController::class, 'index'])->name('career.index');
    Route::get('/create', [CareerController::class, 'create'])->name('career.create');
    Route::get('/edit/{id}', [CareerController::class, 'edit'])->name('career.edit');
    Route::post('/create', [CareerController::class, 'store'])->name('career.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [CareerController::class, 'update'])->name('career.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [CareerController::class, 'destroy'])->name('career.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('location')->group(function(){
    Route::get('/index', [LocationController::class, 'index'])->name('location.index');
    Route::get('/create', [LocationController::class, 'create'])->name('location.create');
    Route::get('/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
    Route::post('/create', [LocationController::class, 'store'])->name('location.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{id}', [LocationController::class, 'update'])->name('location.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{id}', [LocationController::class, 'destroy'])->name('location.destroy'); //se usa get en la ruta destroy para eliminar registros

});

Route::prefix('instructor')->group(function(){
    Route::get('/index', [InstructorController::class, 'index'])->name('instructor.index');
    Route::get('/create', [InstructorController::class, 'create'])->name('instructor.create');
    Route::get('/edit/{document}', [InstructorController::class, 'edit'])->name('instructor.edit');
    Route::post('/create', [InstructorController::class, 'store'])->name('instructor.store'); //se usa post en la ruta store para almacenar registros nuevos
    Route::put('/edit/{document}', [InstructorController::class, 'update'])->name('instructor.update'); //se usa put en la ruta update para actualizar registros
    Route::get('/destroy/{document}', [InstructorController::class, 'destroy'])->name('instructor.destroy'); //se usa get en la ruta destroy para eliminar registros

});


