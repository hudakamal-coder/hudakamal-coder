<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
//Route::get('/note/index',[NoteController::class,'index'])->names('note.index');
 //Route::get('/note/create',[NoteController::class,'create'])->names('note.create');
 //Route::get('/note/store',[NoteController::class,'store'])->names('note.store');

Route::resource('/note',NoteController::class);